<?php

namespace App\Repository;

use App\Entity\Chapitre;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Chapitre>
 *
 * @method Chapitre|null find($id, $lockMode = null, $lockVersion = null)
 * @method Chapitre|null findOneBy(array $criteria, array $orderBy = null)
 * @method Chapitre[]    findAll()
 * @method Chapitre[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ChapitreRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Chapitre::class);
    }

    /**
     * Recherche de chapitres par titre (LIKE) et tri par ordre (ASC/DESC).
     */
    public function findByTitreSearchAndOrdreSort(?string $search, ?string $direction): array
    {
        $qb = $this->createQueryBuilder('ch');

        if ($search !== null && $search !== '') {
            $qb->andWhere('ch.titre LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        $dir = strtoupper($direction ?? 'ASC');
        if (!\in_array($dir, ['ASC', 'DESC'], true)) {
            $dir = 'ASC';
        }

        $qb->orderBy('ch.ordre', $dir);

        return $qb->getQuery()->getResult();
    }
}
