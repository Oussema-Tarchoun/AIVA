<?php

namespace App\Repository;

use App\Entity\Depense;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Depense>
 */
class DepenseRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Depense::class);
    }

    /**
     * Dépenses dont la catégorie appartient au user (pas de colonne id_user sur depense).
     *
     * @return Depense[]
     */
    public function findByUser(User $user): array
    {
        return $this->createQueryBuilder('d')
            ->join('d.categorie', 'c')
            ->andWhere('c.user = :user')
            ->setParameter('user', $user)
            ->orderBy('d.date_depense', 'DESC')
            ->getQuery()
            ->getResult();
    }

    /**
     * Recherche par montant + tri (date/montant)
     * - Si $user = null => admin (toutes les dépenses)
     * - Si $user != null => seulement dépenses de ses catégories
     *
     * @return Depense[]
     */
    public function searchByFiltersAndSort(
        ?float $min,
        ?float $max,
        string $sort,
        string $direction,
        ?User $user = null
    ): array {
        $qb = $this->createQueryBuilder('d');

        // ✅ filtre user via categorie.user
        if ($user !== null) {
            $qb->join('d.categorie', 'c')
               ->andWhere('c.user = :user')
               ->setParameter('user', $user);
        }

        if ($min !== null) {
            $qb->andWhere('d.montant >= :min')->setParameter('min', $min);
        }

        if ($max !== null) {
            $qb->andWhere('d.montant <= :max')->setParameter('max', $max);
        }

        // sécuriser tri
        $allowedSorts = ['date', 'montant'];
        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'date';
        }

        $direction = strtolower($direction) === 'asc' ? 'asc' : 'desc';

        $qb->orderBy(
            $sort === 'montant' ? 'd.montant' : 'd.date_depense',
            $direction
        );

        return $qb->getQuery()->getResult();
    }
}
