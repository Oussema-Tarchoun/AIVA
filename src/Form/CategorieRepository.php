<?php

namespace App\Repository;

use App\Entity\Categorie;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Categorie>
 */
class CategorieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Categorie::class);
    }

    /**
     * Recherche par mot-clé (nom / description) et tri (+ filtre user optionnel).
     *
     * @return Categorie[]
     */
    public function searchAndSort(
        ?string $search,
        string $sort = 'nom',
        string $direction = 'asc',
        ?User $user = null
    ): array {
        $qb = $this->createQueryBuilder('c');

        // ✅ Filtre user si fourni (donc non-admin)
        if ($user !== null) {
            $qb->andWhere('c.user = :user')
               ->setParameter('user', $user);
        }

        if ($search !== null && trim($search) !== '') {
            $qb->andWhere('c.nom_categorie LIKE :search OR c.description LIKE :search')
               ->setParameter('search', '%' . trim($search) . '%');
        }

        $direction = strtolower($direction) === 'asc' ? 'asc' : 'desc';

        // sécuriser les valeurs de tri
        $allowedSorts = ['nom'];
        if (!in_array($sort, $allowedSorts, true)) {
            $sort = 'nom';
        }

        if ($sort === 'nom') {
            $qb->orderBy('c.nom_categorie', $direction);
        } else {
            $qb->orderBy('c.nom_categorie', 'asc');
        }

        return $qb->getQuery()->getResult();
    }
}
