<?php

namespace App\Controller\Front;

use App\Entity\Recommandation;
use App\Entity\Energie;
use App\Repository\RecommandationRepository;
use App\Repository\EnergieRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/front/recommandation')]
class RecommandationController extends AbstractController
{
    private function getFakeUser(UserRepository $userRepo)
    {
        $user = $userRepo->find(2);
        if (!$user) {
            throw $this->createNotFoundException('User id=2 not found');
        }
        return $user;
    }

    #[Route('/', name: 'front_recommandation_index', methods: ['GET'])]
    public function index(
        RecommandationRepository $recoRepo,
        EnergieRepository $energieRepo,
        UserRepository $userRepo
    ): Response {
        $user = $this->getFakeUser($userRepo);

        // ✅ énergies du user (id=2) pour alimenter le select dans le formulaire
        $energies = $energieRepo->findBy(['user' => $user->getId()], ['date_enregistrement' => 'DESC']);

        // ✅ recommandations liées aux énergies du user
        // (simple: on récupère toutes les recos et on filtre via query personnalisée si tu veux mieux)
        // Ici: méthode simple avec repo custom facultatif, on fait une requête Doctrine via QueryBuilder
        $recommandations = $recoRepo->createQueryBuilder('r')
            ->join('r.energie', 'e')
            ->where('e.user = :uid')
            ->setParameter('uid', $user->getId())
            ->orderBy('r.date_generation', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('front/recommandation.html.twig', [
            'recommandations' => $recommandations,
            'energies' => $energies,
        ]);
    }

    #[Route('/add', name: 'front_recommandation_add', methods: ['POST'])]
    public function add(
        Request $request,
        EntityManagerInterface $em,
        EnergieRepository $energieRepo,
        UserRepository $userRepo
    ): Response {
        $user = $this->getFakeUser($userRepo);

        $energieId = (int) $request->request->get('energie_id');
        $energie = $energieRepo->find($energieId);

        // sécurité: énergie doit appartenir au user=2
        if (!$energie || !$energie->getUser() || $energie->getUser()->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        $reco = new Recommandation();
        $reco->setEnergie($energie);
        $reco->setTitre($request->request->get('titre'));
        $reco->setDescription($request->request->get('description'));
        $reco->setNiveauImpact($request->request->get('niveau_impact'));

        $date = $request->request->get('date_generation');
        $reco->setDateGeneration($date ? new \DateTime($date) : new \DateTime());

        $em->persist($reco);
        $em->flush();

        return $this->redirectToRoute('front_recommandation_index');
    }

    #[Route('/{id}/update', name: 'front_recommandation_update', methods: ['POST'])]
    public function update(
        Recommandation $reco,
        Request $request,
        EntityManagerInterface $em,
        EnergieRepository $energieRepo,
        UserRepository $userRepo
    ): Response {
        $user = $this->getFakeUser($userRepo);

        // sécurité: reco doit être liée à une énergie du user=2
        $energie = $reco->getEnergie();
        if (!$energie || !$energie->getUser() || $energie->getUser()->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        // si on change l'énergie
        $energieId = (int) $request->request->get('energie_id');
        if ($energieId) {
            $newEnergie = $energieRepo->find($energieId);
            if (!$newEnergie || !$newEnergie->getUser() || $newEnergie->getUser()->getId() !== $user->getId()) {
                throw $this->createAccessDeniedException();
            }
            $reco->setEnergie($newEnergie);
        }

        $reco->setTitre($request->request->get('titre'));
        $reco->setDescription($request->request->get('description'));
        $reco->setNiveauImpact($request->request->get('niveau_impact'));

        $date = $request->request->get('date_generation');
        if ($date) {
            $reco->setDateGeneration(new \DateTime($date));
        }

        $em->flush();

        return $this->redirectToRoute('front_recommandation_index');
    }

    #[Route('/{id}/delete', name: 'front_recommandation_delete', methods: ['POST'])]
    public function delete(
        Recommandation $reco,
        Request $request,
        EntityManagerInterface $em,
        UserRepository $userRepo
    ): Response {
        $user = $this->getFakeUser($userRepo);

        $energie = $reco->getEnergie();
        if (!$energie || !$energie->getUser() || $energie->getUser()->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete_reco_'.$reco->getId(), $request->request->get('_token'))) {
            $em->remove($reco);
            $em->flush();
        }

        return $this->redirectToRoute('front_recommandation_index');
    }
}
