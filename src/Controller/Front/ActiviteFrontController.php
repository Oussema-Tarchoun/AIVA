<?php

namespace App\Controller\Front;

use App\Entity\ActivitePhysique;
use App\Form\ActivitePhysiqueType;
use App\Repository\ActivitePhysiqueRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/front/activite', name: 'front_activite_')]
class ActiviteFrontController extends AbstractController
{
    #[Route('/', name: 'index', methods: ['GET'])]
    public function index(ActivitePhysiqueRepository $repo): Response
    {
        return $this->render('front/activite/index.html.twig', [
            'activites' => $repo->findAll(),
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

            return $this->redirectToRoute('health');
        }

        return $this->render('front/activite/new.html.twig', [
            'activite' => $activite,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'show', methods: ['GET'])]
    public function show(ActivitePhysique $activite): Response
    {
        return $this->render('front/activite/show.html.twig', [
            'activite' => $activite,
        ]);
    }

    #[Route('/{id}/edit', name: 'edit', methods: ['GET','POST'])]
    public function edit(Request $request, ActivitePhysique $activite, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ActivitePhysiqueType::class, $activite);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('health');
        }

        return $this->render('front/activite/edit.html.twig', [
            'activite' => $activite,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'delete', methods: ['POST','DELETE'])]
    public function delete(Request $request, ActivitePhysique $activite, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$activite->getId(), (string) $request->request->get('_token'))) {
            $em->remove($activite);
            $em->flush();
        }

        return $this->redirectToRoute('health');
    }
}
