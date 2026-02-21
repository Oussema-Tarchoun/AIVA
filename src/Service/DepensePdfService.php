<?php

namespace App\Service;

use Dompdf\Dompdf;
use Dompdf\Options;
use Twig\Environment;

class DepensePdfService
{
    public function __construct(
        private Environment $twig,
    ) {}

    /**
     * @param array $depenses
     * @return string PDF content
     */
    public function generer(array $depenses): string
    {
        $total = array_sum(array_map(fn($d) => (float) $d->getMontant(), $depenses));

        $html = $this->twig->render('front/depense/pdf.html.twig', [
            'depenses' => $depenses,
            'total' => $total,
            'date' => new \DateTime(),
        ]);

        $options = new Options();
        $options->set('isRemoteEnabled', true);
        $options->set('defaultFont', 'Helvetica');

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->output();
    }
}
