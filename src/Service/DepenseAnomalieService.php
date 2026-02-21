<?php

namespace App\Service;

use App\Entity\Depense;

class DepenseAnomalieService
{
    /**
     * Détecte les dépenses anormales (> 1.5× la moyenne de leur catégorie).
     *
     * @param Depense[] $depenses
     * @return array<array{depense: Depense, ecart: float}>
     */
    public function detecter(array $depenses): array
    {
        // Grouper par catégorie
        $parCategorie = [];
        foreach ($depenses as $d) {
            $catId = $d->getCategorie()?->getIdCategorie() ?? 0;
            $parCategorie[$catId][] = $d;
        }

        $anomalies = [];
        foreach ($parCategorie as $groupe) {
            if (count($groupe) < 2) {
                continue;
            }
            $total = array_sum(array_map(fn(Depense $d) => (float) $d->getMontant(), $groupe));
            $moyenne = $total / count($groupe);
            $seuil = $moyenne * 1.5;

            foreach ($groupe as $d) {
                $montant = (float) $d->getMontant();
                if ($montant > $seuil) {
                    $ecart = round((($montant - $moyenne) / $moyenne) * 100, 1);
                    $anomalies[] = ['depense' => $d, 'ecart' => $ecart];
                }
            }
        }

        return $anomalies;
    }
}
