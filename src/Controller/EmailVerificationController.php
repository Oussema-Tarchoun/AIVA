<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Address;
use Symfony\Component\Routing\Attribute\Route;

class EmailVerificationController extends AbstractController
{
    #[Route('/verify-email/{token}', name: 'app_verify_email')]
    public function verify(string $token, EntityManagerInterface $entityManager): Response
    {
        $user = $entityManager->getRepository(User::class)->findOneBy(['verificationToken' => $token]);

        if (!$user) {
            $this->addFlash('error', 'Invalid verification token.');
            return $this->redirectToRoute('app_login');
        }

        if ($user->getTokenExpiresAt() < new \DateTime()) {
            $this->addFlash('error', 'Verification token has expired. Please log in to resend.');
            return $this->redirectToRoute('app_login');
        }

        $user->setIsVerified(true);
        $user->setVerificationToken(null);
        $user->setTokenExpiresAt(null);

        $entityManager->flush();

        $this->addFlash('success', 'Your email has been verified! You can now log in.');

        return $this->redirectToRoute('app_login');
    }

    #[Route('/resend-verification', name: 'app_resend_verification_request', methods: ['GET'])]
    public function resendRequest(): Response
    {
        return $this->render('registration/resend_verification.html.twig');
    }

    #[Route('/resend-verification', name: 'app_resend_verification', methods: ['POST'])]
    public function resend(Request $request, EntityManagerInterface $entityManager, MailerInterface $mailer): Response
    {
        $email = $request->request->get('email');
        $user = $entityManager->getRepository(User::class)->findOneBy(['email' => $email]);

        if ($user && !$user->isVerified()) {
            $token = bin2hex(random_bytes(32));
            $user->setVerificationToken($token);
            $user->setTokenExpiresAt(new \DateTime('+24 hours'));

            $entityManager->flush();

            $verificationEmail = (new TemplatedEmail())
                ->from(new Address('admin@aiva.com', 'Aiva Security'))
                ->to($user->getEmail())
                ->subject('New Verification Link')
                ->htmlTemplate('emails/verification_email.html.twig')
                ->context(['user' => $user]);

            $mailer->send($verificationEmail);
        }

        // We always show success to prevent email enumeration
        $this->addFlash('success', 'If an unverified account exists for this email, a new verification link has been sent.');

        return $this->redirectToRoute('app_login');
    }
}
