<?php

namespace App\Repository;

use App\Entity\BiensImmobilier;
use App\Repository\BiensImmobilierRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * @method BiensImmobilier|null find($id, $lockMode = null, $lockVersion = null)
 * @method BiensImmobilier|null findOneBy(array $criteria, array $orderBy = null)
 * @method BiensImmobilier[]    findAll()
 * @method BiensImmobilier[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class BiensImmobilierRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, BiensImmobilier::class);
    }


    public function getImmoByMaxPrix($valMax)
    {
        return $this->createQueryBuilder('i')  
            ->andWhere('i.prix < :valmax')        
            ->setParameter('valmax', $valMax)
            ->orderBy('i.prix')
            ->getQuery()
            ->getResult()
        ;
    }

    // /**
    //  * @return BiensImmobilier[] Returns an array of BiensImmobilier objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?BiensImmobilier
    {
        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
