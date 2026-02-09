<?php

namespace App\Controller;

use App\Entity\Repas;
use App\Form\RepasType;
use App\Repository\RepasRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/repas')]
final class RepasController extends AbstractController
{
    #[Route(name: 'app_repas_index', methods: ['GET'])]
    public function index(Request $request, RepasRepository $repasRepository): Response
    {
        // Récupérer les paramètres de recherche et tri
        $searchNom = $request->query->get('search', '');
        $sortCalories = $request->query->get('sort', ''); // 'asc' ou 'desc'
        
        // Récupérer tous les repas
        $queryBuilder = $repasRepository->createQueryBuilder('r');
        
        // Appliquer la recherche par nom si présente
        if (!empty($searchNom)) {
            $queryBuilder->andWhere('r.nom LIKE :nom')
                        ->setParameter('nom', '%' . $searchNom . '%');
        }
        
        // Appliquer le tri par calories si demandé
        if ($sortCalories === 'asc') {
            $queryBuilder->orderBy('r.calories', 'ASC');
        } elseif ($sortCalories === 'desc') {
            $queryBuilder->orderBy('r.calories', 'DESC');
        } else {
            // Tri par défaut par ID
            $queryBuilder->orderBy('r.id', 'DESC');
        }
        
        $repas = $queryBuilder->getQuery()->getResult();
        
        return $this->render('back/repas/index.html.twig', [
            'repas' => $repas,
            'searchNom' => $searchNom,
            'sortCalories' => $sortCalories,
        ]);
    }

    #[Route('/new', name: 'app_repas_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $repas = new Repas();
        $form = $this->createForm(RepasType::class, $repas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // Validation supplémentaire côté serveur
            $errors = $validator->validate($repas);
            
            if (count($errors) > 0) {
                // Ajouter les erreurs au formulaire
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
                
                return $this->render('back/repas/new.html.twig', [
                    'repas' => $repas,
                    'form' => $form->createView(),
                ]);
            }

            // TEMPORARY: Skip login check
            // $user = $this->getUser();
            // if (!$user) {
            //     throw $this->createAccessDeniedException('You must be logged in to add a repas.');
            // }
            // $repas->setUser($user);

            try {
                $entityManager->persist($repas);
                $entityManager->flush();
                
                $this->addFlash('success', 'Le repas a été créé avec succès.');
                return $this->redirectToRoute('app_repas_index', [], Response::HTTP_SEE_OTHER);
                
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la création du repas.');
                
                return $this->render('back/repas/new.html.twig', [
                    'repas' => $repas,
                    'form' => $form->createView(),
                ]);
            }
        }

        return $this->render('back/repas/new.html.twig', [
            'repas' => $repas,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_repas_show', methods: ['GET'])]
    public function show(Repas $repas): Response
    {
        return $this->render('back/repas/show.html.twig', [
            'repas' => $repas,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_repas_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Repas $repas, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $form = $this->createForm(RepasType::class, $repas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            
            // Validation supplémentaire côté serveur
            $errors = $validator->validate($repas);
            
            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
                
                return $this->render('back/repas/edit.html.twig', [
                    'repas' => $repas,
                    'form' => $form->createView(),
                ]);
            }

            try {
                $entityManager->flush();
                
                $this->addFlash('success', 'Le repas a été modifié avec succès.');
                return $this->redirectToRoute('app_repas_index', [], Response::HTTP_SEE_OTHER);
                
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la modification du repas.');
                
                return $this->render('back/repas/edit.html.twig', [
                    'repas' => $repas,
                    'form' => $form->createView(),
                ]);
            }
        }

        return $this->render('back/repas/edit.html.twig', [
            'repas' => $repas,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_repas_delete', methods: ['POST'])]
    public function delete(Request $request, Repas $repas, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$repas->getId(), $request->getPayload()->getString('_token'))) {
            try {
                $entityManager->remove($repas);
                $entityManager->flush();
                
                $this->addFlash('success', 'Le repas a été supprimé avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Une erreur est survenue lors de la suppression du repas.');
            }
        }

        return $this->redirectToRoute('app_repas_index', [], Response::HTTP_SEE_OTHER);
    }
}