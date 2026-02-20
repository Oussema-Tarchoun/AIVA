<?php

namespace App\Controller\Front;

use App\Entity\Categorie;
use App\Form\Front\FrontCategorieType;
use App\Repository\CategorieRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/front/categorie')]
class FrontCategorieController extends AbstractController
{
    private function getFakeUser(UserRepository $userRepo)
    {
        $user = $userRepo->find(2);
        if (!$user) {
            throw $this->createNotFoundException('User id=2 not found');
        }
        return $user;
    }

    #[Route('', name: 'front_categorie_index', methods: ['GET'])]
    public function index(
        CategorieRepository $categorieRepository,
        UserRepository $userRepo
    ): Response {
        $user = $this->getFakeUser($userRepo);

        $categories = $categorieRepository->findBy(
            ['user' => $user],
            ['id_categorie' => 'DESC']
        );

        return $this->render('front/categorie/index.html.twig', [
            'categories' => $categories,
        ]);
    }

    #[Route('/new', name: 'front_categorie_new', methods: ['GET', 'POST'])]
    public function new(
        Request $request,
        EntityManagerInterface $entityManager,
        UserRepository $userRepo,
        ValidatorInterface $validator
    ): Response {
        $categorie = new Categorie();
        
        // ✅ Définir le user AVANT handleRequest()
        $categorie->setUser($this->getFakeUser($userRepo));

        $form = $this->createForm(FrontCategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            // ✅ MÊME VALIDATION QUE LE BACK
            
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

                // Vérifier l'utilisateur (déjà défini automatiquement)
                if ($categorie->getUser() === null) {
                    $this->addFlash('error', 'Erreur : utilisateur non défini.');
                    $validationPassed = false;
                }

                if ($validationPassed) {
                    try {
                        $entityManager->persist($categorie);
                        $entityManager->flush();

                        $this->addFlash('success', 'La catégorie a été créée avec succès !');
                        return $this->redirectToRoute('finance', [], Response::HTTP_SEE_OTHER);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors de l\'enregistrement : ' . $e->getMessage());
                    }
                }
            }
        }

        return $this->render('front/categorie/new.html.twig', [
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'front_categorie_show', methods: ['GET'])]
    public function show(
        Categorie $categorie,
        UserRepository $userRepo
    ): Response {
        $user = $this->getFakeUser($userRepo);

        if ($categorie->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

        return $this->render('front/categorie/show.html.twig', [
            'categorie' => $categorie,
        ]);
    }

    #[Route('/{id}/edit', name: 'front_categorie_edit', methods: ['GET', 'POST'])]
    public function edit(
        Request $request,
        Categorie $categorie,
        EntityManagerInterface $entityManager,
        UserRepository $userRepo,
        ValidatorInterface $validator
    ): Response {
        $user = $this->getFakeUser($userRepo);

        if ($categorie->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

        $form = $this->createForm(FrontCategorieType::class, $categorie);
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            // ✅ MÊME VALIDATION QUE LE BACK
            
            $errors = $validator->validate($categorie);

            if (count($errors) > 0) {
                foreach ($errors as $error) {
                    $this->addFlash('error', $error->getMessage());
                }
            } else {
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
                    $this->addFlash('error', 'Erreur : utilisateur non défini.');
                    $validationPassed = false;
                }

                if ($validationPassed) {
                    try {
                        $entityManager->flush();

                        $this->addFlash('success', 'La catégorie a été modifiée avec succès !');
return $this->redirectToRoute('front_categorie_index', [], Response::HTTP_SEE_OTHER);
                    } catch (\Exception $e) {
                        $this->addFlash('error', 'Erreur lors de la modification : ' . $e->getMessage());
                    }
                }
            }
        }

        return $this->render('front/categorie/edit.html.twig', [
            'categorie' => $categorie,
            'form'      => $form,
        ]);
    }

    #[Route('/{id}', name: 'front_categorie_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        Categorie $categorie,
        EntityManagerInterface $entityManager,
        UserRepository $userRepo
    ): Response {
        $user = $this->getFakeUser($userRepo);

        if ($categorie->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete' . $categorie->getIdCategorie(), $request->request->get('_token'))) {
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

return $this->redirectToRoute('front_categorie_index', [], Response::HTTP_SEE_OTHER);
    }
}
