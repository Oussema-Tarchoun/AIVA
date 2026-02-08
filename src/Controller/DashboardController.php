<?php
// src/Controller/DashboardController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    #[Route('/', name: 'dashboard')]
    public function index(): Response
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

    #[Route('/users', name: 'users')]
    public function users(): Response
    {
        $users = [
            ['name' => 'John Doe', 'role' => 'Admin', 'status' => 'Active', 'joined' => '2024-01-15', 'lastActive' => '2 mins ago'],
            ['name' => 'Anna Smith', 'role' => 'Editor', 'status' => 'Active', 'joined' => '2024-02-22', 'lastActive' => '15 mins ago'],
        ];

        return $this->render('back/users.html.twig', [
            'users' => $users,
            'active_page' => 'users'
        ]);
    }

    #[Route('/settings', name: 'settings')]
    public function settings(): Response
    {
        return $this->render('back/settings.html.twig', [
            'active_page' => 'settings'
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
}