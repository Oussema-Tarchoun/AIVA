<?php

namespace App\Repository;

use App\Entity\Cours;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Cours>
 *
 * @method Cours|null find($id, $lockMode = null, $lockVersion = null)
 * @method Cours|null findOneBy(array $criteria, array $orderBy = null)
 * @method Cours[]    findAll()
 * @method Cours[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CoursRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Cours::class);
    }

    /**
     * Recherche de cours par catégorie (LIKE) et tri par date_creation (ASC/DESC).
     */
    public function findByCategorieSearchAndDateSort(?string $search, ?string $direction): array
    {
        $qb = $this->createQueryBuilder('c');

        if ($search !== null && $search !== '') {
            $qb->andWhere('c.categorie LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        // direction par défaut DESC (du plus récent au plus ancien)
        $dir = strtoupper($direction ?? 'DESC');
        if (!\in_array($dir, ['ASC', 'DESC'], true)) {
            $dir = 'DESC';
        }

        $qb->orderBy('c.date_creation', $dir);

        return $qb->getQuery()->getResult();
    }
}
