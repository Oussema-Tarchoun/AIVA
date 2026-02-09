<?php

namespace App\Controller;

use App\Entity\Aliment;
use App\Form\AlimentType;
use App\Repository\AlimentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/aliment')]
final class AlimentController extends AbstractController
{
    #[Route(name: 'app_aliment_index', methods: ['GET'])]
    public function index(Request $request, AlimentRepository $alimentRepository): Response
    {
        // Récupérer les paramètres de recherche et tri
        $search = $request->query->get('search', '');
        $sortBy = $request->query->get('sort', 'nom'); // par défaut tri par nom
        $order = $request->query->get('order', 'ASC'); // par défaut ordre croissant
        
        // Valider le champ de tri (sécurité)
        $allowedSorts = ['id', 'nom', 'quantite'];
        if (!in_array($sortBy, $allowedSorts)) {
            $sortBy = 'nom';
        }
        
        // Valider l'ordre de tri (sécurité)
        $order = strtoupper($order);
        if (!in_array($order, ['ASC', 'DESC'])) {
            $order = 'ASC';
        }
        
        // Récupérer les aliments avec recherche et tri
        $queryBuilder = $alimentRepository->createQueryBuilder('a');
        
        // Appliquer la recherche si présente
        if (!empty($search)) {
            $queryBuilder->where('a.nom LIKE :search')
                        ->setParameter('search', '%' . $search . '%');
        }
        
        // Appliquer le tri
        $queryBuilder->orderBy('a.' . $sortBy, $order);
        
        $aliments = $queryBuilder->getQuery()->getResult();
        
        return $this->render('back/aliment/index.html.twig', [
            'aliments' => $aliments,
            'current_search' => $search,
            'current_sort' => $sortBy,
            'current_order' => $order,
        ]);
    }

    #[Route('/new', name: 'app_aliment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $aliment = new Aliment();
        $form = $this->createForm(AlimentType::class, $aliment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer et valider les valeurs macro
            $proteine = $request->request->get('macro_proteine', '0');
            $glucide = $request->request->get('macro_glucide', '0');
            $lipide = $request->request->get('macro_lipide', '0');
            
            // Validation manuelle des macros
            $errors = [];
            
            // Valider proteine
            if (!is_numeric($proteine)) {
                $errors[] = 'La protéine doit être un nombre.';
            } elseif ($proteine < 0) {
                $errors[] = 'La protéine ne peut pas être négative.';
            } elseif ($proteine > 1000) {
                $errors[] = 'La protéine ne peut pas dépasser 1000g.';
            }
            
            // Valider glucide
            if (!is_numeric($glucide)) {
                $errors[] = 'Le glucide doit être un nombre.';
            } elseif ($glucide < 0) {
                $errors[] = 'Le glucide ne peut pas être négatif.';
            } elseif ($glucide > 1000) {
                $errors[] = 'Le glucide ne peut pas dépasser 1000g.';
            }
            
            // Valider lipide
            if (!is_numeric($lipide)) {
                $errors[] = 'Le lipide doit être un nombre.';
            } elseif ($lipide < 0) {
                $errors[] = 'Le lipide ne peut pas être négatif.';
            } elseif ($lipide > 1000) {
                $errors[] = 'Le lipide ne peut pas dépasser 1000g.';
            }
            
            // Si des erreurs, les ajouter au formulaire
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error);
                }
                
                return $this->render('back/aliment/new.html.twig', [
                    'aliment' => $aliment,
                    'form' => $form,
                    'macro_errors' => $errors,
                ]);
            }
            
            // Définir les macros
            $aliment->setMacro([
                'proteine' => (float)$proteine,
                'glucide' => (float)$glucide,
                'lipide' => (float)$lipide,
            ]);
            
            // Valider l'entité complète
            $violations = $validator->validate($aliment);
            
            if (count($violations) > 0) {
                foreach ($violations as $violation) {
                    $this->addFlash('error', $violation->getMessage());
                }
                
                return $this->render('back/aliment/new.html.twig', [
                    'aliment' => $aliment,
                    'form' => $form,
                ]);
            }
            
            $entityManager->persist($aliment);
            $entityManager->flush();

            $this->addFlash('success', 'Aliment créé avec succès !');
            return $this->redirectToRoute('app_aliment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/aliment/new.html.twig', [
            'aliment' => $aliment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_aliment_show', methods: ['GET'])]
    public function show(Aliment $aliment): Response
    {
        return $this->render('back/aliment/show.html.twig', [
            'aliment' => $aliment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_aliment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Aliment $aliment, EntityManagerInterface $entityManager, ValidatorInterface $validator): Response
    {
        $form = $this->createForm(AlimentType::class, $aliment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Récupérer et valider les valeurs macro
            $proteine = $request->request->get('macro_proteine', '0');
            $glucide = $request->request->get('macro_glucide', '0');
            $lipide = $request->request->get('macro_lipide', '0');
            
            // Validation manuelle des macros
            $errors = [];
            
            // Valider proteine
            if (!is_numeric($proteine)) {
                $errors[] = 'La protéine doit être un nombre.';
            } elseif ($proteine < 0) {
                $errors[] = 'La protéine ne peut pas être négative.';
            } elseif ($proteine > 1000) {
                $errors[] = 'La protéine ne peut pas dépasser 1000g.';
            }
            
            // Valider glucide
            if (!is_numeric($glucide)) {
                $errors[] = 'Le glucide doit être un nombre.';
            } elseif ($glucide < 0) {
                $errors[] = 'Le glucide ne peut pas être négatif.';
            } elseif ($glucide > 1000) {
                $errors[] = 'Le glucide ne peut pas dépasser 1000g.';
            }
            
            // Valider lipide
            if (!is_numeric($lipide)) {
                $errors[] = 'Le lipide doit être un nombre.';
            } elseif ($lipide < 0) {
                $errors[] = 'Le lipide ne peut pas être négatif.';
            } elseif ($lipide > 1000) {
                $errors[] = 'Le lipide ne peut pas dépasser 1000g.';
            }
            
            // Si des erreurs, les ajouter au formulaire
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error);
                }
                
                return $this->render('back/aliment/edit.html.twig', [
                    'aliment' => $aliment,
                    'form' => $form,
                    'macro_errors' => $errors,
                ]);
            }
            
            // Définir les macros
            $aliment->setMacro([
                'proteine' => (float)$proteine,
                'glucide' => (float)$glucide,
                'lipide' => (float)$lipide,
            ]);
            
            // Valider l'entité complète
            $violations = $validator->validate($aliment);
            
            if (count($violations) > 0) {
                foreach ($violations as $violation) {
                    $this->addFlash('error', $violation->getMessage());
                }
                
                return $this->render('back/aliment/edit.html.twig', [
                    'aliment' => $aliment,
                    'form' => $form,
                ]);
            }
            
            $entityManager->flush();

            $this->addFlash('success', 'Aliment modifié avec succès !');
            return $this->redirectToRoute('app_aliment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/aliment/edit.html.twig', [
            'aliment' => $aliment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_aliment_delete', methods: ['POST'])]
    public function delete(Request $request, Aliment $aliment, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$aliment->getId(), $request->getPayload()->getString('_token'))) {
            $entityManager->remove($aliment);
            $entityManager->flush();
            
            $this->addFlash('success', 'Aliment supprimé avec succès !');
        }

        return $this->redirectToRoute('app_aliment_index', [], Response::HTTP_SEE_OTHER);
    }
}