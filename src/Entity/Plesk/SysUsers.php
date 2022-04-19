<?php

namespace App\Entity\Plesk;

use Doctrine\ORM\Mapping as ORM;

/**
 * SysUsers
 *
 * @ORM\Table(name="sys_users", uniqueConstraints={@ORM\UniqueConstraint(name="login", columns={"serviceNodeId", "login"})}, indexes={@ORM\Index(name="account_id", columns={"account_id"}), @ORM\Index(name="mapped_to", columns={"mapped_to"})})
 * @ORM\Entity(repositoryClass="App\Repository\Plesk\SysUsersRepository")
 */
class SysUsers
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
     * @var int
     *
     * @ORM\Column(name="serviceNodeId", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $servicenodeid = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=32, nullable=false)
     */
    private $login;

    /**
     * @var int
     *
     * @ORM\Column(name="account_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $accountId = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="home", type="string", length=255, nullable=false)
     */
    private $home;

    /**
     * @var string
     *
     * @ORM\Column(name="shell", type="string", length=255, nullable=false)
     */
    private $shell;

    /**
     * @var int
     *
     * @ORM\Column(name="quota", type="bigint", nullable=false, options={"unsigned"=true})
     */
    private $quota = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="mapped_to", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $mappedTo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServicenodeid(): ?int
    {
        return $this->servicenodeid;
    }

    public function setServicenodeid(int $servicenodeid): self
    {
        $this->servicenodeid = $servicenodeid;

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

    public function getHome(): ?string
    {
        return $this->home;
    }

    public function setHome(string $home): self
    {
        $this->home = $home;

        return $this;
    }

    public function getShell(): ?string
    {
        return $this->shell;
    }

    public function setShell(string $shell): self
    {
        $this->shell = $shell;

        return $this;
    }

    public function getQuota(): ?string
    {
        return $this->quota;
    }

    public function setQuota(string $quota): self
    {
        $this->quota = $quota;

        return $this;
    }

    public function getMappedTo(): ?int
    {
        return $this->mappedTo;
    }

    public function setMappedTo(?int $mappedTo): self
    {
        $this->mappedTo = $mappedTo;

        return $this;
    }


}
