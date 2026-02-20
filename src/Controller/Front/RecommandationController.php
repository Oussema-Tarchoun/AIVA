<?php

namespace App\Controller\Front;

use App\Entity\Recommandation;
use App\Entity\User;
use App\Repository\RecommandationRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/front/recommandation')]
class RecommandationController extends AbstractController
{
    #[Route('/', name: 'front_recommandation_index', methods: ['GET'])]
    public function index(Request $request, RecommandationRepository $repo): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $search = trim((string) $request->query->get('q', ''));
        $sort   = (string) $request->query->get('sort', 'date');
        $order  = strtoupper((string) $request->query->get('order', 'DESC')) === 'ASC' ? 'ASC' : 'DESC';

        $recommandations = $repo->searchAndSort($user, $search, $sort, $order);

        return $this->render('front/recommandation.html.twig', [
            'recommandations' => $recommandations,
            'search' => $search,
            'sort'   => $sort,
            'order'  => $order,
        ]);
    }

    #[Route('/{id}/delete', name: 'front_recommandation_delete', methods: ['POST'])]
    public function delete(Recommandation $reco, Request $request, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete_reco_'.$reco->getId(), $request->request->get('_token'))) {
            $em->remove($reco);
            $em->flush();
            $this->addFlash('success', 'Recommandation supprimée.');
        }

        return $this->redirectToRoute('front_recommandation_index');
    }
}
