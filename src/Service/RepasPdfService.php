<?php

namespace App\Service;

use App\Entity\Repas;
use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class RepasPdfService
{
    public function __construct(
        private Environment $twig,
        private ParameterBagInterface $params
    ) {}

    public function generateRepasPdf(Repas $repas): string
    {
        $projectDir = $this->params->get('kernel.project_dir');

        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');
        $options->set('isHtml5ParserEnabled', true);
        $options->set('chroot', $projectDir . '/public');

        $dompdf = new Dompdf($options);

        // Logo en base64 — Dompdf ne lit pas les chemins relatifs
        $logoPath   = $projectDir . '/public/images/logo.png';
        $logoBase64 = null;
        if (file_exists($logoPath)) {
            $logoBase64 = 'data:image/png;base64,' . base64_encode(file_get_contents($logoPath));
        }

        // Calcul des calories par aliment depuis les macros (protéines×4 + glucides×4 + lipides×9)
        $alimentsData = [];
        foreach ($repas->getAliments() as $aliment) {
            $macro    = $aliment->getMacro();
            $prot     = (float)($macro['proteine'] ?? 0);
            $gluc     = (float)($macro['glucide']  ?? 0);
            $lip      = (float)($macro['lipide']   ?? 0);
            $calories = round($prot * 4 + $gluc * 4 + $lip * 9);

            $alimentsData[] = [
                'nom'      => $aliment->getNom(),
                'quantite' => $aliment->getQuantite(),
                'proteine' => $prot,
                'glucide'  => $gluc,
                'lipide'   => $lip,
                'calories' => $calories,
            ];
        }

        $html = $this->twig->render('back/repas/pdf.html.twig', [
            'repas'        => $repas,
            'alimentsData' => $alimentsData,
            'logoBase64'   => $logoBase64,
            'generatedAt'  => new \DateTimeImmutable(),
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->output();
    }
}
