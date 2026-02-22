<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\RepasRepository;

/**
 * Extrait la logique d'analyse hebdomadaire de FrontRepasController
 * pour la réutiliser dans le mailing et ailleurs.
 */
class WeeklyAnalysisService
{
    public function __construct(
        private RepasRepository $repasRepository,
        private GroqService $groqService
    ) {}

    /**
     * Génère l'analyse complète pour un utilisateur.
     * Retourne null si pas assez de données.
     */
    public function generateForUser(User $user): ?array
    {
        $repas = $this->repasRepository->createQueryBuilder('r')
            ->leftJoin('r.aliments', 'a')
            ->addSelect('a')
            ->andWhere('r.user = :u')
            ->setParameter('u', $user)
            ->orderBy('r.id', 'ASC')
            ->getQuery()
            ->getResult();

        if (count($repas) === 0) {
            return null;
        }

        // ── Regrouper par jour ──────────────────────────────────────────────
        $parJour = [];
        foreach ($repas as $r) {
            $dateKey = $r->getDate()?->format('Y-m-d') ?? 'inconnu';
            $jourNom = $r->getDate()?->format('l')     ?? 'Jour inconnu';

            if (!isset($parJour[$dateKey])) {
                $parJour[$dateKey] = [
                    'date'          => $dateKey,
                    'jour'          => $jourNom,
                    'repas'         => [],
                    'totalCalories' => 0,
                ];
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

        $premiereDate = array_key_first($parJour) ?? 'N/A';
        $derniereDate = array_key_last($parJour)  ?? 'N/A';
        $totalRepas   = count($repas);
        $totalCals    = array_sum(array_column($parJour, 'totalCalories'));
        $moyenneCals  = round($totalCals / count($parJour));

        // ── Résumé texte pour Groq ──────────────────────────────────────────
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

        // ── Appel Groq ──────────────────────────────────────────────────────
        $analyse = $this->groqService->analyzeWeekly($resumeText);
        if (!$analyse) {
            return null;
        }

        return [
            'stats' => [
                'totalRepas'  => $totalRepas,
                'totalJours'  => count($parJour),
                'moyenneCals' => $moyenneCals,
                'premiere'    => $premiereDate,
                'derniere'    => $derniereDate,
            ],
            'analyse' => $analyse,
        ];
    }
}
