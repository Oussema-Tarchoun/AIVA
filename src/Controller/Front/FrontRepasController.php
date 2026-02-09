<?php

namespace App\Controller\Front;

use App\Entity\Repas;
use App\Form\FrontRepasType;
use App\Repository\RepasRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/nutrition/repas')]
final class FrontRepasController extends AbstractController
{
    #[Route('', name: 'front_repas_index', methods: ['GET'])]
    public function index(Request $request, RepasRepository $repasRepository): Response
    {
      

        $searchNom = $request->query->get('search', '');
        $sortCalories = $request->query->get('sort', ''); // asc|desc

        $qb = $repasRepository->createQueryBuilder('r');

        if ($this->getUser()) {
            $qb->andWhere('r.user = :u')->setParameter('u', $this->getUser());
        }

        if ($searchNom !== '') {
            $qb->andWhere('r.nom LIKE :nom')->setParameter('nom', '%' . $searchNom . '%');
        }

        if ($sortCalories === 'asc') {
            $qb->orderBy('r.calories', 'ASC');
        } elseif ($sortCalories === 'desc') {
            $qb->orderBy('r.calories', 'DESC');
        } else {
            $qb->orderBy('r.id', 'DESC');
        }

        $repas = $qb->getQuery()->getResult();

        return $this->render('front/repas/index.html.twig', [
            'repas' => $repas,
            'searchNom' => $searchNom,
            'sortCalories' => $sortCalories,
        ]);
    }

    #[Route('/new', name: 'front_repas_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        $repas = new Repas();
        $form = $this->createForm(FrontRepasType::class, $repas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $errors = $validator->validate($repas);
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }

                return $this->render('front/repas/new.html.twig', [
                    'repas' => $repas,
                    'form' => $form->createView(),
                ]);
            }

            if ($this->getUser()) {
                $repas->setUser($this->getUser());
            }

            $em->persist($repas);
            $em->flush();

            $this->addFlash('success', 'Repas ajouté ✅');
            return $this->redirectToRoute('front_repas_index');
        }

        return $this->render('front/repas/new.html.twig', [
            'repas' => $repas,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'front_repas_show', methods: ['GET'])]
    public function show(Repas $repas): Response
    {
        if ($this->getUser() && $repas->getUser() && $repas->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        return $this->render('front/repas/show.html.twig', [
            'repas' => $repas,
        ]);
    }

    #[Route('/{id}/edit', name: 'front_repas_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Repas $repas, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        if ($this->getUser() && $repas->getUser() && $repas->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        $form = $this->createForm(FrontRepasType::class, $repas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $errors = $validator->validate($repas);
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }

                return $this->render('front/repas/edit.html.twig', [
                    'repas' => $repas,
                    'form' => $form->createView(),
                ]);
            }

            $em->flush();
            $this->addFlash('success', 'Repas mis à jour ✅');

            return $this->redirectToRoute('front_repas_index');
        }

        return $this->render('front/repas/edit.html.twig', [
            'repas' => $repas,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}/delete', name: 'front_repas_delete', methods: ['POST'])]
    public function delete(Request $request, Repas $repas, EntityManagerInterface $em): Response
    {
        if ($this->getUser() && $repas->getUser() && $repas->getUser() !== $this->getUser()) {
            throw $this->createAccessDeniedException('Accès refusé.');
        }

        if ($this->isCsrfTokenValid('delete' . $repas->getId(), (string) $request->request->get('_token'))) {
            $em->remove($repas);
            $em->flush();
            $this->addFlash('success', 'Repas supprimé ✅');
        }

        return $this->redirectToRoute('front_repas_index');
    }
}
