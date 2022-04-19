<?php

namespace App\Entity\Plesk;

use Doctrine\ORM\Mapping as ORM;

/**
 * DnsRefs
 *
 * @ORM\Table(name="dns_refs", indexes={@ORM\Index(name="zoneRecordId", columns={"zoneRecordId"}), @ORM\Index(name="templateRecordId", columns={"templateRecordId"}), @ORM\Index(name="zoneId", columns={"zoneId"})})
 * @ORM\Entity(repositoryClass="App\Repository\Plesk\DnsRefsRepository")
 */
class DnsRefs
{
    /**
     * @var string
     *
     * @ORM\Column(name="uid", type="string", length=255, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $uid;

    /**
     * @var int
     *
     * @ORM\Column(name="zoneId", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $zoneid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="zoneRecordId", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $zonerecordid;

    /**
     * @var int|null
     *
     * @ORM\Column(name="templateRecordId", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $templaterecordid;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=0, nullable=false, options={"default"="syn"})
     */
    private $status = 'syn';

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function getZoneid(): ?int
    {
        return $this->zoneid;
    }

    public function setZoneid(int $zoneid): self
    {
        $this->zoneid = $zoneid;

        return $this;
    }

    public function getZonerecordid(): ?int
    {
        return $this->zonerecordid;
    }

    public function setZonerecordid(?int $zonerecordid): self
    {
        $this->zonerecordid = $zonerecordid;

        return $this;
    }

    public function getTemplaterecordid(): ?int
    {
        return $this->templaterecordid;
    }

    public function setTemplaterecordid(?int $templaterecordid): self
    {
        $this->templaterecordid = $templaterecordid;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }


}
