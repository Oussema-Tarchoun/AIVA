<?php

namespace App\Controller\Front;

use App\Entity\Cours;
use App\Form\Cours1Type;
use App\Repository\CoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/my-courses')]
class coursFrontController extends AbstractController
{
    #[Route('/', name: 'cours_front_index', methods: ['GET'])]
    public function index(CoursRepository $coursRepository): Response
    {
        return $this->render('coursFRONT/index.html.twig', [
            'courses' => $coursRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'cours_front_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $cours = new Cours();

        // ✅ user obligatoire
        $user = $this->getUser();
        if (!$user) {
            return $this->redirectToRoute('app_login');
        }
        $cours->setUser($user);

        $form = $this->createForm(Cours1Type::class, $cours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ✅ Doctrine auto-generates ID → no need to set it manually

            // ✅ date_creation obligatoire
            if ($cours->getDateCreation() === null) {
                $cours->setDateCreation(new \DateTime());
            }

            // ✅ duree_estimee obligatoire
            if ($cours->getDureeEstimee() === null) {
                $cours->setDureeEstimee(0);
            }

            // ✅ niveau obligatoire
            if ($cours->getNiveau() === null || trim($cours->getNiveau()) === '') {
                $cours->setNiveau('Beginner');
            }

            // ✅ categorie obligatoire
            if ($cours->getCategorie() === null || trim($cours->getCategorie()) === '') {
                $cours->setCategorie('General');
            }

            // ✅ status obligatoire
            if ($cours->getStatus() === null || trim($cours->getStatus()) === '') {
                $cours->setStatus('draft');
            }

            $entityManager->persist($cours);
            $entityManager->flush();

            $this->addFlash('success', 'Course created successfully!');
            return $this->redirectToRoute('cours_front_index');
        }

        return $this->render('coursFRONT/new.html.twig', [
            'cours' => $cours,
            'form'  => $form,
        ]);
    }

    #[Route('/{id}', name: 'cours_front_show', methods: ['GET'])]
    public function show(Cours $cours): Response
    {
        return $this->render('coursFRONT/show.html.twig', [
            'cours' => $cours,
        ]);
    }

    #[Route('/{id}/edit', name: 'cours_front_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Cours $cours, EntityManagerInterface $entityManager): Response
    {
        // ✅ user obligatoire si ancien record
        if ($cours->getUser() === null && $this->getUser()) {
            $cours->setUser($this->getUser());
        }

        $form = $this->createForm(Cours1Type::class, $cours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ✅ sécuriser champs obligatoires
            if ($cours->getDateCreation() === null) {
                $cours->setDateCreation(new \DateTime());
            }

            if ($cours->getDureeEstimee() === null) {
                $cours->setDureeEstimee(0);
            }

            if ($cours->getStatus() === null || trim($cours->getStatus()) === '') {
                $cours->setStatus('draft');
            }

            $entityManager->flush();

            $this->addFlash('success', 'Course updated successfully!');
            return $this->redirectToRoute('cours_front_index');
        }

        return $this->render('coursFRONT/edit.html.twig', [
            'cours' => $cours,
            'form'  => $form,
        ]);
    }

    #[Route('/{id}', name: 'cours_front_delete', methods: ['POST'])]
    public function delete(Request $request, Cours $cours, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $cours->getId(), $request->request->get('_token'))) {

            $entityManager->remove($cours);
            $entityManager->flush();

            $this->addFlash('success', 'Course deleted successfully!');
        }

        return $this->redirectToRoute('cours_front_index');
    }
}
