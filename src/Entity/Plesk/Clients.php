<?php

namespace App\Entity\Plesk;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clients
 *
 * @ORM\Table(name="clients", uniqueConstraints={@ORM\UniqueConstraint(name="login", columns={"login"})}, indexes={@ORM\Index(name="vendor_id", columns={"vendor_id"}), @ORM\Index(name="logo_id", columns={"logo_id"}), @ORM\Index(name="pname", columns={"pname"}), @ORM\Index(name="type", columns={"type"}), @ORM\Index(name="sapp_pool_id", columns={"sapp_pool_id"}), @ORM\Index(name="limits_id", columns={"limits_id"}), @ORM\Index(name="pool_id", columns={"pool_id"}), @ORM\Index(name="parent_id", columns={"parent_id"}), @ORM\Index(name="params_id", columns={"params_id"}), @ORM\Index(name="perm_id", columns={"perm_id"}), @ORM\Index(name="account_id", columns={"account_id"}), @ORM\Index(name="tmpl_id", columns={"tmpl_id"})})
 * @ORM\Entity(repositoryClass="App\Repository\Plesk\ClientsRepository")
 */
class Clients
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
     * @var string|null
     *
     * @ORM\Column(name="cname", type="string", length=255, nullable=true)
     */
    private $cname;

    /**
     * @var string
     *
     * @ORM\Column(name="pname", type="string", length=255, nullable=false)
     */
    private $pname;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=255, nullable=false)
     */
    private $login;

    /**
     * @var int
     *
     * @ORM\Column(name="account_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $accountId;

    /**
     * @var int
     *
     * @ORM\Column(name="status", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $status = '0';

    /**
     * @var string|null
     *
     * @ORM\Column(name="phone", type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @var string|null
     *
     * @ORM\Column(name="fax", type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @var string|null
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string|null
     *
     * @ORM\Column(name="address", type="string", length=255, nullable=true)
     */
    private $address;

    /**
     * @var string|null
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=255, nullable=true)
     */
    private $state;

    /**
     * @var string|null
     *
     * @ORM\Column(name="pcode", type="string", length=10, nullable=true)
     */
    private $pcode;

    /**
     * @var string|null
     *
     * @ORM\Column(name="country", type="string", length=2, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string", length=17, nullable=false, options={"default"="en-US"})
     */
    private $locale = 'en-US';

    /**
     * @var string|null
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @var int|null
     *
     * @ORM\Column(name="limits_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $limitsId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="params_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $paramsId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="perm_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $permId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="pool_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $poolId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="logo_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $logoId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="tmpl_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $tmplId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sapp_pool_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $sappPoolId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ownership", type="string", length=0, nullable=false, options={"default"="true"})
     */
    private $ownership = 'true';

    /**
     * @var string
     *
     * @ORM\Column(name="guid", type="string", length=36, nullable=false, options={"default"="00000000-0000-0000-0000-000000000000"})
     */
    private $guid = '00000000-0000-0000-0000-000000000000';

    /**
     * @var int
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $parentId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=false, options={"default"="client"})
     */
    private $type = 'client';

    /**
     * @var string
     *
     * @ORM\Column(name="overuse", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $overuse = 'false';

    /**
     * @var int|null
     *
     * @ORM\Column(name="vendor_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $vendorId;

    /**
     * @var string|null
     *
     * @ORM\Column(name="external_id", type="string", length=255, nullable=true)
     */
    private $externalId;

    /**
     * @var string
     *
     * @ORM\Column(name="passwd", type="string", length=20, nullable=false)
     */
    private $passwd;

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

    public function getCname(): ?string
    {
        return $this->cname;
    }

    public function setCname(?string $cname): self
    {
        $this->cname = $cname;

        return $this;
    }

    public function getPname(): ?string
    {
        return $this->pname;
    }

    public function setPname(string $pname): self
    {
        $this->pname = $pname;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getAccountId(): ?int
    {
        return $this->accountId;
    }

    public function setAccountId(int $accountId): self
    {
        $this->accountId = $accountId;

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

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

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

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getState(): ?string
    {
        return $this->state;
    }

    public function setState(?string $state): self
    {
        $this->state = $state;

        return $this;
    }

    public function getPcode(): ?string
    {
        return $this->pcode;
    }

    public function setPcode(?string $pcode): self
    {
        $this->pcode = $pcode;

        return $this;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): self
    {
        $this->country = $country;

        return $this;
    }

    public function getLocale(): ?string
    {
        return $this->locale;
    }

    public function setLocale(string $locale): self
    {
        $this->locale = $locale;

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

    public function getLimitsId(): ?int
    {
        return $this->limitsId;
    }

    public function setLimitsId(?int $limitsId): self
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

    public function getPermId(): ?int
    {
        return $this->permId;
    }

    public function setPermId(int $permId): self
    {
        $this->permId = $permId;

        return $this;
    }

    public function getPoolId(): ?int
    {
        return $this->poolId;
    }

    public function setPoolId(int $poolId): self
    {
        $this->poolId = $poolId;

        return $this;
    }

    public function getLogoId(): ?int
    {
        return $this->logoId;
    }

    public function setLogoId(int $logoId): self
    {
        $this->logoId = $logoId;

        return $this;
    }

    public function getTmplId(): ?int
    {
        return $this->tmplId;
    }

    public function setTmplId(int $tmplId): self
    {
        $this->tmplId = $tmplId;

        return $this;
    }

    public function getSappPoolId(): ?int
    {
        return $this->sappPoolId;
    }

    public function setSappPoolId(int $sappPoolId): self
    {
        $this->sappPoolId = $sappPoolId;

        return $this;
    }

    public function getOwnership(): ?string
    {
        return $this->ownership;
    }

    public function setOwnership(string $ownership): self
    {
        $this->ownership = $ownership;

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

    public function getParentId(): ?int
    {
        return $this->parentId;
    }

    public function setParentId(int $parentId): self
    {
        $this->parentId = $parentId;

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

    public function setVendorId(?int $vendorId): self
    {
        $this->vendorId = $vendorId;

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

    public function getPasswd(): ?string
    {
        return $this->passwd;
    }

    public function setPasswd(string $passwd): self
    {
        $this->passwd = $passwd;

        return $this;
    }


}
