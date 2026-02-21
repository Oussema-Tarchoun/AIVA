<?php

namespace App\Controller\Front;

use App\Entity\Depense;
use App\Form\DepenseType;
use App\Repository\DepenseRepository;
use App\Repository\UserRepository;
use App\Service\DepenseAnomalieService;
use App\Service\DepenseAnalyseService;
use App\Service\DepensePdfService;
use Doctrine\ORM\EntityManagerInterface;
use Endroid\QrCode\Builder\Builder;
use Endroid\QrCode\Writer\PngWriter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
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
        UserRepository $userRepo,
        DepenseAnomalieService $anomalieService
    ): Response {
        $user = $this->getFakeUser($userRepo);
        $depenses = $depenseRepository->findByUser($user);
        $anomalies = $anomalieService->detecter($depenses);

        return $this->render('front/depense/index.html.twig', [
            'depenses' => $depenses,
            'anomalies' => $anomalies,
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
                } elseif ($depense->getCategorie()->getUser() !== $user) {
                    $this->addFlash('error', 'Catégorie non autorisée.');
                    $validationPassed = false;
                }

                if ($validationPassed) {
                    try {
                        $entityManager->persist($depense);
                        $entityManager->flush();

                        $this->addFlash('success', 'La dépense a été ajoutée avec succès !');

<<<<<<< HEAD
=======
                        // ✅ REDIRECTION FIXED HERE
>>>>>>> e23ad95072ed1066366413e38271f5821d9b7406
                        return $this->redirectToRoute('front_depense_index');

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

    #[Route('/moyenne-categorie/{id}', name: 'front_depense_moyenne_categorie', methods: ['GET'])]
    public function moyenneCategorie(
        int $id,
        DepenseRepository $depenseRepository,
        UserRepository $userRepo
    ): JsonResponse {
        $user = $this->getFakeUser($userRepo);
        $moyennes = $depenseRepository->moyenneParCategorie($user);
        $totaux = $depenseRepository->totalParCategorie($user);

        // Trouver la moyenne pour cette catégorie
        $moyenne = 0;
        $count = 0;
        $depenses = $depenseRepository->findByUser($user);
        foreach ($depenses as $d) {
            if ($d->getCategorie() && $d->getCategorie()->getIdCategorie() === $id) {
                $moyenne += (float) $d->getMontant();
                $count++;
            }
        }
        $moyenne = $count > 0 ? round($moyenne / $count, 2) : 0;

        return new JsonResponse([
            'moyenne' => $moyenne,
            'count' => $count,
            'seuil' => round($moyenne * 1.5, 2),
        ]);
    }

    #[Route('/statistiques', name: 'front_depense_statistiques', methods: ['GET'])]
    public function statistiques(
        DepenseRepository $depenseRepository,
        UserRepository $userRepo
    ): Response {
        $user = $this->getFakeUser($userRepo);

        $parCategorie = $depenseRepository->totalParCategorie($user);
        $parMois = $depenseRepository->totalParMois($user);
        $moyennes = $depenseRepository->moyenneParCategorie($user);

        $totalGeneral = array_sum(array_map(fn($c) => (float) $c['total'], $parCategorie));

        return $this->render('front/depense/statistiques.html.twig', [
            'parCategorie' => $parCategorie,
            'parMois' => $parMois,
            'moyennes' => $moyennes,
            'totalGeneral' => $totalGeneral,
        ]);
    }

    #[Route('/export-pdf', name: 'front_depense_export_pdf', methods: ['GET'])]
    public function exportPdf(
        DepenseRepository $depenseRepository,
        UserRepository $userRepo,
        DepensePdfService $pdfService
    ): Response {
        $user = $this->getFakeUser($userRepo);
        $depenses = $depenseRepository->findByUser($user);
        $pdfContent = $pdfService->generer($depenses);

        return new Response($pdfContent, 200, [
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="depenses_' . date('Y-m-d') . '.pdf"',
        ]);
    }

    #[Route('/analyse-ia', name: 'front_depense_analyse_ia', methods: ['GET'])]
    public function analyseIa(
        UserRepository $userRepo,
        DepenseAnalyseService $analyseService
    ): JsonResponse {
        $user = $this->getFakeUser($userRepo);
        $resultat = $analyseService->analyser($user);

        return new JsonResponse(['analyse' => $resultat]);
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

            if ($form->isValid()) {
                $entityManager->flush();

                $this->addFlash('success', 'La dépense a été modifiée avec succès !');

<<<<<<< HEAD
=======
                // ✅ REDIRECTION FIXED HERE
>>>>>>> e23ad95072ed1066366413e38271f5821d9b7406
                return $this->redirectToRoute('front_depense_index');
            }
        }

        return $this->render('front/depense/edit.html.twig', [
            'depense' => $depense,
            'form'    => $form,
        ]);
    }

    #[Route('/{id}/qrcode', name: 'front_depense_qrcode', methods: ['GET'])]
    public function qrcode(
        Depense $depense,
        UserRepository $userRepo
    ): Response {
        $user = $this->getFakeUser($userRepo);

        if (!$depense->getCategorie() || $depense->getCategorie()->getUser() !== $user) {
            throw $this->createAccessDeniedException();
        }

        $date = $depense->getDateDepense() ? $depense->getDateDepense()->format('d/m/Y') : '-';
        $cat = $depense->getCategorie() ? $depense->getCategorie()->getNomCategorie() : '-';

        $data = "DEPENSE #" . $depense->getIdDepense() . "\n"
            . "Description: " . $depense->getDescription() . "\n"
            . "Montant: " . $depense->getMontant() . " TND\n"
            . "Date: " . $date . "\n"
            . "Catégorie: " . $cat . "\n"
            . "Statut: " . $depense->getStatut();

        $builder = new Builder(
            writer: new PngWriter(),
            data: $data,
            size: 250,
            margin: 10,
        );
        $result = $builder->build();

        return new Response($result->getString(), 200, [
            'Content-Type' => $result->getMimeType(),
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
            $entityManager->remove($depense);
            $entityManager->flush();

            $this->addFlash('success', 'La dépense a été supprimée avec succès.');
        }

        return $this->redirectToRoute('front_depense_index');
    }
}
