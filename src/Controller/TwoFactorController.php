<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Scheb\TwoFactorBundle\Security\TwoFactor\Provider\Totp\TotpAuthenticatorInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/profile/2fa')]
#[IsGranted('ROLE_USER')]
class TwoFactorController extends AbstractController
{
    #[Route('/setup', name: 'app_2fa_setup')]
    public function setup(TotpAuthenticatorInterface $totpAuthenticator, Request $request): Response
    {
        /** @var User $user */
        $user = $this->getUser();

        if ($user->isTotpAuthenticationEnabled()) {
            return $this->redirectToRoute('app_profile');
        }

        // Generate secret and store in session (NOT database yet)
        $session = $request->getSession();
        $secret = $session->get('2fa_setup_secret');
        
        if (!$secret) {
            $secret = $totpAuthenticator->generateSecret();
            $session->set('2fa_setup_secret', $secret);
        }

        // Temporarily set the secret on the user object so the authenticator can generate the QR content
        // This is NOT saved to the database (no flush)
        $user->setTotpSecret($secret);
        $qrCodeContent = $totpAuthenticator->getQRContent($user);
        
        return $this->render('two_factor/setup.html.twig', [
            'qrCodeContent' => $qrCodeContent,
            'secret' => $secret,
        ]);
    }

    #[Route('/confirm', name: 'app_2fa_confirm', methods: ['POST'])]
    public function confirm(Request $request, TotpAuthenticatorInterface $totpAuthenticator, EntityManagerInterface $entityManager): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $session = $request->getSession();
        $secret = $session->get('2fa_setup_secret');
        $code = $request->request->get('code');

        if (!$secret) {
            $this->addFlash('error', 'Setup session expired. Please try again.');
            return $this->redirectToRoute('app_profile');
        }

        // Temporarily set to verify the code
        $user->setTotpSecret($secret);

        if ($totpAuthenticator->checkCode($user, $code)) {
            // Success! NOW save to database
            $entityManager->persist($user);
            $entityManager->flush();
            $session->remove('2fa_setup_secret');
            
            $this->addFlash('success', 'Two-factor authentication activated successfully! Please log in again to verify.');
            return $this->redirectToRoute('app_logout');
        }

        $this->addFlash('error', 'Invalid verification code. Please try again.');
        return $this->redirectToRoute('app_profile');
    }

    #[Route('/disable', name: 'app_2fa_disable', methods: ['POST'])]
    public function disable(EntityManagerInterface $entityManager): Response
    {
        /** @var User $user */
        $user = $this->getUser();
        $user->setTotpSecret(null);
        $entityManager->persist($user);
        $entityManager->flush();

        $this->addFlash('success', 'Two-factor authentication deactivated.');
        return $this->redirectToRoute('app_profile');
    }
}
