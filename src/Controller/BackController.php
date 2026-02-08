<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BackController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function dashboard(): Response
    {
        return $this->render('back/dashboard.html.twig', [
            'active_page' => 'dashboard'
        ]);
    }

    #[Route('/analytics', name: 'analytics')]
    public function analytics(): Response
    {
        return $this->render('back/analytics.html.twig', [
            'active_page' => 'analytics'
        ]);
    }

    #[Route('/login', name: 'login')]
    public function login(): Response
    {
        return $this->render('back/login.html.twig', [
            'active_page' => 'login'
        ]);
    }

    #[Route('/register', name: 'register')]
    public function register(): Response
    {
        return $this->render('back/register.html.twig', [
            'active_page' => 'register'
        ]);
    }

    #[Route('/settings', name: 'settings')]
    public function settings(): Response
    {
        return $this->render('back/settings.html.twig', [
            'active_page' => 'settings'
        ]);
    }

    #[Route('/users', name: 'users')]
    public function users(): Response
    {
        return $this->render('back/users.html.twig', [
            'active_page' => 'users'
        ]);
    }
}