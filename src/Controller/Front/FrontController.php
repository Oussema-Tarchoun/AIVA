<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
    #[Route('/front', name: 'dashboardf')]
    public function dashboard(): Response
    {
        return $this->render('front/index.html.twig', [
            'active_page' => 'dashboardf'
        ]);
    }
}
