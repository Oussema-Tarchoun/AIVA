<?php

namespace App\Repository;

use App\Entity\Energie;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Energie>
 */
class EnergieRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Energie::class);
    }

    /**
     * Recherche + tri dynamique pour le front.
     *
     * @param User   $user
     * @param string $search  Texte libre (type, source)
     * @param string $sortBy  Champ de tri : type_energie | periode | valeur | source | date_enregistrement | id
     * @param string $order   ASC | DESC
     * @return Energie[]
     */
    public function searchAndSort(User $user, string $search = '', string $sortBy = 'date_enregistrement', string $order = 'DESC'): array
    {
        // Champs autorisés pour le tri (sécurité anti-injection)
        $allowedSort = [
            'type'    => 'e.type_energie',
            'periode' => 'e.periode',
            'valeur'  => 'e.valeur',
            'source'  => 'e.source',
            'date'    => 'e.date_enregistrement',
            'id'      => 'e.id',
        ];

        $sortColumn = $allowedSort[$sortBy] ?? 'e.date_enregistrement';
        $orderDir   = strtoupper($order) === 'ASC' ? 'ASC' : 'DESC';

        $qb = $this->createQueryBuilder('e')
            ->andWhere('e.user = :user')
            ->setParameter('user', $user)
            ->orderBy($sortColumn, $orderDir);

        if ($search !== '') {
            $qb->andWhere(
                $qb->expr()->orX(
                    $qb->expr()->like('LOWER(e.type_energie)', ':q'),
                    $qb->expr()->like('LOWER(e.source)',       ':q')
                )
            )->setParameter('q', '%' . strtolower($search) . '%');
        }

        return $qb->getQuery()->getResult();
    }
}
