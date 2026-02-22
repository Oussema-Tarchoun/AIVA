<?php

namespace App\Controller\Front;

use App\Entity\Aliment;
use App\Form\AlimentType;
use App\Repository\AlimentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Validator\Validator\ValidatorInterface;

#[Route('/nutrition/aliments')]
final class AlimentFrontController extends AbstractController
{
    #[Route('', name: 'front_aliment_index', methods: ['GET'])]
public function index(Request $request, AlimentRepository $alimentRepository): Response
{
    $search = $request->query->get('search', '');
    $sortBy = $request->query->get('sort', 'nom');
    $order  = strtoupper($request->query->get('order', 'ASC'));

    $allowedSorts = ['id', 'nom', 'quantite'];
    if (!in_array($sortBy, $allowedSorts, true)) $sortBy = 'nom';
    if (!in_array($order, ['ASC', 'DESC'], true)) $order = 'ASC';

$qb = $alimentRepository->createQueryBuilder('a')
    ->leftJoin('a.repas', 'r')
    ->andWhere('r.user = :user OR r.id IS NULL')
    ->setParameter('user', $this->getUser())
    ->distinct(); 

    if ($search !== '') {
        $qb->andWhere('a.nom LIKE :search')
           ->setParameter('search', '%' . $search . '%');
    }

    $qb->orderBy('a.' . $sortBy, $order);

    $aliments = $qb->getQuery()->getResult();

    return $this->render('front/aliment/index.html.twig', [
        'aliments'      => $aliments,
        'current_search' => $search,
        'current_sort'  => $sortBy,
        'current_order' => $order,
    ]);
}

    

    #[Route('/new', name: 'front_aliment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        $aliment = new Aliment();
        $form = $this->createForm(AlimentType::class, $aliment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $proteine = $request->request->get('macro_proteine', '0');
            $glucide  = $request->request->get('macro_glucide', '0');
            $lipide   = $request->request->get('macro_lipide', '0');

            $errors = [];

            foreach ([
                'proteine' => $proteine,
                'glucide'  => $glucide,
                'lipide'   => $lipide,
            ] as $k => $v) {
                if (!is_numeric($v)) $errors[] = "La valeur de $k doit être un nombre.";
                elseif ((float)$v < 0) $errors[] = "$k ne peut pas être négatif.";
                elseif ((float)$v > 1000) $errors[] = "$k ne peut pas dépasser 1000g.";
            }

            if (!empty($errors)) {
                foreach ($errors as $e) {
                    $this->addFlash('error', $e);
                }

                return $this->render('front/aliment/new.html.twig', [
                    'aliment' => $aliment,
                    'form' => $form->createView(),
                ]);
            }

            $aliment->setMacro([
                'proteine' => (float)$proteine,
                'glucide'  => (float)$glucide,
                'lipide'   => (float)$lipide,
            ]);

            $violations = $validator->validate($aliment);
            if (count($violations) > 0) {
                foreach ($violations as $v) {
                    $this->addFlash('error', $v->getMessage());
                }

                return $this->render('front/aliment/new.html.twig', [
                    'aliment' => $aliment,
                    'form' => $form->createView(),
                ]);
            }

            $em->persist($aliment);
            $em->flush();

            $this->addFlash('success', 'Aliment créé avec succès !');
            return $this->redirectToRoute('front_aliment_index');
        }

        return $this->render('front/aliment/new.html.twig', [
            'aliment' => $aliment,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'front_aliment_show', methods: ['GET'])]
    public function show(Aliment $aliment): Response
    {
        return $this->render('front/aliment/show.html.twig', [
            'aliment' => $aliment,
        ]);
    }

    #[Route('/{id}/edit', name: 'front_aliment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Aliment $aliment, EntityManagerInterface $em, ValidatorInterface $validator): Response
    {
        $form = $this->createForm(AlimentType::class, $aliment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $proteine = $request->request->get('macro_proteine', '0');
            $glucide  = $request->request->get('macro_glucide', '0');
            $lipide   = $request->request->get('macro_lipide', '0');

            $errors = [];

            foreach ([
                'proteine' => $proteine,
                'glucide'  => $glucide,
                'lipide'   => $lipide,
            ] as $k => $v) {
                if (!is_numeric($v)) $errors[] = "La valeur de $k doit être un nombre.";
                elseif ((float)$v < 0) $errors[] = "$k ne peut pas être négatif.";
                elseif ((float)$v > 1000) $errors[] = "$k ne peut pas dépasser 1000g.";
            }

            if (!empty($errors)) {
                foreach ($errors as $e) {
                    $this->addFlash('error', $e);
                }

                return $this->render('front/aliment/edit.html.twig', [
                    'aliment' => $aliment,
                    'form' => $form->createView(),
                ]);
            }

            $aliment->setMacro([
                'proteine' => (float)$proteine,
                'glucide'  => (float)$glucide,
                'lipide'   => (float)$lipide,
            ]);

            $violations = $validator->validate($aliment);
            if (count($violations) > 0) {
                foreach ($violations as $v) {
                    $this->addFlash('error', $v->getMessage());
                }

                return $this->render('front/aliment/edit.html.twig', [
                    'aliment' => $aliment,
                    'form' => $form->createView(),
                ]);
            }

            $em->flush();

            $this->addFlash('success', 'Aliment modifié avec succès !');
            return $this->redirectToRoute('front_aliment_index');
        }

        return $this->render('front/aliment/edit.html.twig', [
            'aliment' => $aliment,
            'form' => $form->createView(),
        ]);
    }

    // ✅ FIXED: delete route is now /{id}/delete (no conflict with show)
    #[Route('/{id}/delete', name: 'front_aliment_delete', methods: ['POST'])]
    public function delete(Request $request, Aliment $aliment, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete' . $aliment->getId(), (string) $request->request->get('_token'))) {
            $em->remove($aliment);
            $em->flush();
            $this->addFlash('success', 'Aliment supprimé avec succès !');
        }

        return $this->redirectToRoute('front_aliment_index');
    }
}
