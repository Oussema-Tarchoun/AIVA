<?php

namespace App\Controller;

use App\Entity\Energie;
use App\Entity\Recommandation;
use App\Entity\User;
use App\Service\GroqRecommandationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/energie')]
#[IsGranted('ROLE_ADMIN')]
final class EnergieController extends AbstractController
{
    #[Route('', name: 'energy', methods: ['GET', 'POST'])]
    public function index(Request $request, EntityManagerInterface $em, GroqRecommandationService $ia): Response
    {
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        // Optional: prevent blocked users
        if ($currentUser->isBlocked()) {
            throw $this->createAccessDeniedException('Votre compte est bloqué.');
        }

        $isAdmin = true;
        $addErrors = [];
        $oldAdd = [];
        $editErrors = [];

        // ===== AJOUT =====
        if ($request->isMethod('POST') && $request->request->has('add_energy')) {
            $oldAdd = [
                'type_energie' => $request->request->get('type_energie'),
                'periode' => $request->request->get('periode'),
                'valeur' => $request->request->get('valeur'),
                'date_enregistrement' => $request->request->get('date_enregistrement'),
                'source' => $request->request->get('source'),
                'user' => $request->request->get('user'),
            ];

            $newEnergy = new Energie();

            // Admin selects user
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

            $newEnergy->setTypeEnergie($request->request->get('type_energie'));
            if (!$newEnergy->getTypeEnergie()) {
                $addErrors['type_energie'] = 'Le type est obligatoire';
            }

            $periode = $request->request->get('periode');
            if (isset($periode) && is_numeric($periode) && (float)$periode > 0) {
                $newEnergy->setPeriode((float)$periode);
            } else {
                $addErrors['periode'] = 'La durée doit être un nombre positif';
            }

            $valeur = $request->request->get('valeur');
            if (isset($valeur) && is_numeric($valeur) && (float)$valeur >= 0) {
                $newEnergy->setValeur((float)$valeur);
            } else {
                $addErrors['valeur'] = 'La valeur doit être un nombre valide';
            }

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

            $newEnergy->setSource($request->request->get('source'));
            if (!$newEnergy->getSource()) {
                $addErrors['source'] = 'La source est obligatoire';
            }

            if (empty($addErrors)) {
                // 1) Save Energie
                $em->persist($newEnergy);
                $em->flush();

                // 2) Calcul impact
                $moyenne = $newEnergy->getValeur() / max($newEnergy->getPeriode(), 1);

                if ($moyenne < 10) {
                    $impactLabel = 'Faible';
                    $impactInt = 1;
                } elseif ($moyenne < 30) {
                    $impactLabel = 'Moyen';
                    $impactInt = 2;
                } else {
                    $impactLabel = 'Élevé';
                    $impactInt = 3;
                }

                // 3) IA (Groq) -> description
                $descriptionIA = $ia->generateDescription($newEnergy, $newEnergy->getValeur(), $impactInt);

                // 4) Create recommandation (1 par énergie)
                $rec = new Recommandation();
                $rec->setEnergie($newEnergy);
                $rec->setTitre('Recommandation ' . $newEnergy->getTypeEnergie());
                $rec->setDescription($descriptionIA);
                $rec->setNiveauImpact($impactLabel);
                $rec->setDateGeneration(new \DateTime());

                $em->persist($rec);
                $em->flush();

                $this->addFlash('success', 'Énergie ajoutée + recommandation générée automatiquement ✅');
                return $this->redirectToRoute('energy');
            }

            $this->addFlash('error', "Veuillez corriger les erreurs dans le formulaire d'ajout ⚠️");
        }

        // ===== MODIFICATION =====
        if ($request->isMethod('POST') && $request->request->has('edit_energy')) {
            $id = $request->request->get('id_consommation');
            $energy = $em->getRepository(Energie::class)->find($id);

            if ($energy) {
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

                // Admin can change user
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

                if (empty($errors)) {
                    // 1) Save Energie update
                    $em->flush();

                    // 2) Calcul impact
                    $moyenne = $energy->getValeur() / max($energy->getPeriode(), 1);

                    if ($moyenne < 10) {
                        $impactLabel = 'Faible';
                        $impactInt = 1;
                    } elseif ($moyenne < 30) {
                        $impactLabel = 'Moyen';
                        $impactInt = 2;
                    } else {
                        $impactLabel = 'Élevé';
                        $impactInt = 3;
                    }

                    // 3) IA (Groq) -> description
                    $descriptionIA = $ia->generateDescription($energy, $energy->getValeur(), $impactInt);

                    // 4) Update ou create recommandation
                    $rec = $em->getRepository(Recommandation::class)->findOneBy(['energie' => $energy]);
                    if (!$rec) {
                        $rec = new Recommandation();
                        $rec->setEnergie($energy);
                        $em->persist($rec);
                    }

                    $rec->setTitre('Recommandation ' . $energy->getTypeEnergie());
                    $rec->setDescription($descriptionIA);
                    $rec->setNiveauImpact($impactLabel);
                    $rec->setDateGeneration(new \DateTime());

                    $em->flush();

                    $this->addFlash('success', 'Énergie modifiée + recommandation mise à jour automatiquement ✏️');
                    return $this->redirectToRoute('energy');
                }

                $editErrors[$id] = $errors;
                $this->addFlash('error', "Veuillez corriger les erreurs dans le formulaire #$id ⚠️");
            }
        }

        // ================= RECHERCHE & TRI =================
        $qb = $em->getRepository(Energie::class)->createQueryBuilder('e');

        $search = $request->query->get('search', '');
        if ($search) {
            $qb->andWhere('e.type_energie LIKE :search OR e.source LIKE :search')
                ->setParameter('search', '%' . $search . '%');
        }

        $sort = $request->query->get('sort', 'id');
        $order = strtoupper($request->query->get('order', 'ASC'));
        if (!in_array($order, ['ASC', 'DESC'])) $order = 'ASC';

        $sortMapping = [
            'type_energie' => 'type_energie',
            'periode' => 'periode',
            'valeur' => 'valeur',
            'date_enregistrement' => 'date_enregistrement',
            'source' => 'source',
            'id' => 'id',
        ];
        $sortField = $sortMapping[$sort] ?? 'id';

        $qb->orderBy('e.' . $sortField, $order);

        $energies = $qb->getQuery()->getResult();
        $users = $em->getRepository(User::class)->findAll();

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
        if ($this->isCsrfTokenValid('delete' . $energie->getId(), $request->request->get('_token'))) {
            // optionnel: supprimer la recommandation liée
            $rec = $em->getRepository(Recommandation::class)->findOneBy(['energie' => $energie]);
            if ($rec) {
                $em->remove($rec);
            }

            $em->remove($energie);
            $em->flush();
            $this->addFlash('success', 'Énergie supprimée 🗑️');
        } else {
            $this->addFlash('error', 'Token CSRF invalide');
        }

        return $this->redirectToRoute('energy');
    }
}
