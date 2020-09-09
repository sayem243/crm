<?php

namespace App\Repository;

use App\Entity\CrmVisitDetails;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method CrmVisitDetails|null find($id, $lockMode = null, $lockVersion = null)
 * @method CrmVisitDetails|null findOneBy(array $criteria, array $orderBy = null)
 * @method CrmVisitDetails[]    findAll()
 * @method CrmVisitDetails[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CrmVisitDetailsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, CrmVisitDetails::class);
    }

    // /**
    //  * @return CrmVisitDetails[] Returns an array of CrmVisitDetails objects
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
    public function findOneBySomeField($value): ?CrmVisitDetails
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
