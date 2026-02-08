<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/back', name: 'back_')]
class BackController extends AbstractController
{
    #[Route('/dashboard', name: 'dashboard')]
    public function dashboard(): Response
    {
        // FICHIER EXISTANT : templates/dashboard/index.html.twig
        return $this->render('dashboard/index.html.twig', [
            'active_page' => 'dashboard'
        ]);
    }

    #[Route('/analytics', name: 'analytics')]
    public function analytics(): Response
    {
        // si tu n'as pas encore analytics → dashboard temporairement
        return $this->render('dashboard/index.html.twig', [
            'active_page' => 'analytics'
        ]);
    }

    #[Route('/login', name: 'login')]
    public function login(): Response
    {
        // si pas encore créé → dashboard
        return $this->render('dashboard/index.html.twig', [
            'active_page' => 'login'
        ]);
    }

    #[Route('/register', name: 'register')]
    public function register(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'active_page' => 'register'
        ]);
    }

    #[Route('/settings', name: 'settings')]
    public function settings(): Response
    {
        return $this->render('dashboard/index.html.twig', [
            'active_page' => 'settings'
        ]);
    }
}
