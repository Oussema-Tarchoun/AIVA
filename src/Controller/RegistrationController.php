<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\RegistrationFormType;
use App\Security\AppAuthenticator;
use App\Service\GamificationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\SecurityBundle\Security;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;

class RegistrationController extends AbstractController
{
    #[Route('/register', name: 'app_register')]
    public function register(
        Request $request,
        UserPasswordHasherInterface $userPasswordHasher,
        Security $security,
        EntityManagerInterface $entityManager,
        MailerInterface $mailer,
        GamificationService $gamificationService
    ): Response {

        $user = new User();
        $form = $this->createForm(RegistrationFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Hash password
            $plainPassword = $form->get('plainPassword')->getData();
            $user->setPassword(
                $userPasswordHasher->hashPassword($user, $plainPassword)
            );

            // Set role
            $role = $form->get('role')->getData();
            $user->setRoles([$role]);

            // ✅ Email Verification Logic
            $token = bin2hex(random_bytes(32));
            $user->setVerificationToken($token);
            $user->setTokenExpiresAt(new \DateTime('+24 hours'));
            $user->setIsVerified(false);

            // Award registration points
            $gamificationService->awardRegistrationPoints($user);

            // Save user
            $entityManager->persist($user);
            $entityManager->flush();

            // Send Verification Email
            $email = (new TemplatedEmail())
                ->from(new Address('admin@aiva.com', 'Aiva Security'))
                ->to($user->getEmail())
                ->subject('Verify your AIVA account')
                ->htmlTemplate('emails/verification_email.html.twig')
                ->context(['user' => $user]);

            $mailer->send($email);

            return $this->render('registration/verify_email_sent.html.twig', [
                'email' => $user->getEmail()
            ]);
        }

        return $this->render('registration/register.html.twig', [
            'registrationForm' => $form,
        ]);
    }
}
