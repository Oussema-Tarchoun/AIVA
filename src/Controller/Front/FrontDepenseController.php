<?php

namespace App\Controller\Front;

use App\Entity\Depense;
use App\Form\DepenseType;
use App\Repository\DepenseRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/front/depense')]
class FrontDepenseController extends AbstractController
{
    private function getFakeUser(UserRepository $userRepo)
    {
        $user = $userRepo->find(2);
        if (!$user) {
            throw $this->createNotFoundException('User id=2 not found');
        }
        return $user;
    }

    #[Route('', name: 'front_depense_index', methods: ['GET'])]
    public function index(
        DepenseRepository $depenseRepository,
        UserRepository $userRepo
    ): Response {
        $user = $this->getFakeUser($userRepo);
        $depenses = $depenseRepository->findByUser($user);

        return $this->render('front/depense/index.html.twig', [
            'depenses' => $depenses,
        ]);
    }

    #[Route('/new', name: 'front_depense_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        UserRepository $userRepo,
        ValidatorInterface $validator
    ): Response {
        $depense = new Depense();
        $form = $this->createForm(DepenseType::class, $depense);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $user = $this->getFakeUser($userRepo);
            
            $errors = $validator->validate($depense);

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                $validationPassed = true;

                // Vérifier la description
                if ($depense->getDescription() === null || trim($depense->getDescription()) === '') {
                    $this->addFlash('error', 'La description ne peut pas être vide.');
                    $validationPassed = false;
                }

                // Vérifier le montant
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

                        // Vérifier max 2 décimales
                        $montantParts = explode('.', (string) $depense->getMontant());
                        if (isset($montantParts[1]) && strlen($montantParts[1]) > 2) {
                            $this->addFlash('error', 'Le montant ne peut avoir que 2 décimales maximum.');
                            $validationPassed = false;
                        }
                    }
                }

                // Vérifier la date
                if ($depense->getDateDepense() === null) {
                    $this->addFlash('error', 'La date de dépense est obligatoire.');
                    $validationPassed = false;
                } elseif ($depense->getDateDepense() > new \DateTime()) {
                    $this->addFlash('error', 'La date de dépense ne peut pas être dans le futur.');
                    $validationPassed = false;
                }

                // Vérifier le statut
                $statutsValides = ['Payée', 'En attente', 'Annulée'];
                if (
                    $depense->getStatut() === null ||
                    $depense->getStatut() === '' ||
                    !in_array($depense->getStatut(), $statutsValides, true)
                ) {
                    $this->addFlash('error', 'Le statut doit être "Payée", "En attente" ou "Annulée".');
                    $validationPassed = false;
                }

                // Vérifier la catégorie
                if ($depense->getCategorie() === null) {
                    $this->addFlash('error', 'La catégorie est obligatoire.');
                    $validationPassed = false;
                } elseif ($depense->getCategorie()->getUser() !== $user) {
                    $this->addFlash('error', 'Catégorie non autorisée.');
                    $validationPassed = false;
                }

                if ($validationPassed) {
                    try {
                        $entityManager->persist($depense);
                        $entityManager->flush();

                        $this->addFlash('success', 'La dépense a été ajoutée avec succès !');
                        return $this->redirectToRoute('finance', [], Response::HTTP_SEE_OTHER);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors de l\'enregistrement : ' . $e->getMessage());
                    }
                }
            }
        }

        return $this->render('front/depense/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'front_depense_show', methods: ['GET'])]
    public function show(
        Depense $depense,
        UserRepository $userRepo
    ): Response {
        $user = $this->getFakeUser($userRepo);

        if (!$depense->getCategorie() || $depense->getCategorie()->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

        return $this->render('front/depense/show.html.twig', [
            'depense' => $depense,
        ]);
    }

    #[Route('/{id}/edit', name: 'front_depense_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Depense $depense,
        EntityManagerInterface $entityManager,
        UserRepository $userRepo,
        ValidatorInterface $validator
    ): Response {
        $user = $this->getFakeUser($userRepo);

        if (!$depense->getCategorie() || $depense->getCategorie()->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

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

                // Vérifier la description
                if ($depense->getDescription() === null || trim($depense->getDescription()) === '') {
                    $this->addFlash('error', 'La description ne peut pas être vide.');
                    $validationPassed = false;
                }

                // Vérifier le montant
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

                        // Vérifier max 2 décimales
                        $montantParts = explode('.', (string) $depense->getMontant());
                        if (isset($montantParts[1]) && strlen($montantParts[1]) > 2) {
                            $this->addFlash('error', 'Le montant ne peut avoir que 2 décimales maximum.');
                            $validationPassed = false;
                        }
                    }
                }

                // Vérifier la date
                if ($depense->getDateDepense() === null) {
                    $this->addFlash('error', 'La date de dépense est obligatoire.');
                    $validationPassed = false;
                } elseif ($depense->getDateDepense() > new \DateTime()) {
                    $this->addFlash('error', 'La date de dépense ne peut pas être dans le futur.');
                    $validationPassed = false;
                }

                // Vérifier le statut
                $statutsValides = ['Payée', 'En attente', 'Annulée'];
                if (
                    $depense->getStatut() === null ||
                    $depense->getStatut() === '' ||
                    !in_array($depense->getStatut(), $statutsValides, true)
                ) {
                    $this->addFlash('error', 'Le statut doit être "Payée", "En attente" ou "Annulée".');
                    $validationPassed = false;
                }

                // Vérifier la catégorie
                if ($depense->getCategorie() === null) {
                    $this->addFlash('error', 'La catégorie est obligatoire.');
                    $validationPassed = false;
                } elseif ($depense->getCategorie()->getUser() !== $user) {
                    $this->addFlash('error', 'Catégorie non autorisée.');
                    $validationPassed = false;
                }

                if ($validationPassed) {
                    try {
                        $entityManager->flush();

                        $this->addFlash('success', 'La dépense a été modifiée avec succès !');
                        return $this->redirectToRoute('finance', [], Response::HTTP_SEE_OTHER);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors de la modification : ' . $e->getMessage());
                    }
                }
            }
        }

        return $this->render('front/depense/edit.html.twig', [
            'depense' => $depense,
            'form'    => $form,
        ]);
    }

    #[Route('/{id}', name: 'front_depense_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Depense $depense,
        EntityManagerInterface $entityManager,
        UserRepository $userRepo
    ): Response {
        $user = $this->getFakeUser($userRepo);

        if (!$depense->getCategorie() || $depense->getCategorie()->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete'.$depense->getIdDepense(), $request->request->get('_token'))) {
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

        return $this->redirectToRoute('finance', [], Response::HTTP_SEE_OTHER);
    }
}