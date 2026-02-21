<?php

namespace App\Security;

use App\Entity\User;
use App\Service\GamificationService;
use Symfony\Component\EventDispatcher\Attribute\AsEventListener;
use Symfony\Component\Security\Http\Event\LoginSuccessEvent;

class LoginXPListener
{
    public function __construct(private GamificationService $gamificationService)
    {
    }

    #[AsEventListener(event: LoginSuccessEvent::class)]
    public function onLoginSuccess(LoginSuccessEvent $event): void
    {
        $user = $event->getUser();

        if ($user instanceof User) {
            $this->gamificationService->awardDailyLoginPoints($user);
        }
    }
}
