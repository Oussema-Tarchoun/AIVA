<?php

namespace App\Repository;

use App\Entity\Recommandation;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Recommandation>
 */
class RecommandationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Recommandation::class);
    }

    /**
     * Recherche + tri dynamique pour le front.
     *
     * @param User   $user
     * @param string $search  Texte libre (titre, niveauImpact, typeEnergie)
     * @param string $sortBy  Champ de tri : titre | impact | date | type | valeur | moyenne
     * @param string $order   ASC | DESC
     * @return Recommandation[]
     */
    public function searchAndSort(User $user, string $search = '', string $sortBy = 'date', string $order = 'DESC'): array
    {
        // Champs autorisés pour le tri (sécurité anti-injection)
        $allowedSort = [
            'titre'  => 'r.titre',
            'impact' => 'r.niveau_impact',
            'date'   => 'r.date_generation',
            'type'   => 'e.type_energie',
            'valeur' => 'e.valeur',
            'moyenne'=> 'e.valeur', // tri par valeur brute (pas de colonne calculée en SQL)
        ];

        $sortColumn = $allowedSort[$sortBy] ?? 'r.date_generation';
        $orderDir   = strtoupper($order) === 'ASC' ? 'ASC' : 'DESC';

        $qb = $this->createQueryBuilder('r')
            ->join('r.energie', 'e')
            ->andWhere('e.user = :user')
            ->setParameter('user', $user)
            ->orderBy($sortColumn, $orderDir);

        if ($search !== '') {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('LOWER(r.titre)',         ':q'),
                    $qb->expr()->like('LOWER(r.niveau_impact)', ':q'),
                    $qb->expr()->like('LOWER(e.type_energie)',  ':q'),
                    $qb->expr()->like('LOWER(r.description)',   ':q')
                )
            )->setParameter('q', '%' . strtolower($search) . '%');
        }

        return $qb->getQuery()->getResult();
    }
}
