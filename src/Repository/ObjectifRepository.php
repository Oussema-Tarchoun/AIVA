<?php

namespace App\Repository;

use App\Entity\Objectif;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ObjectifRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Objectif::class);
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

        $qb = $this->createQueryBuilder('o')
            ->leftJoin('o.user', 'u')
            ->addSelect('u');

        // ✅ Recherche (description/type/statut/user)
        if ($term !== null && trim($term) !== '') {
            $t = '%'.mb_strtolower(trim($term)).'%';

            $qb->andWhere(
                'LOWER(o.description) LIKE :t
                 OR LOWER(o.type) LIKE :t
                 OR LOWER(o.statut) LIKE :t
                 OR LOWER(u.name) LIKE :t'
            )
            ->setParameter('t', $t);
        }

        // ✅ Tri (user nécessite orderBy sur u.name)
        if ($sort === 'user') {
            $qb->orderBy('u.name', $dir);
        } else {
            $qb->orderBy('o.' . $sort, $dir);
        }

        return $qb;
    }

    private function normalizeSortField(string $sort): string
    {
        // ✅ Champs triables autorisés
        $allowed = [
            'id',
            'description',
            'dateDebut',
            'dateFin',
            'valeurCible',
            'type',
            'statut',
            'user',
        ];

        return in_array($sort, $allowed, true) ? $sort : 'id';
    }

    private function normalizeDir(string $dir): string
    {
        $dir = strtoupper($dir);
        return $dir === 'ASC' ? 'ASC' : 'DESC';
    }
}
