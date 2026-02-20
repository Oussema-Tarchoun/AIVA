<?php

namespace App\Controller;

use App\Entity\User;
use App\Repository\EnergieRepository;
use App\Repository\UserRepository;
use Dompdf\Dompdf;
use Dompdf\Options;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\ResponseHeaderBag;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[IsGranted('ROLE_USER')]
class EnergieExportController extends AbstractController
{
    private function resolveTargetUser(Request $request, UserRepository $userRepo): ?User
    {
        $param = (string) $request->query->get('user', 'me');

        if ($param === '' || $param === 'me') {
            return $this->getUser() instanceof User ? $this->getUser() : null;
        }

        if ($param === 'all') {
            if (!$this->isGranted('ROLE_ADMIN')) {
                throw $this->createAccessDeniedException('Vous ne pouvez pas exporter tous les utilisateurs.');
            }
            return null;
        }

        if (ctype_digit($param)) {
            $id = (int) $param;

            $current = $this->getUser();
            if (!$this->isGranted('ROLE_ADMIN')) {
                if (!$current instanceof User || $current->getId() !== $id) {
                    throw $this->createAccessDeniedException('Accès interdit.');
                }
            }

            return $userRepo->find($id);
        }

        return $this->getUser() instanceof User ? $this->getUser() : null;
    }

    /**
     * ✅ Fetch energies WITH recommandations (avoids empty recs in exports)
     */
    private function fetchEnergiesWithRecs(EnergieRepository $repo, ?User $targetUser): array
    {
        $qb = $repo->createQueryBuilder('e')
            ->leftJoin('e.recommandations', 'r')
            ->addSelect('r')
            ->leftJoin('e.user', 'u')
            ->addSelect('u')
            ->orderBy('e.date_enregistrement', 'DESC');

        if ($targetUser) {
            $qb->andWhere('e.user = :user')->setParameter('user', $targetUser);
        }

        return $qb->getQuery()->getResult();
    }

   

    #[Route('/back/energie/export/facture', name: 'energie_export_facture_pdf')]
    public function facturePdf(Request $request, EnergieRepository $repo, UserRepository $userRepo): Response
    {
        $targetUser = $this->resolveTargetUser($request, $userRepo);

        $energies = $this->fetchEnergiesWithRecs($repo, $targetUser);

        $total = array_sum(array_map(fn($e) => (float) $e->getValeur(), $energies));

        $html = $this->renderView('back/energie/export_facture.html.twig', [
            'user' => $targetUser,
            'energies' => $energies,
            'total' => $total,
            'date' => new \DateTime(),
            'isAll' => $targetUser === null,
        ]);

        $options = new Options();
        $options->set('defaultFont', 'DejaVu Sans');

        $dompdf = new Dompdf($options);
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return new Response(
            $dompdf->output(),
            200,
            [
                'Content-Type' => 'application/pdf',
                'Content-Disposition' => 'attachment; filename="rapport_consommation.pdf"',
            ]
        );
    }

    #[Route('/back/energie/export/excel', name: 'energie_export_excel')]
    public function exportExcel(Request $request, EnergieRepository $repo, UserRepository $userRepo): Response
    {
        $targetUser = $this->resolveTargetUser($request, $userRepo);

        $energies = $this->fetchEnergiesWithRecs($repo, $targetUser);

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        $sheet->setTitle('Historique Energie');

        // ✅ Add recommendations column
        $sheet->fromArray(
            ['Type énergie', 'Période (mois)', 'Valeur', 'Date', 'Source', 'Recommandations (Impact | Titre | Description)'],
            null,
            'A1'
        );

        $row = 2;
        foreach ($energies as $e) {

            // Build rec text (title + description + impact)
            $recsText = 'Aucune';
            $recs = $e->getRecommandations();

            if ($recs && $recs->count() > 0) {
                $parts = [];
                foreach ($recs as $rec) {
                    $impact = $rec->getNiveauImpact() ?: 'N/A';
                    $titre = $rec->getTitre() ?: 'Recommandation';
                    $desc = $rec->getDescription() ?: '';

                    // Clean description (remove extra spaces/newlines)
                    $desc = trim(preg_replace('/\s+/', ' ', $desc));

                    $line = "($impact) $titre";
                    if ($desc !== '') {
                        $line .= " — $desc";
                    }
                    $parts[] = $line;
                }
                $recsText = implode(" | ", $parts);
            }

            $sheet->setCellValue("A$row", (string) $e->getTypeEnergie());
            $sheet->setCellValue("B$row", (float) $e->getPeriode());
            $sheet->setCellValue("C$row", (float) $e->getValeur());
            $sheet->setCellValue("D$row", $e->getDateEnregistrement()?->format('Y-m-d'));
            $sheet->setCellValue("E$row", (string) $e->getSource());
            $sheet->setCellValue("F$row", $recsText);
            $row++;
        }

        foreach (range('A', 'F') as $col) {
            $sheet->getColumnDimension($col)->setAutoSize(true);
        }

        // Wrap long recommendation text
        $sheet->getStyle("F1:F" . ($row - 1))->getAlignment()->setWrapText(true);

        $writer = new Xlsx($spreadsheet);
        $tempFile = tempnam(sys_get_temp_dir(), 'energie_') . '.xlsx';
        $writer->save($tempFile);

        $filename = $targetUser
            ? 'historique_energie_' . $targetUser->getId() . '.xlsx'
            : 'historique_energie_all.xlsx';

        return $this->file($tempFile, $filename, ResponseHeaderBag::DISPOSITION_ATTACHMENT);
    }
}
