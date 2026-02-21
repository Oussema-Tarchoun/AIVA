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
     * Total des dépenses groupé par catégorie.
     * @return array<array{nom: string, total: float}>
     */
    public function totalParCategorie(User $user): array
    {
        return $this->createQueryBuilder('d')
            ->select('c.nom_categorie AS nom, SUM(d.montant) AS total')
            ->join('d.categorie', 'c')
            ->where('c.user = :user')
            ->setParameter('user', $user)
            ->groupBy('c.id_categorie')
            ->getQuery()
            ->getResult();
    }

    /**
     * Total des dépenses par mois (12 derniers mois).
     * @return array<array{mois: string, total: float}>
     */
    public function totalParMois(User $user): array
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT DATE_FORMAT(d.date_depense, '%Y-%m') AS mois, SUM(d.montant) AS total
                FROM depense d
                JOIN categorie c ON d.id_categorie = c.id_categorie
                WHERE c.id_user = :userId
                  AND d.date_depense >= DATE_SUB(CURDATE(), INTERVAL 12 MONTH)
                GROUP BY mois
                ORDER BY mois ASC";
        return $conn->executeQuery($sql, ['userId' => $user->getId()])->fetchAllAssociative();
    }

    /**
     * Moyenne des dépenses par catégorie.
     * @return array<array{nom: string, moyenne: float}>
     */
    public function moyenneParCategorie(User $user): array
    {
        return $this->createQueryBuilder('d')
            ->select('c.nom_categorie AS nom, AVG(d.montant) AS moyenne')
            ->join('d.categorie', 'c')
            ->where('c.user = :user')
            ->setParameter('user', $user)
            ->groupBy('c.id_categorie')
            ->getQuery()
            ->getResult();
    }

    /**
     * Total d'un mois donné (format 'YYYY-MM').
     */
    public function totalParMoisPourMois(User $user, string $yearMonth): float
    {
        $conn = $this->getEntityManager()->getConnection();
        $sql = "SELECT COALESCE(SUM(d.montant), 0) AS total
                FROM depense d
                JOIN categorie c ON d.id_categorie = c.id_categorie
                WHERE c.id_user = :userId
                  AND DATE_FORMAT(d.date_depense, '%Y-%m') = :ym";
        $result = $conn->executeQuery($sql, ['userId' => $user->getId(), 'ym' => $yearMonth])->fetchOne();
        return (float) $result;
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
