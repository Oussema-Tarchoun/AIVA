<?php

namespace App\Controller;

use App\Entity\Energie;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/energie')]
final class EnergieController extends AbstractController
{
    #[Route('', name: 'energy', methods: ['GET', 'POST'])]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        // Optional: prevent blocked users
        if ($currentUser->isBlocked()) {
            throw $this->createAccessDeniedException('Votre compte est bloqué.');
        }

        $isAdmin = $this->isGranted('ROLE_ADMIN');

        $addErrors = [];
        $oldAdd = [];
        $editErrors = [];

        // ===== AJOUT =====
        if ($request->isMethod('POST') && $request->request->has('add_energy')) {
            // ✅ MODIF: read fields using $request->request->get() (cleaner & safer)
            $oldAdd = [
                'type_energie' => $request->request->get('type_energie'),
                'periode' => $request->request->get('periode'),
                'valeur' => $request->request->get('valeur'),
                'date_enregistrement' => $request->request->get('date_enregistrement'),
                'source' => $request->request->get('source'),
                'user' => $request->request->get('user'),
            ];

            $newEnergy = new Energie();

            // ✅ Admin can select user from form, user cannot
            if ($isAdmin) {
                $userId = $request->request->get('user');
                if ($userId) {
                    $selectedUser = $em->getRepository(User::class)->find($userId);
                    if ($selectedUser) {
                        $newEnergy->setUser($selectedUser);
                    } else {
                        $addErrors['user'] = 'Utilisateur invalide';
                    }
                } else {
                    $addErrors['user'] = 'Veuillez sélectionner un utilisateur';
                }
            } else {
                $newEnergy->setUser($currentUser);
            }

            // Type d'énergie
            $newEnergy->setTypeEnergie($request->request->get('type_energie'));
            if (!$newEnergy->getTypeEnergie()) {
                $addErrors['type_energie'] = 'Le type est obligatoire';
            }

            // Durée
            $periode = $request->request->get('periode');
            if (isset($periode) && is_numeric($periode) && (float)$periode > 0) {
                $newEnergy->setPeriode((float)$periode);
            } else {
                $addErrors['periode'] = 'La durée doit être un nombre positif';
            }

            // Valeur
            $valeur = $request->request->get('valeur');
            if (isset($valeur) && is_numeric($valeur) && (float)$valeur >= 0) {
                $newEnergy->setValeur((float)$valeur);
            } else {
                $addErrors['valeur'] = 'La valeur doit être un nombre valide';
            }

            // Date
            $dateEnregistrement = $request->request->get('date_enregistrement');
            if (!empty($dateEnregistrement)) {
                try {
                    $newEnergy->setDateEnregistrement(new \DateTime($dateEnregistrement));
                } catch (\Exception $e) {
                    $addErrors['date_enregistrement'] = 'La date doit être valide';
                }
            } else {
                $addErrors['date_enregistrement'] = 'La date est obligatoire';
            }

            // Source
            $newEnergy->setSource($request->request->get('source'));
            if (!$newEnergy->getSource()) {
                $addErrors['source'] = 'La source est obligatoire';
            }

            if (empty($addErrors)) {
                $em->persist($newEnergy);
                $em->flush();

                $this->addFlash('success', 'Énergie ajoutée avec succès ✅');
                return $this->redirectToRoute('energy');
            }

            $this->addFlash('error', 'Veuillez corriger les erreurs dans le formulaire d\'ajout ⚠️');
        }

        // ===== MODIFICATION =====
        if ($request->isMethod('POST') && $request->request->has('edit_energy')) {
            $id = $request->request->get('id_consommation');
            $energy = $em->getRepository(Energie::class)->find($id);

            if ($energy) {
                // ✅ User can edit only his, admin can edit all
                if (!$isAdmin && $energy->getUser()?->getId() !== $currentUser->getId()) {
                    throw $this->createAccessDeniedException("Vous ne pouvez pas modifier cette consommation.");
                }

                $errors = [];

                $energy->setTypeEnergie($request->request->get('type_energie'));
                if (!$energy->getTypeEnergie()) $errors['type_energie'] = 'Le type est obligatoire';

                $periode = $request->request->get('periode');
                if (isset($periode) && is_numeric($periode) && (float)$periode > 0) {
                    $energy->setPeriode((float)$periode);
                } else {
                    $errors['periode'] = 'La durée doit être un nombre positif';
                }

                $valeur = $request->request->get('valeur');
                if (isset($valeur) && is_numeric($valeur) && (float)$valeur >= 0) {
                    $energy->setValeur((float)$valeur);
                } else {
                    $errors['valeur'] = 'La valeur doit être un nombre valide';
                }

                $date = $request->request->get('date_enregistrement');
                if (!empty($date)) {
                    try {
                        $energy->setDateEnregistrement(new \DateTime($date));
                    } catch (\Exception $e) {
                        $errors['date_enregistrement'] = 'La date doit être valide';
                    }
                } else {
                    $errors['date_enregistrement'] = 'La date est obligatoire';
                }

                $energy->setSource($request->request->get('source'));
                if (!$energy->getSource()) $errors['source'] = 'La source est obligatoire';

                // ✅ Admin can change user
                if ($isAdmin) {
                    $userId = $request->request->get('user');
                    if ($userId) {
                        $selectedUser = $em->getRepository(User::class)->find($userId);
                        if ($selectedUser) {
                            $energy->setUser($selectedUser);
                        } else {
                            $errors['user'] = 'Utilisateur invalide';
                        }
                    } else {
                        $errors['user'] = 'Veuillez sélectionner un utilisateur';
                    }
                }

                if (empty($errors)) {
                    $em->flush();
                    $this->addFlash('success', 'Énergie modifiée avec succès ✏️');
                    return $this->redirectToRoute('energy');
                }

                $editErrors[$id] = $errors;
                $this->addFlash('error', "Veuillez corriger les erreurs dans le formulaire #$id ⚠️");
            }
        }

        // ================= RECHERCHE & TRI =================
        $qb = $em->getRepository(Energie::class)->createQueryBuilder('e');

        // ✅ MODIF: afficher TOUTES les énergies quel que soit le rôle (pas de filtre user)

        $search = $request->query->get('search', '');
        if ($search) {
            $qb->andWhere('e.typeEnergie LIKE :search OR e.source LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        $sort = $request->query->get('sort', 'id');
        $order = strtoupper($request->query->get('order', 'ASC'));
        if (!in_array($order, ['ASC', 'DESC'])) $order = 'ASC';

        $sortMapping = [
            'typeEnergie' => 'typeEnergie',
            'periode' => 'periode',
            'valeur' => 'valeur',
            'dateEnregistrement' => 'dateEnregistrement',
            'source' => 'source',
            'id' => 'id',
        ];
        $sortField = $sortMapping[$sort] ?? 'id';

        $qb->orderBy('e.' . $sortField, $order);

        $energies = $qb->getQuery()->getResult();

        // Needed for admin dropdown in twig (add/edit)
        $users = $isAdmin ? $em->getRepository(User::class)->findAll() : [];

        return $this->render('back/energie/energy.html.twig', [
            'energies' => $energies,
            'users' => $users,
            'isAdmin' => $isAdmin,

            'addErrors' => $addErrors,
            'oldAdd' => $oldAdd,
            'editErrors' => $editErrors,
            'search' => $search,
            'sort' => $sort,
            'order' => $order,
        ]);
    }

    #[Route('/energy/delete/{id}', name: 'energy_delete', methods: ['POST'])]
    public function delete(Request $request, Energie $energie, EntityManagerInterface $em): Response
    {
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        $isAdmin = $this->isGranted('ROLE_ADMIN');

        // ✅ User can delete only his, admin can delete all
        if (!$isAdmin && $energie->getUser()?->getId() !== $currentUser->getId()) {
            throw $this->createAccessDeniedException("Vous ne pouvez pas supprimer cette consommation.");
        }

        if ($this->isCsrfTokenValid('delete' . $energie->getId(), $request->request->get('_token'))) {
            $em->remove($energie);
            $em->flush();
            $this->addFlash('success', 'Énergie supprimée 🗑️');
        } else {
            $this->addFlash('error', 'Token CSRF invalide');
        }

        return $this->redirectToRoute('energy');
    }
}
