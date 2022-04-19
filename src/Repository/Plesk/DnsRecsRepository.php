<?php

namespace App\Repository\Plesk;

use App\Entity\Plesk\Clients;
use App\Entity\Plesk\DnsRecs;
use App\Entity\Plesk\Hosting;
use App\Entity\Plesk\Domains;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\Security\Core\Security;

/**
 * @method DnsRecs|null find($id, $lockMode = null, $lockVersion = null)
 * @method DnsRecs|null findOneBy(array $criteria, array $orderBy = null)
 * @method DnsRecs[]    findAll()
 * @method DnsRecs[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DnsRecsRepository extends ServiceEntityRepository
{
    /**
     * @var Security
     */
    private $security;

    /**
     * @var string
     */
    private $currentUsername;

    /**
     * DnsRecsRepository constructor.
     * @param ManagerRegistry $registry
     * @param Security $security
     */
    public function __construct(ManagerRegistry $registry, Security $security)
    {
        parent::__construct($registry, DnsRecs::class);
        $this->security = $security;
        $this->currentUsername = $security->getUser()->getUsername();
    }

    /**
     * @param $username string
     *
     * @return DnsRecs[] Returns an array of Record objects
     */
    public function getAllDnsRecordsByUser($username)
    {
        return $this->createQueryBuilder('r')
            ->leftJoin(Domains::class, 'd', 'WITH', 'd.dnsZoneId = r.dnsZoneId')
            ->leftJoin(Clients::class, 'c', 'WITH', 'c.id = d.clId')
            ->andWhere('c.login = :val')
            ->setParameter('val', $username)
            ->getQuery()
            ->getResult()
            ;
    }

    /**
     * @return DnsRecs[] Returns an array of Record objects
     */
    public function getAllDnsRecordsByCurrentUser()
    {
        return $this->getAllDnsRecordsByUser($this->currentUsername);
    }

    /**
     * @param $value
     * @param $username
     *
     * @return DnsRecs Returns an Record object
     *
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getDnsRecord($value, $username)
    {
        return $this->createQueryBuilder('r')
            ->leftJoin(Domains::class, 'd', 'WITH', 'd.dnsZoneId = r.dnsZoneId')
            ->leftJoin(Clients::class, 'c', 'WITH', 'c.id = d.clId')
            ->where('r.displayhost = :value')
            ->orWhere('r.id = :value')
            ->setParameter('value', $value)
            ->andWhere('c.login = :user')
            ->setParameter('user', $username)
            ->getQuery()
            ->getSingleResult()
            ;
    }

    /**
     * @param $value
     *
     * @return DnsRecs Returns an Record object
     *
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function getDnsRecordByCurrentUser($value)
    {
        return $this->getDnsRecord($value, $this->currentUsername);
    }

    /**
     * @param $id string
     *
     * @return DnsRecs[] Returns an array of Record objects
     */
    public function getDnsRecordById($id)
    {
        return $this->createQueryBuilder('r')
            ->leftJoin(Domains::class, 'd', 'WITH', 'd.dnsZoneId = r.dnsZoneId')
            ->leftJoin(Hosting::class, 'h', 'WITH', 'h.domId = d.id')
            ->andWhere('r.id = :val')
            ->setParameter('val', $id)
            ->getQuery()
            ->getResult()
            ;
    }

    public function save(DnsRecs $record): void
    {
        try {
            $this->_em->persist($record);
            $this->_em->flush();
        } catch (ORMException $e) {

        }
    }

    public function delete(DnsRecs $record): void
    {
        $this->_em->remove($record);
    }
}
