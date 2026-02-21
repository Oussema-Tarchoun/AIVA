<?php

namespace App\Service;

use App\Entity\User;
use Dompdf\Dompdf;
use Dompdf\Options;
use Symfony\Component\HttpFoundation\HeaderUtils;
use Symfony\Component\HttpFoundation\Response;
use Twig\Environment;

class ExportService
{
    public function __construct(private Environment $twig)
    {
    }

    public function exportToCsv(User $user): Response
    {
        $data = $this->getUserData($user);
        $handle = fopen('php://temp', 'r+');
        
        // Headers
        fputcsv($handle, ['Field', 'Value']);
        
        // Static info
        foreach ($data as $key => $value) {
            fputcsv($handle, [$key, is_array($value) ? implode(', ', $value) : $value]);
        }
        
        rewind($handle);
        $content = stream_get_contents($handle);
        fclose($handle);

        $response = new Response($content);
        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            'user_profile_' . $user->getId() . '.csv'
        );
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    public function exportToExcel(User $user): Response
    {
        // Simple HTML trick for Excel if PhpSpreadsheet is missing
        $data = $this->getUserData($user);
        
        $html = '<table>';
        $html .= '<tr><th style="background-color: #f2f2f2;">Field</th><th style="background-color: #f2f2f2;">Value</th></tr>';
        foreach ($data as $key => $value) {
            $val = is_array($value) ? implode(', ', $value) : $value;
            $html .= "<tr><td>$key</td><td>$val</td></tr>";
        }
        $html .= '</table>';

        $response = new Response($html);
        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            'user_profile_' . $user->getId() . '.xls'
        );
        $response->headers->set('Content-Type', 'application/vnd.ms-excel');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    public function exportToPdf(User $user): Response
    {
        $options = new Options();
        $options->set('defaultFont', 'Arial');
        $dompdf = new Dompdf($options);

        $html = $this->twig->render('export/user_pdf.html.twig', [
            'user' => $user,
            'data' => $this->getUserData($user)
        ]);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        $output = $dompdf->output();

        $response = new Response($output);
        $disposition = HeaderUtils::makeDisposition(
            HeaderUtils::DISPOSITION_ATTACHMENT,
            'user_profile_' . $user->getId() . '.pdf'
        );
        $response->headers->set('Content-Type', 'application/pdf');
        $response->headers->set('Content-Disposition', $disposition);

        return $response;
    }

    private function getUserData(User $user): array
    {
        return [
            'ID' => $user->getId(),
            'Name' => $user->getName(),
            'Email' => $user->getEmail(),
            'Roles' => $user->getRoles(),
            'Blocked' => $user->isBlocked() ? 'Yes' : 'No',
            '2FA Enabled' => $user->isTotpAuthenticationEnabled() ? 'Yes' : 'No',
            'Reset Attempts' => $user->getResetPasswordAttempts(),
            'Known IPs' => $user->getKnownIps(),
        ];
    }
}
