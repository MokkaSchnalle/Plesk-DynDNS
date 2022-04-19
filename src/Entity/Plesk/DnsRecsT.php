<?php

namespace App\Entity\Plesk;

use Doctrine\ORM\Mapping as ORM;

/**
 * DnsRecsT
 *
 * @ORM\Table(name="dns_recs_t")
 * @ORM\Entity(repositoryClass="App\Repository\Plesk\DnsRecsTRepository")
 */
class DnsRecsT
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
     * @var \DateTime
     *
     * @ORM\Column(name="time_stamp", type="datetime", nullable=false, options={"default"="CURRENT_TIMESTAMP"})
     */
    private $timeStamp = 'CURRENT_TIMESTAMP';

    /**
     * @var string
     *
     * @ORM\Column(name="type", type="string", length=0, nullable=false, options={"default"="A"})
     */
    private $type = 'A';

    /**
     * @var string
     *
     * @ORM\Column(name="host", type="string", length=255, nullable=false)
     */
    private $host;

    /**
     * @var string
     *
     * @ORM\Column(name="displayHost", type="string", length=255, nullable=false)
     */
    private $displayhost;

    /**
     * @var string
     *
     * @ORM\Column(name="val", type="text", length=65535, nullable=false)
     */
    private $val;

    /**
     * @var string
     *
     * @ORM\Column(name="displayVal", type="text", length=65535, nullable=false)
     */
    private $displayval;

    /**
     * @var string
     *
     * @ORM\Column(name="opt", type="string", length=255, nullable=false)
     */
    private $opt = '';

    /**
     * @var string|null
     *
     * @ORM\Column(name="uid", type="string", length=255, nullable=true)
     */
    private $uid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTimeStamp(): ?\DateTimeInterface
    {
        return $this->timeStamp;
    }

    public function setTimeStamp(\DateTimeInterface $timeStamp): self
    {
        $this->timeStamp = $timeStamp;

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

    public function getHost(): ?string
    {
        return $this->host;
    }

    public function setHost(string $host): self
    {
        $this->host = $host;

        return $this;
    }

    public function getDisplayhost(): ?string
    {
        return $this->displayhost;
    }

    public function setDisplayhost(string $displayhost): self
    {
        $this->displayhost = $displayhost;

        return $this;
    }

    public function getVal(): ?string
    {
        return $this->val;
    }

    public function setVal(string $val): self
    {
        $this->val = $val;

        return $this;
    }

    public function getDisplayval(): ?string
    {
        return $this->displayval;
    }

    public function setDisplayval(string $displayval): self
    {
        $this->displayval = $displayval;

        return $this;
    }

    public function getOpt(): ?string
    {
        return $this->opt;
    }

    public function setOpt(string $opt): self
    {
        $this->opt = $opt;

        return $this;
    }

    public function getUid(): ?string
    {
        return $this->uid;
    }

    public function setUid(?string $uid): self
    {
        $this->uid = $uid;

        return $this;
    }


}
