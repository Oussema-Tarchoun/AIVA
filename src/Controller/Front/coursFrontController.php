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

    if ($this->getUser()) {
        $cours->setUser($this->getUser());
    }

    $form = $this->createForm(Cours1Type::class, $cours);
    $form->handleRequest($request);

    if ($form->isSubmitted() && $form->isValid()) {

        // Generate a random positive ID for id_cours if not set
        if ($cours->getIdCours() === null) {
            // Example: simple random number; replace with any logic you prefer
            $cours->setIdCours(random_int(1_000_000, 9_999_999));
        }

        $entityManager->persist($cours);
        $entityManager->flush();

        $this->addFlash('success', 'Course created successfully!');

        return $this->redirectToRoute('cours_front_index', [], Response::HTTP_SEE_OTHER);
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
        $form = $this->createForm(Cours1Type::class, $cours);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            $this->addFlash('success', 'Course updated successfully!');

            return $this->redirectToRoute('cours_front_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('coursFRONT/edit.html.twig', [
            'cours' => $cours,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'cours_front_delete', methods: ['POST'])]
    public function delete(Request $request, Cours $cours, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cours->getId(), $request->request->get('_token'))) {
            $entityManager->remove($cours);
            $entityManager->flush();

            $this->addFlash('success', 'Course deleted successfully!');
        }

        return $this->redirectToRoute('cours_front_index', [], Response::HTTP_SEE_OTHER);
    }
}