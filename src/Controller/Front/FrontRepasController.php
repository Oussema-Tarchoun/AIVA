<?php

namespace App\Controller\Front;

use App\Entity\Repas;
use App\Form\FrontRepasType;
use App\Repository\RepasRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;
use App\Repository\AlimentRepository;
use Symfony\Component\HttpFoundation\JsonResponse;


#[Route('/nutrition/repas')]
final class FrontRepasController extends AbstractController
{
    // ✅ ORDRE CORRECT : routes fixes AVANT /{id}

    #[Route('', name: 'front_repas_index', methods: ['GET'])]
    public function index(Request $request, RepasRepository $repasRepository): Response
    {
        $searchNom    = $request->query->get('search', '');
        $sortCalories = $request->query->get('sort', '');

        $qb = $repasRepository->createQueryBuilder('r');

        if ($this->getUser()) {
            $qb->andWhere('r.user = :u')->setParameter('u', $this->getUser());
        }

        if ($searchNom !== '') {
            $qb->andWhere('r.nom LIKE :nom')->setParameter('nom', '%' . $searchNom . '%');
        }

        if ($sortCalories === 'asc') {
            $qb->orderBy('r.calories', 'ASC');
        } elseif ($sortCalories === 'desc') {
            $qb->orderBy('r.calories', 'DESC');
        } else {
            $qb->orderBy('r.id', 'DESC');
        }

        $repas = $qb->getQuery()->getResult();

        return $this->render('front/repas/index.html.twig', [
            'repas'        => $repas,
            'searchNom'    => $searchNom,
            'sortCalories' => $sortCalories,
        ]);
    }

    #[Route('/new', name: 'front_repas_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        $repas = new Repas();
        $form  = $this->createForm(FrontRepasType::class, $repas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $errors = $validator->validate($repas);
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
                return $this->render('front/repas/new.html.twig', [
                    'repas' => $repas,
                    'form'  => $form->createView(),
                ]);
            }

            if ($this->getUser()) {
                $repas->setUser($this->getUser());
            }

            $em->persist($repas);
            $em->flush();

            $this->addFlash('success', 'Repas ajouté ✅');
            return $this->redirectToRoute('front_repas_index');
        }

        return $this->render('front/repas/new.html.twig', [
            'repas' => $repas,
            'form'  => $form->createView(),
        ]);
    }

    // =========================
    // CHAT — GROQ
    // =========================
    #[Route('/chat', name: 'front_repas_chat', methods: ['POST'])]
    public function chat(Request $request): JsonResponse
    {
        if (!$this->getUser()) {
            return $this->json(['error' => 'Unauthorized'], 401);
        }

        $payload = json_decode($request->getContent(), true) ?? [];
        $message = trim((string)($payload['message'] ?? ''));

        if ($message === '') {
            return $this->json(['error' => 'Empty message'], 400);
        }

        $system = <<<SYS
Tu es un assistant nutrition. Réponds UNIQUEMENT en JSON valide, sans markdown, sans texte hors JSON.

Schéma EXACT:
{
  "assistantText": "string",
  "proposal": {
    "title": "string",
    "mealType": "petit-dejeuner" ou "dejeuner" ou "diner" ou "collation",
    "items": [
      {
        "alimentName": "string",
        "quantity": number,
        "unit": "string",
        "nutrients": { "calories": number, "proteine": number, "glucide": number, "lipide": number }
      }
    ],
    "estimatedCalories": number,
    "notes": "string",
    "recipe": {
      "ingredients": ["string"],
      "steps": ["string"]
    }
  }
}
Règles: max 5 items, max 4 steps, valeurs nutritionnelles réalistes (jamais 0).
SYS;

        try {
            $body = json_encode([
                "model"           => "llama-3.1-8b-instant",
                "messages"        => [
                    ["role" => "system", "content" => $system],
                    ["role" => "user",   "content" => "Demande: " . $message],
                ],
                "max_tokens"      => 1024,
                "temperature"     => 0.2,
                "response_format" => ["type" => "json_object"],
            ], JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            return $this->json(['error' => 'JSON encode failed'], 500);
        }

        $resp = $this->callGroq($body);
        if (isset($resp['error'])) return $this->json($resp, 500);

        $text = $resp['choices'][0]['message']['content'] ?? '';
        $data = $this->parseJson($text);

        if (!is_array($data)) {
            return $this->json(['error' => 'Invalid JSON from Groq', 'raw' => $text], 500);
        }

        $blocks = [];
        if (!empty($data['proposal'])) {
            $p        = $data['proposal'];
            $blocks[] = [
                "type"      => "meal_proposal",
                "title"     => $p['title']    ?? 'Repas proposé',
                "mealType"  => $p['mealType'] ?? 'dejeuner',
                "items"     => $p['items']    ?? [],
                "estimated" => ["calories" => (int) round($p['estimatedCalories'] ?? 0)],
                "notes"     => $p['notes']    ?? '',
                "recipe"    => $p['recipe']   ?? null,
            ];
        }

        return $this->json([
            "assistantText" => $data['assistantText'] ?? '',
            "blocks"        => $blocks,
        ]);
    }

    // =========================
    // ANALYZE PHOTO — GROQ VISION
    // =========================
    #[Route('/analyze-photo', name: 'front_repas_analyze_photo', methods: ['POST'])]
    public function analyzePhoto(Request $request): JsonResponse
    {
        if (!$this->getUser()) {
            return $this->json(['error' => 'Unauthorized'], 401);
        }

        $payload  = json_decode($request->getContent(), true) ?? [];
        $imageB64 = $payload['image']    ?? '';
        $mimeType = $payload['mimeType'] ?? 'image/jpeg';

        if (empty($imageB64)) {
            return $this->json(['error' => 'No image provided'], 400);
        }

        $system = <<<SYS
Tu es un expert en nutrition. On te donne la photo d'un plat.
Identifie les aliments visibles et retourne UNIQUEMENT ce JSON valide:
{
  "assistantText": "string (décris brièvement ce que tu vois)",
  "proposal": {
    "title": "string (nom du plat)",
    "mealType": "dejeuner",
    "items": [
      {
        "alimentName": "string",
        "quantity": number,
        "unit": "string",
        "nutrients": { "calories": number, "proteine": number, "glucide": number, "lipide": number }
      }
    ],
    "estimatedCalories": number,
    "notes": "string",
    "recipe": null
  }
}
Règles: max 6 items, valeurs nutritionnelles réalistes, jamais 0.
SYS;

        try {
            $body = json_encode([
                "model"    => "meta-llama/llama-4-scout-17b-16e-instruct",
                "messages" => [
                    ["role" => "system", "content" => $system],
                    [
                        "role"    => "user",
                        "content" => [
                            [
                                "type"      => "image_url",
                                "image_url" => ["url" => "data:{$mimeType};base64,{$imageB64}"]
                            ],
                            ["type" => "text", "text" => "Identifie les aliments et propose un repas avec leurs valeurs nutritionnelles."]
                        ]
                    ]
                ],
                "max_tokens" => 1024,
            ], JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            return $this->json(['error' => 'JSON encode failed'], 500);
        }

        $resp = $this->callGroq($body);
        if (isset($resp['error'])) return $this->json($resp, 500);

        $text = $resp['choices'][0]['message']['content'] ?? '';
        $data = $this->parseJson($text);

        if (!is_array($data)) {
            return $this->json(['error' => 'Invalid JSON from Groq', 'raw' => $text], 500);
        }

        $blocks = [];
        if (!empty($data['proposal'])) {
            $p        = $data['proposal'];
            $blocks[] = [
                "type"      => "meal_proposal",
                "title"     => $p['title']    ?? 'Repas détecté',
                "mealType"  => $p['mealType'] ?? 'dejeuner',
                "items"     => $p['items']    ?? [],
                "estimated" => ["calories" => (int) round($p['estimatedCalories'] ?? 0)],
                "notes"     => $p['notes']    ?? '',
                "recipe"    => $p['recipe']   ?? null,
            ];
        }

        return $this->json([
            "assistantText" => $data['assistantText'] ?? '',
            "blocks"        => $blocks,
        ]);
    }

    // =========================
    // WEEKLY ANALYSIS — GROQ IA
    // =========================
    #[Route('/weekly-analysis', name: 'front_repas_weekly_analysis', methods: ['GET'])]
    public function weeklyAnalysis(RepasRepository $repasRepository): JsonResponse
    {
        if (!$this->getUser()) {
            return $this->json(['error' => 'Unauthorized'], 401);
        }

        try {
            $repas = $repasRepository->createQueryBuilder('r')
                ->leftJoin('r.aliments', 'a')
                ->addSelect('a')
                ->andWhere('r.user = :u')
                ->setParameter('u', $this->getUser())
                ->orderBy('r.id', 'ASC')
                ->getQuery()
                ->getResult();

        } catch (\Throwable $e) {
            return $this->json([
                'error'   => 'Erreur requête BDD',
                'message' => $e->getMessage(),
            ], 500);
        }

        if (count($repas) === 0) {
            return $this->json([
                'error'   => 'Pas assez de données',
                'message' => 'Aucun repas trouvé. Ajoute au moins un repas !'
            ], 422);
        }

        $premiereDate = $repas[0]->getDate()?->format('Y-m-d') ?? 'N/A';
        $derniereDate = $repas[count($repas)-1]->getDate()?->format('Y-m-d') ?? 'N/A';

        $parJour = [];
        foreach ($repas as $r) {
            $dateKey = $r->getDate()?->format('Y-m-d') ?? 'inconnu';
            $jourNom = $r->getDate()?->format('l') ?? 'Jour inconnu';

            if (!isset($parJour[$dateKey])) {
                $parJour[$dateKey] = ['date' => $dateKey, 'jour' => $jourNom, 'repas' => [], 'totalCalories' => 0];
            }

            $totalProt = 0; $totalGlu = 0; $totalLip = 0;
            foreach ($r->getAliments() as $aliment) {
                $macro = $aliment->getMacro();
                if (is_array($macro)) {
                    $totalProt += (float)($macro['proteine'] ?? 0);
                    $totalGlu  += (float)($macro['glucide']  ?? 0);
                    $totalLip  += (float)($macro['lipide']   ?? 0);
                }
            }

            $parJour[$dateKey]['repas'][] = [
                'nom'      => $r->getNom(),
                'type'     => $r->getType(),
                'heure'    => $r->getHeure()?->format('H:i') ?? '?',
                'calories' => $r->getCalories(),
                'proteine' => round($totalProt, 1),
                'glucide'  => round($totalGlu, 1),
                'lipide'   => round($totalLip, 1),
            ];
            $parJour[$dateKey]['totalCalories'] += $r->getCalories();
        }

        $totalRepas  = count($repas);
        $totalCals   = array_sum(array_column($parJour, 'totalCalories'));
        $moyenneCals = round($totalCals / count($parJour));

        $resumeText = "Repas de l'utilisateur (du {$premiereDate} au {$derniereDate}) :\n\n";
        foreach ($parJour as $jour) {
            $resumeText .= "📅 {$jour['jour']} ({$jour['date']}) — {$jour['totalCalories']} kcal\n";
            foreach ($jour['repas'] as $rep) {
                $resumeText .= "  - [{$rep['type']}] {$rep['nom']} : {$rep['calories']} kcal";
                if ($rep['proteine'] > 0 || $rep['glucide'] > 0 || $rep['lipide'] > 0) {
                    $resumeText .= " (P:{$rep['proteine']}g G:{$rep['glucide']}g L:{$rep['lipide']}g)";
                }
                $resumeText .= "\n";
            }
            $resumeText .= "\n";
        }
        $resumeText .= "Total repas : {$totalRepas} | Calories moyennes/jour : {$moyenneCals} kcal\n";

        $system = <<<SYS
Tu es un expert en nutrition et coach de santé. Analyse ces repas et génère un rapport.
Réponds UNIQUEMENT en JSON valide, sans markdown.

Schéma EXACT:
{
  "resume": "string",
  "points_positifs": ["string"],
  "points_amelioration": ["string"],
  "analyse_par_jour": [{ "jour": "string", "commentaire": "string" }],
  "conseils": ["string"],
  "score_semaine": number
}

Règles: 2-4 points positifs, 2-4 améliorations, 3-5 conseils. Score 0-100. Français.
SYS;

        try {
            $body = json_encode([
                "model"           => "llama-3.1-8b-instant",
                "messages"        => [
                    ["role" => "system", "content" => $system],
                    ["role" => "user",   "content" => $resumeText],
                ],
                "max_tokens"      => 1200,
                "temperature"     => 0.3,
                "response_format" => ["type" => "json_object"],
            ], JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
        } catch (\JsonException $e) {
            return $this->json(['error' => 'JSON encode failed: ' . $e->getMessage()], 500);
        }

        $resp = $this->callGroq($body);

        if (isset($resp['error'])) {
            return $this->json([
                'error'   => 'Erreur Groq',
                'message' => $resp['error'],
                'details' => $resp['details'] ?? null,
            ], 500);
        }

        $text = $resp['choices'][0]['message']['content'] ?? '';
        $data = $this->parseJson($text);

        if (!is_array($data)) {
            return $this->json([
                'error'   => 'Invalid JSON from Groq',
                'message' => 'Réponse invalide du modèle',
                'raw'     => substr($text, 0, 300),
            ], 500);
        }

        return $this->json([
            'ok'      => true,
            'stats'   => [
                'totalRepas'  => $totalRepas,
                'totalJours'  => count($parJour),
                'moyenneCals' => $moyenneCals,
            ],
            'analyse' => $data,
        ]);
    }

    // =========================
    // FROM PROPOSAL
    // =========================
    #[Route('/from-proposal', name: 'front_repas_from_proposal', methods: ['POST'])]
    public function fromProposal(
        Request $request,
        EntityManagerInterface $em,
        AlimentRepository $alimentRepo
    ): JsonResponse {
        if (!$this->getUser()) {
            return $this->json(['error' => 'Unauthorized'], 401);
        }

        $payload = json_decode($request->getContent(), true) ?? [];

        $title = trim((string)($payload['title']   ?? 'Repas proposé'));
        $type  = (string)($payload['mealType']      ?? 'dejeuner');
        $items = $payload['items']                  ?? [];

        $allowedTypes = ['petit-dejeuner', 'dejeuner', 'diner', 'collation'];
        if (!in_array($type, $allowedTypes, true)) {
            $type = 'dejeuner';
        }

        if (!is_array($items) || count($items) === 0) {
            return $this->json(['error' => 'No items'], 400);
        }

        $repas = new \App\Entity\Repas();
        $repas->setNom($title);
        $repas->setType($type);
        $repas->setHeure(new \DateTime());
        $repas->setDate(new \DateTimeImmutable());
        $repas->setUser($this->getUser());

        $totalCalories = 0;

        foreach ($items as $it) {
            $name = trim((string)($it['alimentName'] ?? ''));
            if ($name === '') continue;

            $quantity = (float)($it['quantity'] ?? 100);
            if ($quantity <= 0) $quantity = 100;

            $unit = trim((string)($it['unit'] ?? 'g'));
            if ($unit === '') $unit = 'g';

            $nut = is_array($it['nutrients'] ?? null) ? $it['nutrients'] : [];
            $cal = (float)($nut['calories'] ?? 0);
            $pro = (float)($nut['proteine'] ?? 0);
            $glu = (float)($nut['glucide']  ?? 0);
            $lip = (float)($nut['lipide']   ?? 0);

            if ($cal <= 0 && ($pro > 0 || $glu > 0 || $lip > 0)) {
                $cal = 4 * $pro + 4 * $glu + 9 * $lip;
            }

            $macro = ['proteine' => $pro, 'glucide' => $glu, 'lipide' => $lip];

            $aliment = $alimentRepo->createQueryBuilder('a')
                ->andWhere('LOWER(a.nom) = :n')
                ->setParameter('n', mb_strtolower($name))
                ->setMaxResults(1)
                ->getQuery()
                ->getOneOrNullResult();

            if (!$aliment) {
                $aliment = new \App\Entity\Aliment();
                $aliment->setNom($name);
                $aliment->setQuantite($quantity);
                $aliment->setMacro($macro);
                $em->persist($aliment);
            } else {
                $existingMacro = $aliment->getMacro();
                if ((empty($existingMacro) || !is_array($existingMacro)) && !empty($macro)) {
                    $aliment->setMacro($macro);
                }
                if (!$aliment->getQuantite() || $aliment->getQuantite() <= 0) {
                    $aliment->setQuantite($quantity);
                }
            }

            $repas->addAliment($aliment);
            $totalCalories += (int) round($cal);
        }

        $repas->setCalories(max(0, $totalCalories));
        $em->persist($repas);
        $em->flush();

        return $this->json([
            'ok'            => true,
            'repasId'       => $repas->getId(),
            'createdMeal'   => $repas->getNom(),
            'totalCalories' => $repas->getCalories(),
        ]);
    }

    // =========================
    // /{id} routes — EN DERNIER
    // =========================
    #[Route('/{id}', name: 'front_repas_show', methods: ['GET'])]
    public function show(Repas $repas): Response
    {
        if ($this->getUser() && $repas->getUser() && $repas->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }
        return $this->render('front/repas/show.html.twig', ['repas' => $repas]);
    }

    #[Route('/{id}/edit', name: 'front_repas_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Repas $repas, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        if ($this->getUser() && $repas->getUser() && $repas->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        $form = $this->createForm(FrontRepasType::class, $repas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $errors = $validator->validate($repas);
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
                return $this->render('front/repas/edit.html.twig', [
                    'repas' => $repas,
                    'form'  => $form->createView(),
                ]);
            }
            $em->flush();
            $this->addFlash('success', 'Repas mis à jour ✅');
            return $this->redirectToRoute('front_repas_index');
        }

        return $this->render('front/repas/edit.html.twig', [
            'repas' => $repas,
            'form'  => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'front_repas_delete', methods: ['POST'])]
    public function delete(Request $request, Repas $repas, EntityManagerInterface $em): Response
    {
        if ($this->getUser() && $repas->getUser() && $repas->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        if ($this->isCsrfTokenValid('delete' . $repas->getId(), (string) $request->request->get('_token'))) {
            $em->remove($repas);
            $em->flush();
            $this->addFlash('success', 'Repas supprimé ✅');
        }

        return $this->redirectToRoute('front_repas_index');
    }


    // =========================
    // PRIVATE HELPERS
    // =========================

    private function callGroq(string $jsonBody): array
    {
        $apiKey = $_ENV['GROQ_API_KEY'] ?? '';

        if (empty($apiKey)) {
            return ['error' => 'GROQ_API_KEY manquante dans .env'];
        }

        $ch = curl_init("https://api.groq.com/openai/v1/chat/completions");
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_HTTPHEADER     => [
                "Content-Type: application/json",
                "Authorization: Bearer " . $apiKey,
            ],
            CURLOPT_POSTFIELDS     => $jsonBody,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT        => 30,
        ]);

        $raw     = curl_exec($ch);
        $status  = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $curlErr = curl_error($ch);
        curl_close($ch);

        if ($raw === false) {
            return ['error' => 'Curl failed: ' . $curlErr];
        }

        $resp = json_decode($raw, true) ?? [];

        if ($status < 200 || $status >= 300) {
            return ['error' => 'Groq API error ' . $status, 'details' => $resp];
        }

        return $resp;
    }

    private function parseJson(string $text): ?array
    {
        $start = strpos($text, '{');
        $end   = strrpos($text, '}');
        if ($start !== false && $end !== false && $end > $start) {
            $text = substr($text, $start, $end - $start + 1);
        }

        $data = json_decode($text, true);

        if (!is_array($data)) {
            $text .= str_repeat(']', max(0, substr_count($text, '[') - substr_count($text, ']')));
            $text .= str_repeat('}', max(0, substr_count($text, '{') - substr_count($text, '}')));
            $data  = json_decode($text, true);
        }

        return is_array($data) ? $data : null;
    }
}