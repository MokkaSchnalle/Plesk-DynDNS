<?php

namespace App\Repository\Plesk;

use App\Entity\Plesk\DnsRecsT;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method DnsRecsT|null find($id, $lockMode = null, $lockVersion = null)
 * @method DnsRecsT|null findOneBy(array $criteria, array $orderBy = null)
 * @method DnsRecsT[]    findAll()
 * @method DnsRecsT[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DnsRecsTRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DnsRecsT::class);
    }

    // /**
    //  * @return DnsRecsT[] Returns an array of DnsRecsT objects
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
    public function findOneBySomeField($value): ?DnsRecsT
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
