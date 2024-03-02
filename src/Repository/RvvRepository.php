<?php

namespace App\Repository;

use App\Entity\Rvv;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Rvv>
 *
 * @method Rvv|null find($id, $lockMode = null, $lockVersion = null)
 * @method Rvv|null findOneBy(array $criteria, array $orderBy = null)
 * @method Rvv[]    findAll()
 * @method Rvv[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RvvRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rvv::class);
    }

//    /**
//     * @return Rvv[] Returns an array of Rvv objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Rvv
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
