<?php

namespace App\Security;

use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Http\Authenticator\AbstractLoginFormAuthenticator;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\CsrfTokenBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\RememberMeBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Badge\UserBadge;
use Symfony\Component\Security\Http\Authenticator\Passport\Credentials\PasswordCredentials;
use Symfony\Component\Security\Http\Authenticator\Passport\Passport;
use Symfony\Component\Security\Http\SecurityRequestAttributes;
use Symfony\Component\Security\Http\Util\TargetPathTrait;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Mime\Address;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\User;

class AppAuthenticator extends AbstractLoginFormAuthenticator
{
    use TargetPathTrait;

    public const LOGIN_ROUTE = 'app_login';
    
    public function __construct(
        private UrlGeneratorInterface $urlGenerator,
        private MailerInterface $mailer,
        private EntityManagerInterface $entityManager
    ) {
    }

    public function authenticate(Request $request): Passport
    {
        $email = $request->getPayload()->getString('email');

        $request->getSession()->set(SecurityRequestAttributes::LAST_USERNAME, $email);

        return new Passport(
            new UserBadge($email),
            new PasswordCredentials($request->getPayload()->getString('password')),
            [
                new CsrfTokenBadge('authenticate', $request->getPayload()->getString('_csrf_token')),
                new RememberMeBadge(),
            ]
        );
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token, string $firewallName): ?Response
    {
        $session = $request->getSession();

        // ✅ Si on a un targetPath, on l'utilise seulement s'il n'est pas /login
        if ($targetPath = $this->getTargetPath($session, $firewallName)) {
            $loginUrl = $this->urlGenerator->generate(self::LOGIN_ROUTE);

            // Si targetPath != login => OK
            if ($targetPath !== $loginUrl && !str_contains($targetPath, '/login')) {
                return new RedirectResponse($targetPath);
            }

            // ✅ IMPORTANT: si targetPath pointe vers login, on le supprime
            $this->removeTargetPath($session, $firewallName);
        }

        // ✅ IP tracking and security alert
        /** @var User $user */
        $user = $token->getUser();
        $clientIp = $request->getClientIp();
        
        if (!in_array($clientIp, $user->getKnownIps(), true)) {
            // IP is unknown, send alert
            $email = (new TemplatedEmail())
                ->from(new Address('admin@aiva.com', 'Aiva Security'))
                ->to($user->getEmail())
                ->subject('Security Alert: New Login from ' . $clientIp)
                ->htmlTemplate('emails/security_alert.html.twig')
                ->context([
                    'user' => $user,
                    'ip' => $clientIp,
                    'date' => new \DateTime(),
                ]);

            $this->mailer->send($email);

            // Add IP to known list
            $user->addKnownIp($clientIp);
            $this->entityManager->flush();
        }

        // ✅ Redirection par rôle
        $roles = $token->getRoleNames();

        // Admin => "/"
        if (in_array('ROLE_ADMIN', $roles, true)) {
            return new RedirectResponse($this->urlGenerator->generate('dashboard'));
        }

        // User => "/front"
        return new RedirectResponse($this->urlGenerator->generate('front_home'));
    }

    protected function getLoginUrl(Request $request): string
    {
        return $this->urlGenerator->generate(self::LOGIN_ROUTE);
    }
}
