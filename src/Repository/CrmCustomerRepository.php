<?php

namespace App\Repository;

use App\Entity\CrmCustomer;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CrmCustomer|null find($id, $lockMode = null, $lockVersion = null)
 * @method CrmCustomer|null findOneBy(array $criteria, array $orderBy = null)
 * @method CrmCustomer[]    findAll()
 * @method CrmCustomer[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CrmCustomerRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CrmCustomer::class);
    }

    // /**
    //  * @return CrmCustomer[] Returns an array of CrmCustomer objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?CrmCustomer
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
