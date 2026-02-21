<?php

namespace App\Controller\Front;

use App\Entity\Energie;
use App\Entity\Recommandation;
use App\Entity\User;
use App\Repository\EnergieRepository;
use App\Service\GeminiRecommandationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

#[Route('/front/energie')]
class EnergieController extends AbstractController
{
    /**
     * ✅ Anti-saisie absurde: limites max par type (à ajuster selon tes unités).
     * Ici c’est volontairement large mais protège contre 10^13 etc.
     */
    private function getMaxValeurByType(string $typeEnergie): float
    {
        return match ($typeEnergie) {
            'Eau' => 1_000_000,          // ex: litres / m3... (à ajuster)
            'Gaz' => 1_000_000,          // à ajuster
            'Électricité' => 1_000_000,  // à ajuster
            default => 1_000_000,
        };
    }

    #[Route('/', name: 'front_energie_index', methods: ['GET'])]
    public function index(EnergieRepository $repo): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $energies = $repo->findBy(
            ['user' => $user],
            ['date_enregistrement' => 'DESC']
        );

        return $this->render('front/energy.html.twig', [
            'energies' => $energies,
            'addErrors' => [],
            'oldAdd' => [],
        ]);
    }

    #[Route('/add', name: 'front_energie_add', methods: ['POST'])]
    public function add(
        Request $request,
        EntityManagerInterface $em,
        EnergieRepository $repo,
        GeminiRecommandationService $gemini,
        MailerInterface $mailer
    ): Response {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $addErrors = [];
        $oldAdd = [];

        $typeEnergie = trim((string) $request->request->get('typeEnergie'));
        $periodeRaw  = trim((string) $request->request->get('periode'));
        $valeurRaw   = trim((string) $request->request->get('valeur'));
        $source      = trim((string) $request->request->get('source'));
        $dateRaw     = trim((string) $request->request->get('dateEnregistrement'));

        $oldAdd = [
            'typeEnergie' => $typeEnergie,
            'periode' => $periodeRaw,
            'valeur' => $valeurRaw,
            'source' => $source,
            'dateEnregistrement' => $dateRaw,
        ];

        $allowedTypes = ['Électricité', 'Gaz', 'Eau'];

        // type
        if ($typeEnergie === '') {
            $addErrors['typeEnergie'] = "Le type d'énergie est obligatoire.";
        } elseif (!in_array($typeEnergie, $allowedTypes, true)) {
            $addErrors['typeEnergie'] = "Type d'énergie invalide.";
        }

        // periode
        if ($periodeRaw === '') {
            $addErrors['periode'] = "La période est obligatoire.";
        } elseif (!is_numeric($periodeRaw)) {
            $addErrors['periode'] = "La période doit être un nombre.";
        } elseif ((float)$periodeRaw <= 0) {
            $addErrors['periode'] = "La période doit être > 0.";
        }

        // valeur
        if ($valeurRaw === '') {
            $addErrors['valeur'] = "La valeur est obligatoire.";
        } elseif (!is_numeric($valeurRaw)) {
            $addErrors['valeur'] = "La valeur doit être un nombre.";
        } elseif ((float)$valeurRaw < 0) {
            $addErrors['valeur'] = "La valeur doit être >= 0.";
        } else {
            // ✅ Anti valeur absurde
            $maxValeur = $this->getMaxValeurByType($typeEnergie ?: 'Électricité');
            if ((float)$valeurRaw > $maxValeur) {
                $addErrors['valeur'] = "La valeur est trop grande (max {$maxValeur}).";
            }
        }

        // source
        if ($source === '') {
            $addErrors['source'] = "La source est obligatoire.";
        } elseif (mb_strlen($source) < 2) {
            $addErrors['source'] = "La source doit contenir au moins 2 caractères.";
        } elseif (mb_strlen($source) > 120) {
            $addErrors['source'] = "La source ne doit pas dépasser 120 caractères.";
        }

        // date (optionnelle)
        try {
            $dateObj = $dateRaw ? new \DateTime($dateRaw) : new \DateTime();
        } catch (\Exception $e) {
            $addErrors['dateEnregistrement'] = "Date invalide (AAAA-MM-JJ).";
            $dateObj = null;
        }

        if (!empty($addErrors)) {
            $energies = $repo->findBy(['user' => $user], ['date_enregistrement' => 'DESC']);
            $this->addFlash('danger', 'Veuillez corriger les erreurs du formulaire d’ajout.');

            return $this->render('front/energy.html.twig', [
                'energies' => $energies,
                'addErrors' => $addErrors,
                'oldAdd' => $oldAdd,
            ]);
        }

        // ================== CREATE ENERGIE ==================
        $energie = new Energie();
        $energie->setUser($user);
        $energie->setTypeEnergie($typeEnergie);
        $energie->setPeriode((float) $periodeRaw);
        $energie->setValeur((float) $valeurRaw);
        $energie->setSource($source);
        $energie->setDateEnregistrement($dateObj);

        $em->persist($energie);
        $em->flush();

        // ================== IMPACT (int + label) ==================
        $moyenne = $energie->getValeur() / max($energie->getPeriode(), 1);

        if ($moyenne < 10) {
            $impactLabel = 'Faible';
            $impactInt = 1;
        } elseif ($moyenne < 30) {
            $impactLabel = 'Moyen';
            $impactInt = 2;
        } else {
            $impactLabel = 'Élevé';
            $impactInt = 3;
        }

        // ================== IA Gemini ==================
        $descriptionIA = $gemini->generateDescription(
            $energie,
            $energie->getValeur(),
            $impactInt
        );

        // ================== Create Recommandation ==================
        $rec = new Recommandation();
        $rec->setEnergie($energie);
        $rec->setTitre('Recommandation ' . $energie->getTypeEnergie());
        $rec->setDescription($descriptionIA);
        $rec->setNiveauImpact($impactLabel);
        $rec->setDateGeneration(new \DateTime());

        $em->persist($rec);
        $em->flush();

        // ================== Email si impact élevé ==================
        if ($impactLabel === 'Élevé') {
            $email = (new Email())
                ->from('no-reply@buthog.tn')
                ->to($user->getEmail())
                ->subject('⚠️ Alerte consommation énergétique élevée')
                ->text(
                    "Une recommandation à impact élevé a été générée.\n\n" .
                    "Type : {$energie->getTypeEnergie()}\n" .
                    "Valeur : {$energie->getValeur()}\n" .
                    "Période (jours) : {$energie->getPeriode()}\n" .
                    "Moyenne / jour : " . round($moyenne, 2) . "\n\n" .
                    "Recommandation :\n{$descriptionIA}"
                );

            $mailer->send($email);
        }

        $this->addFlash('success', 'Énergie ajoutée avec succès. Recommandation générée automatiquement.');
        return $this->redirectToRoute('front_energie_index');
    }

    #[Route('/{id}/update', name: 'front_energie_update', methods: ['POST'])]
    public function update(
        Energie $energie,
        Request $request,
        EntityManagerInterface $em,
        GeminiRecommandationService $gemini,
        MailerInterface $mailer
    ): Response {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        if (!$energie->getUser() || $energie->getUser()->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        $typeEnergie = trim((string) $request->request->get('typeEnergie'));
        $periodeRaw  = trim((string) $request->request->get('periode'));
        $valeurRaw   = trim((string) $request->request->get('valeur'));
        $source      = trim((string) $request->request->get('source'));
        $dateRaw     = trim((string) $request->request->get('dateEnregistrement'));

        $allowedTypes = ['Électricité', 'Gaz', 'Eau'];
        $errors = [];

        if ($typeEnergie === '' || !in_array($typeEnergie, $allowedTypes, true)) {
            $errors[] = "Type d'énergie invalide.";
        }
        if ($periodeRaw === '' || !is_numeric($periodeRaw) || (float)$periodeRaw <= 0) {
            $errors[] = "Période invalide (doit être un nombre > 0).";
        }
        if ($valeurRaw === '' || !is_numeric($valeurRaw) || (float)$valeurRaw < 0) {
            $errors[] = "Valeur invalide (doit être un nombre >= 0).";
        } else {
            // ✅ Anti valeur absurde
            $maxValeur = $this->getMaxValeurByType($typeEnergie ?: 'Électricité');
            if ((float)$valeurRaw > $maxValeur) {
                $errors[] = "Valeur trop grande (max {$maxValeur}).";
            }
        }
        if ($source === '' || mb_strlen($source) < 2 || mb_strlen($source) > 120) {
            $errors[] = "Source invalide (2 à 120 caractères).";
        }

        try {
            $dateObj = $dateRaw ? new \DateTime($dateRaw) : $energie->getDateEnregistrement();
        } catch (\Exception $e) {
            $errors[] = "Date invalide (AAAA-MM-JJ).";
            $dateObj = null;
        }

        if (!empty($errors)) {
            foreach ($errors as $msg) {
                $this->addFlash('danger', $msg);
            }
            return $this->redirectToRoute('front_energie_index');
        }

        $energie->setTypeEnergie($typeEnergie);
        $energie->setPeriode((float) $periodeRaw);
        $energie->setValeur((float) $valeurRaw);
        $energie->setSource($source);
        if ($dateObj) {
            $energie->setDateEnregistrement($dateObj);
        }

        $em->flush();

        // ===== Update reco liée (si existe) =====
        $rec = $em->getRepository(Recommandation::class)->findOneBy(['energie' => $energie]);
        if ($rec) {
            $moyenne = $energie->getValeur() / max($energie->getPeriode(), 1);

            if ($moyenne < 10) {
                $impactLabel = 'Faible';
                $impactInt = 1;
            } elseif ($moyenne < 30) {
                $impactLabel = 'Moyen';
                $impactInt = 2;
            } else {
                $impactLabel = 'Élevé';
                $impactInt = 3;
            }

            $descriptionIA = $gemini->generateDescription(
                $energie,
                $energie->getValeur(),
                $impactInt
            );

            $rec->setTitre('Recommandation ' . $energie->getTypeEnergie())
                ->setDescription($descriptionIA)
                ->setNiveauImpact($impactLabel)
                ->setDateGeneration(new \DateTime());

            $em->flush();

            if ($impactLabel === 'Élevé') {
                $email = (new Email())
                    ->from('no-reply@buthog.tn')
                    ->to($user->getEmail())
                    ->subject('⚠️ Mise à jour : consommation énergétique élevée')
                    ->text(
                        "Une recommandation à impact élevé a été mise à jour.\n\n" .
                        "Type : {$energie->getTypeEnergie()}\n" .
                        "Valeur : {$energie->getValeur()}\n" .
                        "Période (jours) : {$energie->getPeriode()}\n" .
                        "Moyenne / jour : " . round($moyenne, 2) . "\n\n" .
                        "Recommandation :\n{$descriptionIA}"
                    );

                $mailer->send($email);
            }
        }

        $this->addFlash('success', 'Énergie modifiée avec succès.');
        return $this->redirectToRoute('front_energie_index');
    }

    #[Route('/{id}/delete', name: 'front_energie_delete', methods: ['POST'])]
    public function delete(Energie $energie, Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        if (!$energie->getUser() || $energie->getUser()->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete_energie_'.$energie->getId(), $request->request->get('_token'))) {
            $em->remove($energie);
            $em->flush();
            $this->addFlash('success', 'Énergie supprimée.');
        }

        return $this->redirectToRoute('front_energie_index');
    }
}
