<?php

namespace App\Controller\Front;

use App\Entity\Chapitre;
use App\Form\ChapitreType;
use App\Repository\ChapitreRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/my-chapters')]
class chapitreFrontController extends AbstractController
{
    #[Route('/', name: 'chapitre_front_index', methods: ['GET'])]
    public function index(ChapitreRepository $chapitreRepository): Response
    {
        return $this->render('chapitreFRONT/index.html.twig', [
            'chapitres' => $chapitreRepository->findAll(),
            'cours'     => null,
        ]);
    }

    #[Route('/new', name: 'chapitre_front_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $chapitre = new Chapitre();

        $form = $this->createForm(ChapitreType::class, $chapitre, [
            'user' => $this->getUser(),
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // Sécurité : si pour une raison quelconque id_chapitre est encore null, on régénère
            if ($chapitre->getIdChapitre() === null) {
                $chapitre->setIdChapitre(random_int(1_000_000, 9_999_999));
            }

            $entityManager->persist($chapitre);
            $entityManager->flush();

            $this->addFlash('success', 'Chapter created successfully!');

            return $this->redirectToRoute('chapitre_front_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('chapitreFRONT/new.html.twig', [
            'chapitre' => $chapitre,
            'form'     => $form,
        ]);
    }

    #[Route('/{id}', name: 'chapitre_front_show', methods: ['GET'])]
    public function show(Chapitre $chapitre): Response
    {
        $contenu = (string) $chapitre->getContenu();
        $videoEmbedUrl = null;

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

        return $this->render('chapitreFRONT/show.html.twig', [
            'chapitre'      => $chapitre,
            'videoEmbedUrl' => $videoEmbedUrl,
        ]);
    }

    #[Route('/{id}/edit', name: 'chapitre_front_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Chapitre $chapitre, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ChapitreType::class, $chapitre, [
            'user' => $this->getUser(),
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Chapter updated successfully!');

            return $this->redirectToRoute('chapitre_front_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('chapitreFRONT/edit.html.twig', [
            'chapitre' => $chapitre,
            'form'     => $form,
        ]);
    }

    #[Route('/{id}', name: 'chapitre_front_delete', methods: ['POST'])]
    public function delete(Request $request, Chapitre $chapitre, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$chapitre->getId(), $request->request->get('_token'))) {
            $entityManager->remove($chapitre);
            $entityManager->flush();

            $this->addFlash('success', 'Chapter deleted successfully!');
        }

        return $this->redirectToRoute('chapitre_front_index', [], Response::HTTP_SEE_OTHER);
    }
}
