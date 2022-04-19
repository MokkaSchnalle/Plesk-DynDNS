<?php

namespace App\Repository\Plesk;

use App\Entity\Plesk\DnsZone;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DnsZone|null find($id, $lockMode = null, $lockVersion = null)
 * @method DnsZone|null findOneBy(array $criteria, array $orderBy = null)
 * @method DnsZone[]    findAll()
 * @method DnsZone[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DnsZoneRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DnsZone::class);
    }

    // /**
    //  * @return DnsZone[] Returns an array of DnsZone objects
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
    public function findOneBySomeField($value): ?DnsZone
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
