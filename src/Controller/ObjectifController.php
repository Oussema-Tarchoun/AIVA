<?php

namespace App\Controller;

use App\Entity\Objectif;
use App\Form\ObjectifType;
use App\Repository\ObjectifRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/back/objectif', name: 'app_objectif_')]
class ObjectifController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(ObjectifRepository $repository, Request $request): Response
    {
        $search = trim((string) $request->query->get('search', ''));

        // TRI
        $sort = (string) $request->query->get('sort', 'id');
        $dir  = strtolower((string) $request->query->get('dir', 'desc')) === 'asc' ? 'ASC' : 'DESC';

        if ($search !== '') {
            $objectifs = $repository->searchWithSort($search, $sort, $dir);
        } else {
            $objectifs = $repository->findAllWithSort($sort, $dir);
        }

        return $this->render('back/objectif/objectif_index.html.twig', [
            'objectifs' => $objectifs,
            'search' => $search,
            'sort' => $sort,
            'dir' => strtolower($dir),
        ]);
    }

    #[Route('/new', name: 'new', methods: ['GET','POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $objectif = new Objectif();
        $form = $this->createForm(ObjectifType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($objectif);
            $em->flush();

            $this->addFlash('success', 'Objectif créé avec succès !');
            return $this->redirectToRoute('app_objectif_index');
        }

        return $this->render('back/objectif/objectif_new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(Objectif $objectif): Response
    {
        return $this->render('back/objectif/objectif_show.html.twig', [
            'objectif' => $objectif,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', requirements: ['id' => '\d+'], methods: ['GET','POST'])]
    public function edit(Objectif $objectif, Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ObjectifType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            $this->addFlash('success', 'Objectif modifié avec succès !');
            return $this->redirectToRoute('app_objectif_index');
        }

        return $this->render('back/objectif/objectif_edit.html.twig', [
            'form' => $form,
            'objectif' => $objectif,
        ]);
    }

    #[Route('/{id}/delete', name: 'delete', requirements: ['id' => '\d+'], methods: ['POST'])]
    public function delete(Objectif $objectif, Request $request, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $objectif->getId(), (string) $request->request->get('_token'))) {
            $em->remove($objectif);
            $em->flush();
            $this->addFlash('success', 'Objectif supprimé avec succès !');
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_objectif_index');
    }
}
