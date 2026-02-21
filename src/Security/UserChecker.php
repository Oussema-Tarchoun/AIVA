<?php

namespace App\Security;

use App\Entity\User;
use Symfony\Component\Security\Core\Exception\CustomUserMessageAccountStatusException;
use Symfony\Component\Security\Core\User\UserCheckerInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class UserChecker implements UserCheckerInterface
{
    public function checkPreAuth(UserInterface $user): void
    {
        if (!$user instanceof User) {
            return;
        }

        if ($user->isBlocked()) {
            throw new CustomUserMessageAccountStatusException(
                'Your account has been blocked. Please contact the administrator.'
            );
        }

        // Enforce email verification (unless admin)
        if (!in_array('ROLE_ADMIN', $user->getRoles()) && !$user->isVerified()) {
            throw new CustomUserMessageAccountStatusException(
                'Your email address is not verified. Please check your inbox or request a new verification link.'
            );
        }
    }

    public function checkPostAuth(UserInterface $user): void
    {
        // Nothing to check after authentication
    }
}
