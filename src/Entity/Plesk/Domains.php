<?php

namespace App\Entity\Plesk;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domains
 *
 * @ORM\Table(name="domains", uniqueConstraints={@ORM\UniqueConstraint(name="name", columns={"name"})}, indexes={@ORM\Index(name="vendor_id", columns={"vendor_id"}), @ORM\Index(name="limits_id", columns={"limits_id"}), @ORM\Index(name="external_id", columns={"external_id"}), @ORM\Index(name="parentDomainId", columns={"parentDomainId"}), @ORM\Index(name="webspace_id", columns={"webspace_id"}), @ORM\Index(name="dns_zone_id", columns={"dns_zone_id"}), @ORM\Index(name="cert_rep_id", columns={"cert_rep_id"}), @ORM\Index(name="params_id", columns={"params_id"}), @ORM\Index(name="permissions_id", columns={"permissions_id"}), @ORM\Index(name="displayName", columns={"displayName"}), @ORM\Index(name="cl_id", columns={"cl_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Plesk\DomainsRepository")
 */
class Domains
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
     * @var \DateTime|null
     *
     * @ORM\Column(name="cr_date", type="date", nullable=true)
     */
    private $crDate;

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
     * @var int|null
     *
     * @ORM\Column(name="dns_zone_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $dnsZoneId;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $status = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="htype", type="string", length=0, nullable=false, options={"default"="none"})
     */
    private $htype = 'none';

    /**
     * @var int|null
     *
     * @ORM\Column(name="real_size", type="bigint", nullable=true, options={"unsigned"=true})
     */
    private $realSize = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="cl_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $clId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="cert_rep_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $certRepId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="limits_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $limitsId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="params_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $paramsId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="guid", type="string", length=255, nullable=false, options={"default"="00000000-0000-0000-0000-000000000000"})
     */
    private $guid = '00000000-0000-0000-0000-000000000000';

    /**
     * @var string
     *
     * @ORM\Column(name="overuse", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $overuse = 'false';

    /**
     * @var int
     *
     * @ORM\Column(name="vendor_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $vendorId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="webspace_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $webspaceId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="parentDomainId", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $parentdomainid = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="webspace_status", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $webspaceStatus = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="permissions_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $permissionsId = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="external_id", type="string", length=255, nullable=true)
     */
    private $externalId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="adminDescription", type="string", length=255, nullable=true)
     */
    private $admindescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="resellerDescription", type="string", length=255, nullable=true)
     */
    private $resellerdescription;

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="gl_filter", type="string", length=0, nullable=false, options={"default"="on"})
     */
    private $glFilter = 'on';

    /**
     * @var int
     *
     * @ORM\Column(name="icpStatus", type="integer", nullable=false)
     */
    private $icpstatus = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="icpPermit", type="string", length=255, nullable=true)
     */
    private $icppermit;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCrDate(): ?\DateTimeInterface
    {
        return $this->crDate;
    }

    public function setCrDate(?\DateTimeInterface $crDate): self
    {
        $this->crDate = $crDate;

        return $this;
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

    public function getDnsZoneId(): ?int
    {
        return $this->dnsZoneId;
    }

    public function setDnsZoneId(?int $dnsZoneId): self
    {
        $this->dnsZoneId = $dnsZoneId;

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

    public function getHtype(): ?string
    {
        return $this->htype;
    }

    public function setHtype(string $htype): self
    {
        $this->htype = $htype;

        return $this;
    }

    public function getRealSize(): ?string
    {
        return $this->realSize;
    }

    public function setRealSize(?string $realSize): self
    {
        $this->realSize = $realSize;

        return $this;
    }

    public function getClId(): ?int
    {
        return $this->clId;
    }

    public function setClId(int $clId): self
    {
        $this->clId = $clId;

        return $this;
    }

    public function getCertRepId(): ?int
    {
        return $this->certRepId;
    }

    public function setCertRepId(?int $certRepId): self
    {
        $this->certRepId = $certRepId;

        return $this;
    }

    public function getLimitsId(): ?int
    {
        return $this->limitsId;
    }

    public function setLimitsId(int $limitsId): self
    {
        $this->limitsId = $limitsId;

        return $this;
    }

    public function getParamsId(): ?int
    {
        return $this->paramsId;
    }

    public function setParamsId(int $paramsId): self
    {
        $this->paramsId = $paramsId;

        return $this;
    }

    public function getGuid(): ?string
    {
        return $this->guid;
    }

    public function setGuid(string $guid): self
    {
        $this->guid = $guid;

        return $this;
    }

    public function getOveruse(): ?string
    {
        return $this->overuse;
    }

    public function setOveruse(string $overuse): self
    {
        $this->overuse = $overuse;

        return $this;
    }

    public function getVendorId(): ?int
    {
        return $this->vendorId;
    }

    public function setVendorId(int $vendorId): self
    {
        $this->vendorId = $vendorId;

        return $this;
    }

    public function getWebspaceId(): ?int
    {
        return $this->webspaceId;
    }

    public function setWebspaceId(int $webspaceId): self
    {
        $this->webspaceId = $webspaceId;

        return $this;
    }

    public function getParentdomainid(): ?int
    {
        return $this->parentdomainid;
    }

    public function setParentdomainid(int $parentdomainid): self
    {
        $this->parentdomainid = $parentdomainid;

        return $this;
    }

    public function getWebspaceStatus(): ?string
    {
        return $this->webspaceStatus;
    }

    public function setWebspaceStatus(string $webspaceStatus): self
    {
        $this->webspaceStatus = $webspaceStatus;

        return $this;
    }

    public function getPermissionsId(): ?int
    {
        return $this->permissionsId;
    }

    public function setPermissionsId(int $permissionsId): self
    {
        $this->permissionsId = $permissionsId;

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

    public function getAdmindescription(): ?string
    {
        return $this->admindescription;
    }

    public function setAdmindescription(?string $admindescription): self
    {
        $this->admindescription = $admindescription;

        return $this;
    }

    public function getResellerdescription(): ?string
    {
        return $this->resellerdescription;
    }

    public function setResellerdescription(?string $resellerdescription): self
    {
        $this->resellerdescription = $resellerdescription;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getGlFilter(): ?string
    {
        return $this->glFilter;
    }

    public function setGlFilter(string $glFilter): self
    {
        $this->glFilter = $glFilter;

        return $this;
    }

    public function getIcpstatus(): ?int
    {
        return $this->icpstatus;
    }

    public function setIcpstatus(int $icpstatus): self
    {
        $this->icpstatus = $icpstatus;

        return $this;
    }

    public function getIcppermit(): ?string
    {
        return $this->icppermit;
    }

    public function setIcppermit(?string $icppermit): self
    {
        $this->icppermit = $icppermit;

        return $this;
    }


}
