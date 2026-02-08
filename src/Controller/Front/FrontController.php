<?php

namespace App\Controller\Front;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FrontController extends AbstractController
{
       #[Route('/index', name: 'index')]
    public function index(): Response
    {
        return $this->render('front/index.html.twig');
    }


    #[Route('/maison', name: 'home')]
    public function home(): Response
    {
        return $this->render('front/home.html.twig');
    }

    #[Route('/finance', name: 'finance')]
    public function finance(): Response
    {
        return $this->render('front/finance.html.twig');
    }

    #[Route('/health', name: 'health')]
    public function health(): Response
    {
        return $this->render('front/health.html.twig');
    }

    #[Route('/learning', name: 'learning')]
    public function learning(): Response
    {
        return $this->render('front/learning.html.twig');
    }

    #[Route('/nutrition', name: 'nutrition')]
    public function nutrition(): Response
    {
        return $this->render('front/nutrition.html.twig');
    }
}
