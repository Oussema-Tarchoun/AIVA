<?php

namespace App\Controller;

use App\Repository\CoursRepository;
use App\Repository\ChapitreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HomeDashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'homedashboard', methods: ['GET'])]
    public function index(
        CoursRepository $coursRepository,
        ChapitreRepository $chapitreRepository
    ): Response {
        // nombre total de cours
        $totalCours = $coursRepository->count([]);

        // nombre total de chapitres
        $totalChapitres = $chapitreRepository->count([]);

        // moyenne de chapitres par cours
        $averageChapitresPerCours = $totalCours > 0
            ? round($totalChapitres / $totalCours, 1)
            : 0;

        // 3 derniers cours (par date_creation décroissante)
        $lastCours = $coursRepository->findBy([], ['date_creation' => 'DESC'], 3);

        // 3 derniers chapitres (par id décroissant)
        $lastChapitres = $chapitreRepository->findBy([], ['id' => 'DESC'], 3);

        return $this->render('homedashboard/index.html.twig', [
            'totalCours'               => $totalCours,
            'totalChapitres'           => $totalChapitres,
            'averageChapitresPerCours' => $averageChapitresPerCours,
            'lastCours'                => $lastCours,
            'lastChapitres'            => $lastChapitres,
        ]);
    }
}
