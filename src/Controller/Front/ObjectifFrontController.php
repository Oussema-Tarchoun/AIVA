<?php

namespace App\Controller\Front;

use App\Entity\Objectif;
use App\Form\ObjectifType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/front/objectif')]
class ObjectifFrontController extends AbstractController
{
    #[Route('/', name: 'front_objectif_index', methods: ['GET'])]
    public function index(): Response
    {
        return $this->redirectToRoute('health');
    }

    #[Route('/new', name: 'front_objectif_new', methods: ['GET','POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $objectif = new Objectif();
        $form = $this->createForm(ObjectifType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ no user assignment (no auth, no selection)
            $em->persist($objectif);
            $em->flush();

            if ($request->isXmlHttpRequest()) {
                return new Response(
                    '<div style="padding:14px;color:#00d4aa;font-weight:800;">Objectif saved ✅</div>',
                    200,
                    ['X-Modal-Success' => '1']
                );
            }

            return $this->redirectToRoute('health');
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('front/objectif/health.html.twig', [
                'form' => $form->createView(),
                'title' => 'New Objectif',
            ]);
        }

        return $this->render('front/objectif/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'front_objectif_show', methods: ['GET'])]
    public function show(Request $request, Objectif $objectif): Response
    {
        if ($request->isXmlHttpRequest()) {
            return $this->render('front/objectif/_modal_show.html.twig', [
                'objectif' => $objectif,
            ]);
        }

        return $this->render('front/objectif/show.html.twig', [
            'objectif' => $objectif,
        ]);
    }

    #[Route('/{id}/edit', name: 'front_objectif_edit', methods: ['GET','POST'])]
    public function edit(Request $request, Objectif $objectif, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ObjectifType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // ✅ no user assignment (no auth, no selection)
            $em->flush();

            if ($request->isXmlHttpRequest()) {
                return new Response(
                    '<div style="padding:14px;color:#00d4aa;font-weight:800;">Objectif updated ✅</div>',
                    200,
                    ['X-Modal-Success' => '1']
                );
            }

            return $this->redirectToRoute('health');
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('front/objectif/_modal_form.html.twig', [
                'form' => $form->createView(),
                'title' => 'Edit Objectif #' . $objectif->getId(),
            ]);
        }

        return $this->render('front/objectif/edit.html.twig', [
            'form' => $form->createView(),
            'objectif' => $objectif,
        ]);
    }

    #[Route('/{id}', name: 'front_objectif_delete', methods: ['POST','DELETE'])]
    public function delete(Request $request, Objectif $objectif, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$objectif->getId(), $request->request->get('_token'))) {
            $em->remove($objectif);
            $em->flush();
        }

        return $this->redirectToRoute('health');
    }
}
