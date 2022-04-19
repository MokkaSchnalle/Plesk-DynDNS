<?php

namespace App\Repository\Plesk;

use App\Entity\Plesk\SysUsers;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method SysUsers|null find($id, $lockMode = null, $lockVersion = null)
 * @method SysUsers|null findOneBy(array $criteria, array $orderBy = null)
 * @method SysUsers[]    findAll()
 * @method SysUsers[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SysUsersRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SysUsers::class);
    }

    // /**
    //  * @return SysUsers[] Returns an array of SysUsers objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?SysUsers
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
