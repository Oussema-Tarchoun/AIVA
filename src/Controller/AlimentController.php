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
    // ─── INDEX ────────────────────────────────────────────────────────────────
    #[Route('', name: 'app_aliment_index', methods: ['GET'])]
    public function index(Request $request, AlimentRepository $alimentRepository): Response
    {
        $search = $request->query->get('search', '');
        $sortBy = $request->query->get('sort', 'nom');
        $order  = strtoupper($request->query->get('order', 'ASC'));

        $allowedSorts = ['id', 'nom', 'quantite'];
        if (!in_array($sortBy, $allowedSorts)) $sortBy = 'nom';
        if (!in_array($order, ['ASC', 'DESC']))  $order  = 'ASC';

        $qb = $alimentRepository->createQueryBuilder('a');

        if (!empty($search)) {
            $qb->where('a.nom LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        $qb->orderBy('a.' . $sortBy, $order);

        return $this->render('back/aliment/index.html.twig', [
            'aliments'      => $qb->getQuery()->getResult(),
            'current_search'=> $search,
            'current_sort'  => $sortBy,
            'current_order' => $order,
        ]);
    }

    // ─── NEW ──────────────────────────────────────────────────────────────────
    #[Route('/new', name: 'app_aliment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        $aliment = new Aliment();
        $form    = $this->createForm(AlimentType::class, $aliment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            // ✅ Lire et valider les macros manuellement (champs hors FormType)
            [$macro, $macroErrors] = $this->extractAndValidateMacro($request);

            if (!empty($macroErrors)) {
                foreach ($macroErrors as $err) {
                    $this->addFlash('error', $err);
                }
                return $this->render('back/aliment/new.html.twig', [
                    'aliment' => $aliment,
                    'form'    => $form,
                ]);
            }

            $aliment->setMacro($macro);

            // Validation Symfony de l'entité complète (inclut @Callback validateMacro)
            $violations = $validator->validate($aliment);
            if (count($violations) > 0) {
                foreach ($violations as $v) {
                    $this->addFlash('error', $v->getMessage());
                }
                return $this->render('back/aliment/new.html.twig', [
                    'aliment' => $aliment,
                    'form'    => $form,
                ]);
            }

            $em->persist($aliment);
            $em->flush();

            $this->addFlash('success', 'Aliment créé avec succès !');
            return $this->redirectToRoute('app_aliment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/aliment/new.html.twig', [
            'aliment' => $aliment,
            'form'    => $form,
        ]);
    }

    // ─── SHOW ─────────────────────────────────────────────────────────────────
    #[Route('/{id}', name: 'app_aliment_show', methods: ['GET'])]
    public function show(Aliment $aliment): Response
    {
        return $this->render('back/aliment/show.html.twig', [
            'aliment' => $aliment,
        ]);
    }

    // ─── EDIT ─────────────────────────────────────────────────────────────────
    #[Route('/{id}/edit', name: 'app_aliment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Aliment $aliment, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        $form = $this->createForm(AlimentType::class, $aliment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            [$macro, $macroErrors] = $this->extractAndValidateMacro($request);

            if (!empty($macroErrors)) {
                foreach ($macroErrors as $err) {
                    $this->addFlash('error', $err);
                }
                return $this->render('back/aliment/edit.html.twig', [
                    'aliment' => $aliment,
                    'form'    => $form,
                ]);
            }

            $aliment->setMacro($macro);

            $violations = $validator->validate($aliment);
            if (count($violations) > 0) {
                foreach ($violations as $v) {
                    $this->addFlash('error', $v->getMessage());
                }
                return $this->render('back/aliment/edit.html.twig', [
                    'aliment' => $aliment,
                    'form'    => $form,
                ]);
            }

            $em->flush();

            $this->addFlash('success', 'Aliment modifié avec succès !');
            return $this->redirectToRoute('app_aliment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->render('back/aliment/edit.html.twig', [
            'aliment' => $aliment,
            'form'    => $form,
        ]);
    }

    // ─── DELETE ───────────────────────────────────────────────────────────────
    #[Route('/{id}', name: 'app_aliment_delete', methods: ['POST'])]
    public function delete(Request $request, Aliment $aliment, EntityManagerInterface $em): Response
    {
        // ✅ request->request (POST body), pas getPayload() qui lit du JSON
        if (!$this->isCsrfTokenValid('delete' . $aliment->getId(), $request->request->get('_token'))) {
            $this->addFlash('error', 'Token CSRF invalide. Suppression annulée.');
            return $this->redirectToRoute('app_aliment_index', [], Response::HTTP_SEE_OTHER);
        }

        try {
            // ✅ Détacher l'aliment de tous les repas (ManyToMany inverse)
            //    sans ça => contrainte FK sur repas_aliment
            foreach ($aliment->getRepas() as $repas) {
                $repas->removeAliment($aliment);
            }
            $em->flush();

            $em->remove($aliment);
            $em->flush();

            $this->addFlash('success', 'Aliment supprimé avec succès !');

        } catch (\Exception $e) {
            $this->addFlash('error', 'Erreur lors de la suppression : ' . $e->getMessage());
        }

        return $this->redirectToRoute('app_aliment_index', [], Response::HTTP_SEE_OTHER);
    }

    // ─── HELPER ───────────────────────────────────────────────────────────────
    /**
     * Lit macro_proteine / macro_glucide / macro_lipide depuis le POST
     * et retourne [array $macro, array $errors]
     */
    private function extractAndValidateMacro(Request $request): array
    {
        $fields = [
            'proteine' => $request->request->get('macro_proteine', '0'),
            'glucide'  => $request->request->get('macro_glucide',  '0'),
            'lipide'   => $request->request->get('macro_lipide',   '0'),
        ];

        $errors = [];
        $macro  = [];

        $labels = [
            'proteine' => 'Protéines',
            'glucide'  => 'Glucides',
            'lipide'   => 'Lipides',
        ];

        foreach ($fields as $key => $raw) {
            $raw = trim($raw === '' ? '0' : $raw);

            if (!is_numeric($raw)) {
                $errors[] = "{$labels[$key]} : la valeur doit être un nombre.";
                continue;
            }

            $val = (float) $raw;

            if ($val < 0) {
                $errors[] = "{$labels[$key]} : la valeur ne peut pas être négative.";
            } elseif ($val > 1000) {
                $errors[] = "{$labels[$key]} : la valeur ne peut pas dépasser 1000g.";
            } else {
                $macro[$key] = $val;
            }
        }

        return [$macro, $errors];
    }
}
