<?php

namespace App\Controller\Front;

use App\Entity\Energie;
use App\Entity\User;
use App\Repository\EnergieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/front/energie')]
class EnergieController extends AbstractController
{
    #[Route('/', name: 'front_energie_index', methods: ['GET'])]
    public function index(EnergieRepository $repo): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        // ✅ use entity property names: date_enregistrement
        $energies = $repo->findBy(
            ['user' => $user], // ✅ must be User object, not id
            ['date_enregistrement' => 'DESC']
        );

        return $this->render('front/energy.html.twig', [
            'energies' => $energies
        ]);
    }

    #[Route('/add', name: 'front_energie_add', methods: ['POST'])]
    public function add(Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $energie = new Energie();
        $energie->setUser($user);

        // ✅ setters exist in entity
        $energie->setTypeEnergie($request->request->get('typeEnergie'));
        $energie->setPeriode((float) $request->request->get('periode'));
        $energie->setValeur((float) $request->request->get('valeur'));
        $energie->setSource($request->request->get('source'));

        $date = $request->request->get('dateEnregistrement');
        $energie->setDateEnregistrement($date ? new \DateTime($date) : new \DateTime());

        $em->persist($energie);
        $em->flush();

        return $this->redirectToRoute('front_energie_index');
    }

    #[Route('/{id}/update', name: 'front_energie_update', methods: ['POST'])]
    public function update(Energie $energie, Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        // ✅ security: modify only own energies
        if (!$energie->getUser() || $energie->getUser()->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        $energie->setTypeEnergie($request->request->get('typeEnergie'));
        $energie->setPeriode((float) $request->request->get('periode'));
        $energie->setValeur((float) $request->request->get('valeur'));
        $energie->setSource($request->request->get('source'));

        $date = $request->request->get('dateEnregistrement');
        if ($date) {
            $energie->setDateEnregistrement(new \DateTime($date));
        }

        $em->flush();

        return $this->redirectToRoute('front_energie_index');
    }

    #[Route('/{id}/delete', name: 'front_energie_delete', methods: ['POST'])]
    public function delete(Energie $energie, Request $request, EntityManagerInterface $em): Response
    {
        $user = $this->getUser();
        if (!$user instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        // ✅ security: delete only own energies
        if (!$energie->getUser() || $energie->getUser()->getId() !== $user->getId()) {
            throw $this->createAccessDeniedException();
        }

        if ($this->isCsrfTokenValid('delete_energie_'.$energie->getId(), $request->request->get('_token'))) {
            $em->remove($energie);
            $em->flush();
        }

        return $this->redirectToRoute('front_energie_index');
    }
}
