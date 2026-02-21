<?php

namespace App\Controller;

use App\Entity\User;
use App\Service\ExportService;
use Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Totp\TotpAuthenticatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

class ProfileController extends AbstractController
{
    #[Route('/profile', name: 'app_profile')]
    #[IsGranted('ROLE_USER')]
    public function index(TotpAuthenticatorInterface $totpAuthenticator, Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        
        $qrCodeContent = null;
        $secret = null;

        if (!$user->isTotpAuthenticationEnabled()) {
            $session = $request->getSession();
            $secret = $session->get('2fa_setup_secret');
            
            if (!$secret) {
                $secret = $totpAuthenticator->generateSecret();
                $session->set('2fa_setup_secret', $secret);
            }

            // Use a CLONE so we don't mutate the real user object
            // (otherwise app.user.totpSecret would appear set in the template)
            $tempUser = clone $user;
            $tempUser->setTotpSecret($secret);
            $qrCodeContent = $totpAuthenticator->getQRContent($tempUser);
        }

        return $this->render('profile/index.html.twig', [
            'user' => $user,
            'qrCodeContent' => $qrCodeContent,
            'secret' => $secret,
        ]);
    }

    #[Route('/profile/export/csv', name: 'app_profile_export_csv')]
    #[IsGranted('ROLE_USER')]
    public function exportCsv(ExportService $exportService): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        return $exportService->exportToCsv($user);
    }

    #[Route('/profile/export/excel', name: 'app_profile_export_excel')]
    #[IsGranted('ROLE_USER')]
    public function exportExcel(ExportService $exportService): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        return $exportService->exportToExcel($user);
    }

    #[Route('/profile/export/pdf', name: 'app_profile_export_pdf')]
    #[IsGranted('ROLE_USER')]
    public function exportPdf(ExportService $exportService): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        return $exportService->exportToPdf($user);
    }
}