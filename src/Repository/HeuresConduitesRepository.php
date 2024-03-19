<?php

namespace App\Repository;

use App\Entity\HeuresConduites;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<HeuresConduites>
 *
 * @method HeuresConduites|null find($id, $lockMode = null, $lockVersion = null)
 * @method HeuresConduites|null findOneBy(array $criteria, array $orderBy = null)
 * @method HeuresConduites[]    findAll()
 * @method HeuresConduites[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class HeuresConduitesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, HeuresConduites::class);
    }

    //    /**
    //     * @return HeuresConduites[] Returns an array of HeuresConduites objects
    //     */
    //    public function findByExampleField($value): array
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->orderBy('h.id', 'ASC')
    //            ->setMaxResults(10)
    //            ->getQuery()
    //            ->getResult()
    //        ;
    //    }

    //    public function findOneBySomeField($value): ?HeuresConduites
    //    {
    //        return $this->createQueryBuilder('h')
    //            ->andWhere('h.exampleField = :val')
    //            ->setParameter('val', $value)
    //            ->getQuery()
    //            ->getOneOrNullResult()
    //        ;
    //    }
}
