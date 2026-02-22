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
use App\Service\RepasPdfService;
use App\Entity\User;

#[Route('/repas')]
final class RepasController extends AbstractController
{
    // ─── INDEX ────────────────────────────────────────────────────────────────
    #[Route('', name: 'app_repas_index', methods: ['GET'])]
    public function index(Request $request, RepasRepository $repasRepository): Response
    {
        $searchNom    = $request->query->get('search', '');
        $sortCalories = $request->query->get('sort', '');

        $qb = $repasRepository->createQueryBuilder('r');

        if (!empty($searchNom)) {
            $qb->andWhere('r.nom LIKE :nom')
               ->setParameter('nom', '%' . $searchNom . '%');
        }

        if ($sortCalories === 'asc') {
            $qb->orderBy('r.calories', 'ASC');
        } elseif ($sortCalories === 'desc') {
            $qb->orderBy('r.calories', 'DESC');
        } else {
            $qb->orderBy('r.id', 'DESC');
        }

        return $this->render('back/repas/index.html.twig', [
            'repas'        => $qb->getQuery()->getResult(),
            'searchNom'    => $searchNom,
            'sortCalories' => $sortCalories,
        ]);
    }

    // ─── NEW ──────────────────────────────────────────────────────────────────
    #[Route('/new', name: 'app_repas_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $repas = new Repas();
        $form  = $this->createForm(RepasType::class, $repas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $em->persist($repas);
                $em->flush();

                $this->addFlash('success', 'Le repas a été créé avec succès.');
                return $this->redirectToRoute('app_repas_index', [], Response::HTTP_SEE_OTHER);

            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la création : ' . $e->getMessage());
            }
        }

        return $this->render('back/repas/new.html.twig', [
            'repas' => $repas,
            'form'  => $form,
        ]);
    }

    // ─── SHOW ─────────────────────────────────────────────────────────────────
    // ⚠️  IMPORTANT : cette route DOIT être déclarée avant /{id} delete
    //     pour éviter le conflit GET /{id} vs POST /{id}
    #[Route('/{id}', name: 'app_repas_show', methods: ['GET'])]
    public function show(Repas $repas): Response
    {
        return $this->render('back/repas/show.html.twig', [
            'repas' => $repas,
        ]);
    }

    // ─── EDIT ─────────────────────────────────────────────────────────────────
    #[Route('/{id}/edit', name: 'app_repas_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Repas $repas, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(RepasType::class, $repas);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            try {
                $em->flush();

                $this->addFlash('success', 'Le repas a été modifié avec succès.');
                return $this->redirectToRoute('app_repas_index', [], Response::HTTP_SEE_OTHER);

            } catch (\Exception $e) {
                $this->addFlash('error', 'Erreur lors de la modification : ' . $e->getMessage());
            }
        }

        return $this->render('back/repas/edit.html.twig', [
            'repas' => $repas,
            'form'  => $form,
        ]);
    }

    // ─── DELETE ───────────────────────────────────────────────────────────────
    // Symfony simule DELETE via POST + champ _method=DELETE
    // Le formulaire doit envoyer : method="post" + <input name="_method" value="DELETE">
    #[Route('/{id}', name: 'app_repas_delete', methods: ['POST'])]
    public function delete(Request $request, Repas $repas, EntityManagerInterface $em): Response
    {
        // ✅ Vérification CSRF
        if (!$this->isCsrfTokenValid('delete' . $repas->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide. Suppression annulée.');
            return $this->redirectToRoute('app_repas_index', [], Response::HTTP_SEE_OTHER);
        }

        try {
            // ✅ Fix clé étrangère : vider la relation ManyToMany avant suppression
            //    sinon Doctrine lève une contrainte FK sur la table repas_aliment
            $repas->getAliments()->clear();
            $em->persist($repas);
            $em->flush();

            // ✅ Supprimer le repas
            $em->remove($repas);
            $em->flush();

            $this->addFlash('success', 'Le repas a été supprimé avec succès.');

        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de la suppression : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_repas_index', [], Response::HTTP_SEE_OTHER);
    }

#[Route('/{id}/pdf', name: 'app_repas_pdf', methods: ['GET'])]
public function exportPdf(Repas $repas, RepasPdfService $pdfService): Response
{
    $pdfContent = $pdfService->generateRepasPdf($repas);
    $filename = sprintf('repas_%s_%s.pdf',
        strtolower(str_replace([' ', '/'], '_', $repas->getNom() ?? 'repas')),
        (new \DateTimeImmutable())->format('Y-m-d')
    );
    return new Response($pdfContent, 200, [
        'Content-Type'        => 'application/pdf',
        'Content-Disposition' => sprintf('attachment; filename="%s"', $filename),
    ]);
}




}
