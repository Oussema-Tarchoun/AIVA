<?php

namespace App\Repository;

use App\Entity\ActivitePhysique;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ActivitePhysiqueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ActivitePhysique::class);
    }

    public function findAllWithSort(string $sort = 'id', string $dir = 'DESC'): array
    {
        return $this->buildQuery(null, $sort, $dir)->getQuery()->getResult();
    }

    public function searchWithSort(string $term, string $sort = 'id', string $dir = 'DESC'): array
    {
        return $this->buildQuery($term, $sort, $dir)->getQuery()->getResult();
    }

    private function buildQuery(?string $term, string $sort, string $dir)
    {
        $sort = $this->normalizeSortField($sort);
        $dir  = $this->normalizeDir($dir);

        $qb = $this->createQueryBuilder('a')
            ->leftJoin('a.objectif', 'o')
            ->addSelect('o');

        // ✅ Recherche
        if ($term !== null && trim($term) !== '') {
            $t = mb_strtolower(trim($term));

            $qb->andWhere(
                'LOWER(a.type) LIKE :t
                 OR LOWER(a.intensite) LIKE :t
                 OR LOWER(o.description) LIKE :t'
            )
            ->setParameter('t', '%' . $t . '%');

            // ✅ Bonus: si l'utilisateur tape un nombre -> recherche aussi sur duree/calories
            if (ctype_digit($t)) {
                $num = (int) $t;
                $qb->orWhere('a.duree = :n OR a.caloriesBruless = :n')
                   ->setParameter('n', $num);
            }
        }

        // ✅ Tri (objectif nécessite orderBy sur o.description)
        if ($sort === 'objectif') {
            $qb->orderBy('o.description', $dir);
        } else {
            $qb->orderBy('a.' . $sort, $dir);
        }

        return $qb;
    }

    private function normalizeSortField(string $sort): string
    {
        $allowed = [
            'id',
            'type',
            'duree',
            'caloriesBruless',
            'date',
            'intensite',
            'objectif',
        ];

        return in_array($sort, $allowed, true) ? $sort : 'id';
    }

    private function normalizeDir(string $dir): string
    {
        $dir = strtoupper($dir);
        return $dir === 'ASC' ? 'ASC' : 'DESC';
    }
}
