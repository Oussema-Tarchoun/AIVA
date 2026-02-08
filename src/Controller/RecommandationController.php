<?php

namespace App\Controller;

use App\Entity\Recommandation;
use App\Entity\Energie;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/recommandations')]
#[IsGranted('ROLE_ADMIN')] // ✅ ADMIN ONLY + (avec security.yaml) redirect login au lieu 403
class RecommandationController extends AbstractController
{
    #[Route('', name: 'recommendations', methods: ['GET','POST'])]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $addErrors = [];
        $editErrors = [];
        $oldAdd = [];
        $editOld = [];

        // ================= POST =================
        if ($request->isMethod('POST')) {

            // ===== MODIFICATION =====
            if ($request->request->get('edit_recommandation')) {
                $id = $request->request->get('id_recommandation');
                $rec = $em->getRepository(Recommandation::class)->find($id);

                if ($rec) {
                    $titre = trim($request->request->get('titre'));
                    $description = trim($request->request->get('description'));
                    $niveauImpact = trim($request->request->get('niveau_impact'));
                    $dateGeneration = trim($request->request->get('date_generation'));
                    $energieId = $request->request->get('energie');

                    $editOld[$rec->getId()] = [
                        'titre' => $titre,
                        'description' => $description,
                        'niveauImpact' => $niveauImpact,
                        'dateGeneration' => $dateGeneration,
                        'energie' => $energieId,
                    ];

                    // Validation
                    if (!$titre) $editErrors[$rec->getId()]['titre'] = 'Le titre est obligatoire';
                    if (!$description) $editErrors[$rec->getId()]['description'] = 'La description est obligatoire';
                    if (!$energieId) $editErrors[$rec->getId()]['energie'] = 'L\'énergie est obligatoire';

                    if (!$niveauImpact) {
                        $editErrors[$rec->getId()]['niveauImpact'] = 'Le niveau d\'impact est obligatoire';
                    } elseif (!is_numeric($niveauImpact)) {
                        $editErrors[$rec->getId()]['niveauImpact'] = 'Le niveau d\'impact doit être un nombre';
                    }

                    if (!empty($dateGeneration)) {
                        try {
                            $dateObj = new \DateTime($dateGeneration);
                        } catch (\Exception $e) {
                            $editErrors[$rec->getId()]['dateGeneration'] = 'La date doit être valide (AAAA-MM-JJ)';
                        }
                    } else {
                        $editErrors[$rec->getId()]['dateGeneration'] = 'La date est obligatoire';
                    }

                    // ✅ IMPORTANT: vérifier les erreurs du rec courant
                    if (empty($editErrors[$rec->getId()] ?? [])) {
                        $rec->setTitre($titre)
                            ->setDescription($description)
                            ->setNiveauImpact($niveauImpact)
                            ->setDateGeneration($dateObj);

                        $energie = $em->getRepository(Energie::class)->find($energieId);
                        $rec->setEnergie($energie);

                        $em->flush();
                        return $this->redirectToRoute('recommendations');
                    }
                }
            }

            // ===== AJOUT =====
            else {
                $titre = trim($request->request->get('titre'));
                $description = trim($request->request->get('description'));
                $niveauImpact = trim($request->request->get('niveau_impact'));
                $dateGeneration = trim($request->request->get('date_generation'));
                $energieId = $request->request->get('energie');

                $oldAdd = [
                    'titre' => $titre,
                    'description' => $description,
                    'niveauImpact' => $niveauImpact,
                    'dateGeneration' => $dateGeneration,
                    'energie' => $energieId,
                ];

                // Validation
                if (!$titre) $addErrors['titre'] = 'Le titre est obligatoire';
                if (!$description) $addErrors['description'] = 'La description est obligatoire';
                if (!$energieId) $addErrors['energie'] = 'L\'énergie est obligatoire';

                if (!$niveauImpact) {
                    $addErrors['niveauImpact'] = 'Le niveau d\'impact est obligatoire';
                } elseif (!is_numeric($niveauImpact)) {
                    $addErrors['niveauImpact'] = 'Le niveau d\'impact doit être un nombre';
                }

                if (!empty($dateGeneration)) {
                    try {
                        $dateObj = new \DateTime($dateGeneration);
                    } catch (\Exception $e) {
                        $addErrors['dateGeneration'] = 'La date doit être valide (AAAA-MM-JJ)';
                    }
                } else {
                    $addErrors['dateGeneration'] = 'La date est obligatoire';
                }

                if (empty($addErrors)) {
                    $rec = new Recommandation();
                    $rec->setTitre($titre)
                        ->setDescription($description)
                        ->setNiveauImpact($niveauImpact)
                        ->setDateGeneration($dateObj);

                    $energie = $em->getRepository(Energie::class)->find($energieId);
                    $rec->setEnergie($energie);

                    $em->persist($rec);
                    $em->flush();
                    return $this->redirectToRoute('recommendations');
                }
            }
        }

        // ================= GET / Requête principale =================
        $qb = $em->getRepository(Recommandation::class)->createQueryBuilder('r');

        // Recherche par titre
        $search = $request->query->get('search', '');
        if ($search) {
            $qb->andWhere('r.titre LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        // Tri
        $sort = $request->query->get('sort', 'id');
        $order = strtoupper($request->query->get('order', 'ASC'));

        // Mapping URL → champ base de données
        $sortMapping = [
            'titre' => 'titre',
            'niveauImpact' => 'niveau_impact',
            'dateGeneration' => 'date_generation',
        ];

        $sortField = $sortMapping[$sort] ?? 'id';
        if (!in_array($order, ['ASC','DESC'])) $order = 'ASC';

        $qb->orderBy('r.' . $sortField, $order);

        $recommandations = $qb->getQuery()->getResult();
        $energies = $em->getRepository(Energie::class)->findAll();

        return $this->render('back/energie/recommandation.html.twig', [
            'recommandations' => $recommandations,
            'energies' => $energies,
            'addErrors' => $addErrors,
            'editErrors' => $editErrors,
            'oldAdd' => $oldAdd,
            'editOld' => $editOld,
            'search' => $search,
            'sort' => $sort,
            'order' => $order,
        ]);
    }

    #[Route('/delete/{id}', name:'app_recommandation_delete', methods:['POST'])]
    public function delete(Request $request, Recommandation $rec, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$rec->getId(), $request->request->get('_token'))) {
            $em->remove($rec);
            $em->flush();
        }
        return $this->redirectToRoute('recommendations');
    }

    #[Route('/search', name: 'recommandation_search', methods: ['GET'])]
    public function searchAjax(Request $request, EntityManagerInterface $em): Response
    {
        $search = trim($request->query->get('q', ''));

        $qb = $em->getRepository(Recommandation::class)->createQueryBuilder('r');

        if ($search !== '') {
            $qb->where('r.titre LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        $recommandations = $qb
            ->orderBy('r.date_generation', 'DESC')
            ->getQuery()
            ->getResult();

        return $this->render('back/energie/_recommandation_rows.html.twig', [
            'recommandations' => $recommandations
        ]);
    }
}
