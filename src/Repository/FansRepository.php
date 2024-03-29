<?php

namespace App\Repository;

use App\Entity\Fans;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Fans|null find($id, $lockMode = null, $lockVersion = null)
 * @method Fans|null findOneBy(array $criteria, array $orderBy = null)
 * @method Fans[]    findAll()
 * @method Fans[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class FansRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Fans::class);
    }

    // /**
    //  * @return Fans[] Returns an array of Fans objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('f.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Fans
    {
        return $this->createQueryBuilder('f')
            ->andWhere('f.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
