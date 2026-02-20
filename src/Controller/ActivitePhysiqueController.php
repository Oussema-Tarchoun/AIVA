<?php

namespace App\Controller;

use App\Entity\ActivitePhysique;
use App\Form\ActivitePhysiqueType;
use App\Repository\ActivitePhysiqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/back/sport', name: 'back_sport_')]
class ActivitePhysiqueController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(ActivitePhysiqueRepository $repository, Request $request): Response
    {
        $search = trim((string) $request->query->get('search', ''));

        $sort = (string) $request->query->get('sort', 'id');
        $dir  = strtolower((string) $request->query->get('dir', 'desc')) === 'asc' ? 'ASC' : 'DESC';

        if ($search !== '') {
            $activites = $repository->searchWithSort($search, $sort, $dir);
        } else {
            $activites = $repository->findAllWithSort($sort, $dir);
        }

        return $this->render('back/sport/index.html.twig', [
            'activites' => $activites,
            'search' => $search,
            'sort' => $sort,
            'dir' => strtolower($dir),
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET','POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $activite = new ActivitePhysique();
        $form = $this->createForm(ActivitePhysiqueType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($activite);
            $em->flush();

            $this->addFlash('success', 'Activité créée avec succès !');
            return $this->redirectToRoute('back_sport_index');
        }

        return $this->render('back/sport/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', requirements: ['id' => '\d+'], methods: ['GET','POST'])]
    public function edit(ActivitePhysique $activite, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ActivitePhysiqueType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $this->addFlash('success', 'Activité modifiée avec succès !');
            return $this->redirectToRoute('back_sport_index');
        }

        return $this->render('back/sport/edit.html.twig', [
            'form' => $form,
            'activite' => $activite,
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(ActivitePhysique $activite, Request $request, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $activite->getId(), (string) $request->request->get('_token'))) {
            $em->remove($activite);
            $em->flush();

            $this->addFlash('success', 'Activité supprimée avec succès !');
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('back_sport_index');
    }
}
