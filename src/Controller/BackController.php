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
        return $this->render('back/energie/dashboard.html.twig', [
            'active_page' => 'dashboard'
        ]);
    }

  



  

    #[Route('/users', name: 'users')]
    public function users(): Response
    {
        return $this->render('back/energie/users.html.twig', [
            'active_page' => 'users'
        ]);
    }
}