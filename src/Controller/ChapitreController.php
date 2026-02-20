<?php

namespace App\Controller;

use App\Entity\Chapitre;
use App\Entity\Cours;
use App\Form\ChapitreType;
use App\Repository\ChapitreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/chapitre')]
final class ChapitreController extends AbstractController
{
    #[Route('/', name: 'app_chapitre_index', methods: ['GET'])]
    public function index(Request $request, ChapitreRepository $chapitreRepository): Response
    {
        // q = search on titre, dir = sort direction on ordre
        $search    = $request->query->get('q');
        $direction = $request->query->get('dir');

        $chapitres = $chapitreRepository->findByTitreSearchAndOrdreSort($search, $direction);

        return $this->render('chapitre/index.html.twig', [
            'chapitres' => $chapitres,
            'search'    => $search,
            'dir'       => $direction,
            'cour'      => null, // pas de cours filtré ici
        ]);
    }

   #[Route('/my-courses/{id}/chapters', name: 'chapitre_front_by_cours', methods: ['GET'])]
public function byCoursFront(Cours $cour, ChapitreRepository $chapitreRepository): Response
{
    $chapitres = $chapitreRepository->findBy(['id_cours' => $cour]);

    return $this->render('chapitreFRONT/index.html.twig', [
        'chapitres' => $chapitres,
        'cours'     => $cour,
    ]);
}


    #[Route('/new', name: 'app_chapitre_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $chapitre = new Chapitre();
        $form = $this->createForm(ChapitreType::class, $chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($chapitre);
            $entityManager->flush();

            return $this->redirectToRoute('app_chapitre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('chapitre/new.html.twig', [
            'chapitre' => $chapitre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_chapitre_show', methods: ['GET'])]
    public function show(Chapitre $chapitre): Response
    {
        $contenu = (string) $chapitre->getContenu();
        $videoEmbedUrl = null;

        // Cherche un lien YouTube dans le contenu (formes watch?v=... ou youtu.be/...)
        if (preg_match(
            '~(https?://(?:www\.)?(?:youtube\.com/watch\?v=|youtu\.be/)([A-Za-z0-9_\-]{6,}))~i',
            $contenu,
            $matches
        )) {
            $videoId = $matches[2] ?? null;
            if ($videoId) {
                $videoEmbedUrl = 'https://www.youtube.com/embed/' . $videoId;
            }
        }

        return $this->render('chapitre/show.html.twig', [
            'chapitre'      => $chapitre,
            'videoEmbedUrl' => $videoEmbedUrl,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_chapitre_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chapitre $chapitre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChapitreType::class, $chapitre);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_chapitre_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('chapitre/edit.html.twig', [
            'chapitre' => $chapitre,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_chapitre_delete', methods: ['POST'])]
    public function delete(Request $request, Chapitre $chapitre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chapitre->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($chapitre);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_chapitre_index', [], Response::HTTP_SEE_OTHER);
    }
}
