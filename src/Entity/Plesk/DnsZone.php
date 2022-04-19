<?php

namespace App\Entity\Plesk;

use Doctrine\ORM\Mapping as ORM;

/**
 * DnsZone
 *
 * @ORM\Table(name="dns_zone")
 * @ORM\Entity(repositoryClass="App\Repository\Plesk\DnsZoneRepository")
 */
class DnsZone
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="displayName", type="string", length=255, nullable=false)
     */
    private $displayname;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=false, options={"default"="master"})
     */
    private $type = 'master';

    /**
     * @var int
     *
     * @ORM\Column(name="ttl", type="integer", nullable=false, options={"default"="86400","unsigned"=true})
     */
    private $ttl = '86400';

    /**
     * @var int
     *
     * @ORM\Column(name="ttl_unit", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $ttlUnit = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="refresh", type="integer", nullable=false, options={"default"="10800","unsigned"=true})
     */
    private $refresh = '10800';

    /**
     * @var int
     *
     * @ORM\Column(name="refresh_unit", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $refreshUnit = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="retry", type="integer", nullable=false, options={"default"="3600","unsigned"=true})
     */
    private $retry = '3600';

    /**
     * @var int
     *
     * @ORM\Column(name="retry_unit", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $retryUnit = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="expire", type="integer", nullable=false, options={"default"="604800","unsigned"=true})
     */
    private $expire = '604800';

    /**
     * @var int
     *
     * @ORM\Column(name="expire_unit", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $expireUnit = '1';

    /**
     * @var int
     *
     * @ORM\Column(name="minimum", type="integer", nullable=false, options={"default"="10800","unsigned"=true})
     */
    private $minimum = '10800';

    /**
     * @var int
     *
     * @ORM\Column(name="minimum_unit", type="integer", nullable=false, options={"default"="1","unsigned"=true})
     */
    private $minimumUnit = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="serial_format", type="string", length=0, nullable=false, options={"default"="UNIXTIMESTAMP"})
     */
    private $serialFormat = 'UNIXTIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="serial", type="string", length=12, nullable=false)
     */
    private $serial = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="external_id", type="string", length=255, nullable=true)
     */
    private $externalId;

    /**
     * @var string
     *
     * @ORM\Column(name="syncSoa", type="string", length=0, nullable=false, options={"default"="skip"})
     */
    private $syncsoa = 'skip';

    /**
     * @var string
     *
     * @ORM\Column(name="syncRecords", type="string", length=0, nullable=false, options={"default"="skip"})
     */
    private $syncrecords = 'skip';

    /**
     * @var string
     *
     * @ORM\Column(name="rnameType", type="string", length=0, nullable=false, options={"default"="owner"})
     */
    private $rnametype = 'owner';

    /**
     * @var string
     *
     * @ORM\Column(name="mname", type="string", length=255, nullable=false)
     */
    private $mname = '';

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDisplayname(): ?string
    {
        return $this->displayname;
    }

    public function setDisplayname(string $displayname): self
    {
        $this->displayname = $displayname;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTtl(): ?int
    {
        return $this->ttl;
    }

    public function setTtl(int $ttl): self
    {
        $this->ttl = $ttl;

        return $this;
    }

    public function getTtlUnit(): ?int
    {
        return $this->ttlUnit;
    }

    public function setTtlUnit(int $ttlUnit): self
    {
        $this->ttlUnit = $ttlUnit;

        return $this;
    }

    public function getRefresh(): ?int
    {
        return $this->refresh;
    }

    public function setRefresh(int $refresh): self
    {
        $this->refresh = $refresh;

        return $this;
    }

    public function getRefreshUnit(): ?int
    {
        return $this->refreshUnit;
    }

    public function setRefreshUnit(int $refreshUnit): self
    {
        $this->refreshUnit = $refreshUnit;

        return $this;
    }

    public function getRetry(): ?int
    {
        return $this->retry;
    }

    public function setRetry(int $retry): self
    {
        $this->retry = $retry;

        return $this;
    }

    public function getRetryUnit(): ?int
    {
        return $this->retryUnit;
    }

    public function setRetryUnit(int $retryUnit): self
    {
        $this->retryUnit = $retryUnit;

        return $this;
    }

    public function getExpire(): ?int
    {
        return $this->expire;
    }

    public function setExpire(int $expire): self
    {
        $this->expire = $expire;

        return $this;
    }

    public function getExpireUnit(): ?int
    {
        return $this->expireUnit;
    }

    public function setExpireUnit(int $expireUnit): self
    {
        $this->expireUnit = $expireUnit;

        return $this;
    }

    public function getMinimum(): ?int
    {
        return $this->minimum;
    }

    public function setMinimum(int $minimum): self
    {
        $this->minimum = $minimum;

        return $this;
    }

    public function getMinimumUnit(): ?int
    {
        return $this->minimumUnit;
    }

    public function setMinimumUnit(int $minimumUnit): self
    {
        $this->minimumUnit = $minimumUnit;

        return $this;
    }

    public function getSerialFormat(): ?string
    {
        return $this->serialFormat;
    }

    public function setSerialFormat(string $serialFormat): self
    {
        $this->serialFormat = $serialFormat;

        return $this;
    }

    public function getSerial(): ?string
    {
        return $this->serial;
    }

    public function setSerial(string $serial): self
    {
        $this->serial = $serial;

        return $this;
    }

    public function getExternalId(): ?string
    {
        return $this->externalId;
    }

    public function setExternalId(?string $externalId): self
    {
        $this->externalId = $externalId;

        return $this;
    }

    public function getSyncsoa(): ?string
    {
        return $this->syncsoa;
    }

    public function setSyncsoa(string $syncsoa): self
    {
        $this->syncsoa = $syncsoa;

        return $this;
    }

    public function getSyncrecords(): ?string
    {
        return $this->syncrecords;
    }

    public function setSyncrecords(string $syncrecords): self
    {
        $this->syncrecords = $syncrecords;

        return $this;
    }

    public function getRnametype(): ?string
    {
        return $this->rnametype;
    }

    public function setRnametype(string $rnametype): self
    {
        $this->rnametype = $rnametype;

        return $this;
    }

    public function getMname(): ?string
    {
        return $this->mname;
    }

    public function setMname(string $mname): self
    {
        $this->mname = $mname;

        return $this;
    }


}
