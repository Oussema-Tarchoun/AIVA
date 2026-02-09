<?php

namespace App\Controller;

use App\Entity\Depense;
use App\Form\DepenseType;
use App\Repository\DepenseRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/depense')]
final class DepenseController extends AbstractController
{
    #[Route(name: 'app_depense_index', methods: ['GET'])]
    public function index(Request $request, DepenseRepository $depenseRepository): Response
    {
        $min = $request->query->get('min');
        $max = $request->query->get('max');

        $sort      = $request->query->get('sort', 'date');
        $direction = $request->query->get('direction', 'desc');

        $minFloat = $min !== null && $min !== '' ? (float) $min : null;
        $maxFloat = $max !== null && $max !== '' ? (float) $max : null;

        // Récupérer toutes les dépenses
        $depenses = $depenseRepository->findAll();
        
        // Filtrage manuel si min/max sont définis
        if ($minFloat !== null || $maxFloat !== null) {
            $depenses = array_filter($depenses, function($depense) use ($minFloat, $maxFloat) {
                $montant = (float) $depense->getMontant();
                
                if ($minFloat !== null && $montant < $minFloat) {
                    return false;
                }
                
                if ($maxFloat !== null && $montant > $maxFloat) {
                    return false;
                }
                
                return true;
            });
        }
        
        // Tri manuel
        usort($depenses, function($a, $b) use ($sort, $direction) {
            if ($sort === 'montant') {
                $valA = (float) $a->getMontant();
                $valB = (float) $b->getMontant();
            } else {
                $valA = $a->getDateDepense() ? $a->getDateDepense()->getTimestamp() : 0;
                $valB = $b->getDateDepense() ? $b->getDateDepense()->getTimestamp() : 0;
            }
            
            $comparison = $valA <=> $valB;
            return $direction === 'desc' ? -$comparison : $comparison;
        });

        return $this->render('depense/index.html.twig', [
            'depenses'  => $depenses,
            'min'       => $min,
            'max'       => $max,
            'sort'      => $sort,
            'direction' => $direction,
        ]);
    }

    #[Route('/new', name: 'app_depense_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): Response {
        $depense = new Depense();
        $form = $this->createForm(DepenseType::class, $depense);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $validator->validate($depense);

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                $validationPassed = true;

                if ($depense->getDescription() === null || trim($depense->getDescription()) === '') {
                    $this->addFlash('error', 'La description ne peut pas être vide.');
                    $validationPassed = false;
                }

                if ($depense->getMontant() === null) {
                    $this->addFlash('error', 'Le montant est obligatoire.');
                    $validationPassed = false;
                } else {
                    if (!is_numeric($depense->getMontant())) {
                        $this->addFlash('error', 'Le montant doit être un nombre valide.');
                        $validationPassed = false;
                    } else {
                        $montantFloat = (float) $depense->getMontant();

                        if ($montantFloat <= 0) {
                            $this->addFlash('error', 'Le montant doit être supérieur à 0.');
                            $validationPassed = false;
                        }

                        $montantParts = explode('.', (string) $depense->getMontant());
                        if (isset($montantParts[1]) && strlen($montantParts[1]) > 2) {
                            $this->addFlash('error', 'Le montant ne peut avoir que 2 décimales maximum.');
                            $validationPassed = false;
                        }
                    }
                }

                if ($depense->getDateDepense() === null) {
                    $this->addFlash('error', 'La date de dépense est obligatoire.');
                    $validationPassed = false;
                } elseif ($depense->getDateDepense() > new \DateTime()) {
                    $this->addFlash('error', 'La date de dépense ne peut pas être dans le futur.');
                    $validationPassed = false;
                }

                $statutsValides = ['Payée', 'En attente', 'Annulée'];
                if (
                    $depense->getStatut() === null ||
                    $depense->getStatut() === '' ||
                    !in_array($depense->getStatut(), $statutsValides, true)
                ) {
                    $this->addFlash('error', 'Le statut doit être "Payée", "En attente" ou "Annulée".');
                    $validationPassed = false;
                }

                if ($depense->getCategorie() === null) {
                    $this->addFlash('error', 'La catégorie est obligatoire.');
                    $validationPassed = false;
                }

                if ($validationPassed) {
                    try {
                        $entityManager->persist($depense);
                        $entityManager->flush();

                        $this->addFlash('success', 'La dépense a été ajoutée avec succès !');
                        return $this->redirectToRoute('app_depense_index', [], Response::HTTP_SEE_OTHER);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors de l\'enregistrement : ' . $e->getMessage());
                    }
                }
            }
        }

        return $this->render('depense/new.html.twig', [
            'depense' => $depense,
            'form'    => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_depense_show', methods: ['GET'])]
    public function show(Depense $depense): Response
    {
        return $this->render('depense/show.html.twig', [
            'depense' => $depense,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_depense_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Depense $depense,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): Response {
        $form = $this->createForm(DepenseType::class, $depense);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $validator->validate($depense);

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                $validationPassed = true;

                if ($depense->getDescription() === null || trim($depense->getDescription()) === '') {
                    $this->addFlash('error', 'La description ne peut pas être vide.');
                    $validationPassed = false;
                }

                if ($depense->getMontant() !== null && (float) $depense->getMontant() <= 0) {
                    $this->addFlash('error', 'Le montant doit être supérieur à 0.');
                    $validationPassed = false;
                }

                if ($depense->getDateDepense() !== null && $depense->getDateDepense() > new \DateTime()) {
                    $this->addFlash('error', 'La date de dépense ne peut pas être dans le futur.');
                    $validationPassed = false;
                }

                if ($validationPassed) {
                    try {
                        $entityManager->flush();

                        $this->addFlash('success', 'La dépense a été modifiée avec succès !');
                        return $this->redirectToRoute('app_depense_index', [], Response::HTTP_SEE_OTHER);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors de la modification : ' . $e->getMessage());
                    }
                }
            }
        }

        return $this->render('depense/edit.html.twig', [
            'depense' => $depense,
            'form'    => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_depense_delete', methods: ['POST'])]
    public function delete(Request $request, Depense $depense, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete' . $depense->getIdDepense(), $request->request->get('_token'))) {
            try {
                $entityManager->remove($depense);
                $entityManager->flush();

                $this->addFlash('success', 'La dépense a été supprimée avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la suppression : ' . $e->getMessage());
            }
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_depense_index', [], Response::HTTP_SEE_OTHER);
    }
}