<?php

namespace App\Controller\Front;

use App\Entity\Recommandation;
use App\Entity\Energie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/front/recommandation')]
class RecommandationController extends AbstractController
{
    /**
     * Essaye de récupérer la "valeur" de consommation depuis l'entité Energie.
     * (Les noms exacts des getters peuvent varier selon ton projet.)
     */
    private function getEnergieValeur(Energie $energie): ?float
    {
        foreach (['getValeur', 'getConsommation', 'getQuantite', 'getValeurConsommation', 'getKwh', 'getValeurEnergie'] as $m) {
            if (method_exists($energie, $m)) {
                $v = $energie->$m();
                return $v !== null ? (float) $v : null;
            }
        }
        return null;
    }

    /**
     * ✅ Récupère la période en JOURS (float) depuis Energie.
     * Dans ton projet, periode est stockée en numérique (setPeriode((float)...)).
     */
    private function getEnergiePeriodeDays(Energie $energie): ?float
    {
        foreach (['getPeriode', 'getPeriodeEnergie', 'getFrequence', 'getPeriodeConsommation'] as $m) {
            if (method_exists($energie, $m)) {
                $p = $energie->$m();
                return $p !== null ? (float) $p : null;
            }
        }
        return null;
    }

    /**
     * ✅ Génère automatiquement titre + description + niveau d'impact
     * en cohérence avec EnergieController:
     * moyenne = valeur / periodeDays, seuils 10 / 30
     */
    private function buildAutoRecommendation(Energie $energie): array
    {
        $valeur = $this->getEnergieValeur($energie);
        $periodeDays = $this->getEnergiePeriodeDays($energie);

        $type = method_exists($energie, 'getTypeEnergie') ? (string) $energie->getTypeEnergie() : 'Énergie';

        // Fallback si valeur/période non dispo
        if ($valeur === null || $periodeDays === null || $periodeDays <= 0) {
            return [
                'titre' => 'Recommandation - ' . $type,
                'impact' => 'Moyen',
                'description' => "Impossible d’évaluer précisément (données incomplètes).",
            ];
        }

        $moyenne = $valeur / max($periodeDays, 1.0);

        if ($moyenne < 10) {
            $impact = 'Faible';
        } elseif ($moyenne < 30) {
            $impact = 'Moyen';
        } else {
            $impact = 'Élevé';
        }

        $description = match ($impact) {
            'Faible' => "Votre moyenne est d’environ " . round($moyenne, 2) . "/jour sur {$periodeDays} jours. Continuez : coupez les veilles, regroupez les usages, et suivez l’évolution chaque semaine.",
            'Moyen'  => "Votre moyenne est d’environ " . round($moyenne, 2) . "/jour sur {$periodeDays} jours. Réduisez les pics, vérifiez les appareils énergivores, et comparez vos périodes entre elles.",
            'Élevé'  => "Votre moyenne est d’environ " . round($moyenne, 2) . "/jour sur {$periodeDays} jours. Identifiez les gros consommateurs, limitez les pics, et planifiez un contrôle/audit ciblé.",
            default  => "Conseil : optimisez vos usages et suivez la tendance.",
        };

        $titre = "Reco {$type} - {$periodeDays} jours";

        return [
            'titre' => $titre,
            'impact' => $impact,
            'description' => $description,
        ];
    }

    #[Route('', name: 'front_recommandation_index', methods: ['GET', 'POST'])]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        $addErrors = [];
        $editErrors = [];
        $oldAdd = [];
        $editOld = [];

        // impacts possibles (on génère uniquement ces valeurs)
        $allowedImpacts = ['Faible', 'Moyen', 'Élevé'];

        // ✅ energies du user connecté (select)
        $energies = $em->getRepository(Energie::class)->findBy(
            ['user' => $user],
            ['date_enregistrement' => 'DESC']
        );

        // ================= POST =================
        if ($request->isMethod('POST')) {

            // ===================== EDIT =====================
            if ($request->request->get('edit_recommandation')) {
                $id = (int) $request->request->get('id_recommandation');
                $rec = $em->getRepository(Recommandation::class)->find($id);

                if (!$rec || !$rec->getEnergie() || $rec->getEnergie()->getUser() !== $user) {
                    throw $this->createAccessDeniedException();
                }

                // ✅ Auto (on ne prend plus ces champs depuis le formulaire)
                $titre = '';
                $description = '';
                $niveauImpact = '';
                $dateGeneration = trim((string) $request->request->get('date_generation'));
                $energieId = (int) $request->request->get('energie_id');

                $editOld[$rec->getId()] = [
                    'titre' => $titre,
                    'description' => $description,
                    'niveauImpact' => $niveauImpact,
                    'dateGeneration' => $dateGeneration,
                    'energie_id' => $energieId,
                ];

                if ($energieId <= 0) {
                    $editErrors[$rec->getId()]['energie'] = "L'énergie est obligatoire.";
                }

                // Date: optionnelle mais si fournie => doit être valide
                try {
                    $dateObj = $dateGeneration ? new \DateTime($dateGeneration) : new \DateTime();
                } catch (\Exception $e) {
                    $editErrors[$rec->getId()]['dateGeneration'] = 'La date doit être valide (AAAA-MM-JJ).';
                    $dateObj = null;
                }

                // énergie doit appartenir au user
                $energie = null;
                if ($energieId > 0) {
                    $energie = $em->getRepository(Energie::class)->find($energieId);
                    if (!$energie || $energie->getUser() !== $user) {
                        $editErrors[$rec->getId()]['energie'] = 'Énergie invalide.';
                    }
                }

                // ✅ génération automatique
                if ($energie && empty($editErrors[$rec->getId()] ?? [])) {
                    $auto = $this->buildAutoRecommendation($energie);
                    $titre = $auto['titre'];
                    $description = $auto['description'];
                    $niveauImpact = $auto['impact'];

                    // sécurité: au cas où
                    if (!in_array($niveauImpact, $allowedImpacts, true)) {
                        $niveauImpact = 'Moyen';
                    }
                }

                if (empty($editErrors[$rec->getId()] ?? [])) {
                    $rec->setTitre($titre)
                        ->setDescription($description)
                        ->setNiveauImpact($niveauImpact)
                        ->setDateGeneration($dateObj)
                        ->setEnergie($energie);

                    $em->flush();
                    $this->addFlash('success', 'Recommandation modifiée avec succès.');
                    return $this->redirectToRoute('front_recommandation_index');
                }

                $this->addFlash('danger', 'Veuillez corriger les erreurs du formulaire de modification.');
            }
            // ===================== ADD (désactivé) =====================
            else {
                $this->addFlash('info', "L'ajout manuel est désactivé : une recommandation est générée automatiquement à chaque création d'énergie.");
                return $this->redirectToRoute('front_recommandation_index');
            }
        }

        // ================= GET (list) =================
        $qb = $em->getRepository(Recommandation::class)->createQueryBuilder('r')
            ->join('r.energie', 'e')
            ->andWhere('e.user = :user')
            ->setParameter('user', $user)
            ->orderBy('r.date_generation', 'DESC');

        $recommandations = $qb->getQuery()->getResult();

        return $this->render('front/recommandation.html.twig', [
            'recommandations' => $recommandations,
            'energies' => $energies,
            'addErrors' => $addErrors,
            'editErrors' => $editErrors,
            'oldAdd' => $oldAdd,
            'editOld' => $editOld,
            'search' => '',
            'sort' => 'dateGeneration',
            'order' => 'DESC',
        ]);
    }

    #[Route('/{id}/delete', name: 'front_recommandation_delete', methods: ['POST'])]
    public function delete(Request $request, Recommandation $rec, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }

        if (!$rec->getEnergie() || $rec->getEnergie()->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete_reco_' . $rec->getId(), $request->request->get('_token'))) {
            $em->remove($rec);
            $em->flush();
            $this->addFlash('success', 'Recommandation supprimée.');
        }

        return $this->redirectToRoute('front_recommandation_index');
    }
}
