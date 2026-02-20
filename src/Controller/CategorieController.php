<?php

namespace App\Controller;

use App\Entity\Categorie;
use App\Form\CategorieType;
use App\Repository\CategorieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/categorie')]
final class CategorieController extends AbstractController
{
    #[Route('', name: 'app_categorie_index', methods: ['GET'])]
    public function index(CategorieRepository $categorieRepository): Response
    {
        return $this->render('categorie/index.html.twig', [
            'categories' => $categorieRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_categorie_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): Response {
        $categorie = new Categorie();
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            // Validation avec Symfony Validator
            $errors = $validator->validate($categorie);

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                // Validations personnalisées supplémentaires
                $validationPassed = true;

                // Vérifier le nom de la catégorie
                if ($categorie->getNomCategorie() === null || trim($categorie->getNomCategorie()) === '') {
                    $this->addFlash('error', 'Le nom de la catégorie ne peut pas être vide.');
                    $validationPassed = false;
                } elseif (strlen(trim($categorie->getNomCategorie())) < 2) {
                    $this->addFlash('error', 'Le nom doit contenir au moins 2 caractères.');
                    $validationPassed = false;
                }

                // Vérifier la description (optionnelle mais si remplie, max 255 caractères)
                if ($categorie->getDescription() !== null && strlen($categorie->getDescription()) > 255) {
                    $this->addFlash('error', 'La description ne peut pas dépasser 255 caractères.');
                    $validationPassed = false;
                }

                // Vérifier l'utilisateur
                if ($categorie->getUser() === null) {
                    $this->addFlash('error', 'Veuillez choisir un utilisateur (propriétaire).');
                    $validationPassed = false;
                }

                if ($validationPassed) {
                    try {
                        $entityManager->persist($categorie);
                        $entityManager->flush();

                        $this->addFlash('success', 'La catégorie a été créée avec succès !');
                        return $this->redirectToRoute('app_categorie_index', [], Response::HTTP_SEE_OTHER);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors de l\'enregistrement : ' . $e->getMessage());
                    }
                }
            }
        }

        return $this->render('categorie/new.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_show', methods: ['GET'])]
    public function show(Categorie $categorie): Response
    {
        return $this->render('categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_categorie_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Categorie $categorie,
        EntityManagerInterface $entityManager,
        ValidatorInterface $validator
    ): Response {
        $form = $this->createForm(CategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            $errors = $validator->validate($categorie);

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
                $validationPassed = true;

                if ($categorie->getNomCategorie() === null || trim($categorie->getNomCategorie()) === '') {
                    $this->addFlash('error', 'Le nom de la catégorie ne peut pas être vide.');
                    $validationPassed = false;
                } elseif (strlen(trim($categorie->getNomCategorie())) < 2) {
                    $this->addFlash('error', 'Le nom doit contenir au moins 2 caractères.');
                    $validationPassed = false;
                }

                if ($categorie->getDescription() !== null && strlen($categorie->getDescription()) > 255) {
                    $this->addFlash('error', 'La description ne peut pas dépasser 255 caractères.');
                    $validationPassed = false;
                }

                if ($categorie->getUser() === null) {
                    $this->addFlash('error', 'Veuillez choisir un utilisateur (propriétaire).');
                    $validationPassed = false;
                }

                if ($validationPassed) {
                    try {
                        $entityManager->flush();

                        $this->addFlash('success', 'La catégorie a été modifiée avec succès !');
                        return $this->redirectToRoute('app_categorie_index', [], Response::HTTP_SEE_OTHER);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors de la modification : ' . $e->getMessage());
                    }
                }
            }
        }

        return $this->render('categorie/edit.html.twig', [
            'categorie' => $categorie,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_categorie_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Categorie $categorie,
        EntityManagerInterface $entityManager
    ): Response {
        if ($this->isCsrfTokenValid('delete' . $categorie->getIdCategorie(), (string) $request->request->get('_token'))) {
            try {
                $entityManager->remove($categorie);
                $entityManager->flush();
                $this->addFlash('success', 'La catégorie a été supprimée avec succès.');
            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la suppression : ' . $e->getMessage());
            }
        } else {
            $this->addFlash('error', 'Token CSRF invalide.');
        }

        return $this->redirectToRoute('app_categorie_index', [], Response::HTTP_SEE_OTHER);
    }
}