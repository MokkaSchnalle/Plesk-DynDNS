<?php

namespace App\Repository\Plesk;

use App\Entity\Plesk\DnsRefs;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DnsRefs|null find($id, $lockMode = null, $lockVersion = null)
 * @method DnsRefs|null findOneBy(array $criteria, array $orderBy = null)
 * @method DnsRefs[]    findAll()
 * @method DnsRefs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DnsRefsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DnsRefs::class);
    }

    // /**
    //  * @return DnsRefs[] Returns an array of DnsRefs objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('d.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?DnsRefs
    {
        return $this->createQueryBuilder('d')
            ->andWhere('d.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
