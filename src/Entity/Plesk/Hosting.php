<?php

namespace App\Entity\Plesk;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hosting
 *
 * @ORM\Table(name="hosting")
 * @ORM\Entity(repositoryClass="App\Repository\Plesk\HostingRepository")
 */
class Hosting
{
    /**
     * @var int
     *
     * @ORM\Column(name="dom_id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $domId = '0';

    /**
     * @var int
     *
     * @ORM\Column(name="sys_user_id", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $sysUserId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="real_traffic", type="bigint", nullable=true, options={"unsigned"=true})
     */
    private $realTraffic = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="ssi", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $ssi = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="ssi_html", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $ssiHtml = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="php", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $php = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="php_isapi", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $phpIsapi = 'false';

    /**
     * @var string|null
     *
     * @ORM\Column(name="php_handler_id", type="string", length=255, nullable=true)
     */
    private $phpHandlerId;

    /**
     * @var string
     *
     * @ORM\Column(name="cgi", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $cgi = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="perl", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $perl = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="python", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $python = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="asp", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $asp = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="asp_dot_net", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $aspDotNet = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="managed_runtime_version", type="string", length=255, nullable=false)
     */
    private $managedRuntimeVersion = '';

    /**
     * @var string
     *
     * @ORM\Column(name="ssl", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $ssl = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="webstat", type="string", length=20, nullable=false, options={"default"="none"})
     */
    private $webstat = 'none';

    /**
     * @var string
     *
     * @ORM\Column(name="at_domains", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $atDomains = 'false';

    /**
     * @var string|null
     *
     * @ORM\Column(name="write_modify", type="string", length=255, nullable=true)
     */
    private $writeModify;

    /**
     * @var string
     *
     * @ORM\Column(name="www_root", type="text", length=65535, nullable=false)
     */
    private $wwwRoot;

    /**
     * @var string
     *
     * @ORM\Column(name="webdeploy", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $webdeploy = 'false';

    /**
     * @var int|null
     *
     * @ORM\Column(name="certificate_id", type="integer", nullable=true, options={"unsigned"=true})
     */
    private $certificateId = '0';

    /**
     * @var int|null
     *
     * @ORM\Column(name="traffic_bandwidth", type="integer", nullable=true, options={"default"="-1"})
     */
    private $trafficBandwidth = '-1';

    /**
     * @var int|null
     *
     * @ORM\Column(name="max_connection", type="integer", nullable=true, options={"default"="-1"})
     */
    private $maxConnection = '-1';

    /**
     * @var string
     *
     * @ORM\Column(name="fastcgi", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $fastcgi = 'false';

    /**
     * @var string
     *
     * @ORM\Column(name="same_ssl", type="string", length=0, nullable=false, options={"default"="true"})
     */
    private $sameSsl = 'true';

    /**
     * @var string
     *
     * @ORM\Column(name="sslRedirect", type="string", length=0, nullable=false, options={"default"="false"})
     */
    private $sslredirect = 'false';

    public function getDomId(): ?int
    {
        return $this->domId;
    }

    public function getSysUserId(): ?int
    {
        return $this->sysUserId;
    }

    public function setSysUserId(int $sysUserId): self
    {
        $this->sysUserId = $sysUserId;

        return $this;
    }

    public function getRealTraffic(): ?string
    {
        return $this->realTraffic;
    }

    public function setRealTraffic(?string $realTraffic): self
    {
        $this->realTraffic = $realTraffic;

        return $this;
    }

    public function getSsi(): ?string
    {
        return $this->ssi;
    }

    public function setSsi(string $ssi): self
    {
        $this->ssi = $ssi;

        return $this;
    }

    public function getSsiHtml(): ?string
    {
        return $this->ssiHtml;
    }

    public function setSsiHtml(string $ssiHtml): self
    {
        $this->ssiHtml = $ssiHtml;

        return $this;
    }

    public function getPhp(): ?string
    {
        return $this->php;
    }

    public function setPhp(string $php): self
    {
        $this->php = $php;

        return $this;
    }

    public function getPhpIsapi(): ?string
    {
        return $this->phpIsapi;
    }

    public function setPhpIsapi(string $phpIsapi): self
    {
        $this->phpIsapi = $phpIsapi;

        return $this;
    }

    public function getPhpHandlerId(): ?string
    {
        return $this->phpHandlerId;
    }

    public function setPhpHandlerId(?string $phpHandlerId): self
    {
        $this->phpHandlerId = $phpHandlerId;

        return $this;
    }

    public function getCgi(): ?string
    {
        return $this->cgi;
    }

    public function setCgi(string $cgi): self
    {
        $this->cgi = $cgi;

        return $this;
    }

    public function getPerl(): ?string
    {
        return $this->perl;
    }

    public function setPerl(string $perl): self
    {
        $this->perl = $perl;

        return $this;
    }

    public function getPython(): ?string
    {
        return $this->python;
    }

    public function setPython(string $python): self
    {
        $this->python = $python;

        return $this;
    }

    public function getAsp(): ?string
    {
        return $this->asp;
    }

    public function setAsp(string $asp): self
    {
        $this->asp = $asp;

        return $this;
    }

    public function getAspDotNet(): ?string
    {
        return $this->aspDotNet;
    }

    public function setAspDotNet(string $aspDotNet): self
    {
        $this->aspDotNet = $aspDotNet;

        return $this;
    }

    public function getManagedRuntimeVersion(): ?string
    {
        return $this->managedRuntimeVersion;
    }

    public function setManagedRuntimeVersion(string $managedRuntimeVersion): self
    {
        $this->managedRuntimeVersion = $managedRuntimeVersion;

        return $this;
    }

    public function getSsl(): ?string
    {
        return $this->ssl;
    }

    public function setSsl(string $ssl): self
    {
        $this->ssl = $ssl;

        return $this;
    }

    public function getWebstat(): ?string
    {
        return $this->webstat;
    }

    public function setWebstat(string $webstat): self
    {
        $this->webstat = $webstat;

        return $this;
    }

    public function getAtDomains(): ?string
    {
        return $this->atDomains;
    }

    public function setAtDomains(string $atDomains): self
    {
        $this->atDomains = $atDomains;

        return $this;
    }

    public function getWriteModify(): ?string
    {
        return $this->writeModify;
    }

    public function setWriteModify(?string $writeModify): self
    {
        $this->writeModify = $writeModify;

        return $this;
    }

    public function getWwwRoot(): ?string
    {
        return $this->wwwRoot;
    }

    public function setWwwRoot(string $wwwRoot): self
    {
        $this->wwwRoot = $wwwRoot;

        return $this;
    }

    public function getWebdeploy(): ?string
    {
        return $this->webdeploy;
    }

    public function setWebdeploy(string $webdeploy): self
    {
        $this->webdeploy = $webdeploy;

        return $this;
    }

    public function getCertificateId(): ?int
    {
        return $this->certificateId;
    }

    public function setCertificateId(?int $certificateId): self
    {
        $this->certificateId = $certificateId;

        return $this;
    }

    public function getTrafficBandwidth(): ?int
    {
        return $this->trafficBandwidth;
    }

    public function setTrafficBandwidth(?int $trafficBandwidth): self
    {
        $this->trafficBandwidth = $trafficBandwidth;

        return $this;
    }

    public function getMaxConnection(): ?int
    {
        return $this->maxConnection;
    }

    public function setMaxConnection(?int $maxConnection): self
    {
        $this->maxConnection = $maxConnection;

        return $this;
    }

    public function getFastcgi(): ?string
    {
        return $this->fastcgi;
    }

    public function setFastcgi(string $fastcgi): self
    {
        $this->fastcgi = $fastcgi;

        return $this;
    }

    public function getSameSsl(): ?string
    {
        return $this->sameSsl;
    }

    public function setSameSsl(string $sameSsl): self
    {
        $this->sameSsl = $sameSsl;

        return $this;
    }

    public function getSslredirect(): ?string
    {
        return $this->sslredirect;
    }

    public function setSslredirect(string $sslredirect): self
    {
        $this->sslredirect = $sslredirect;

        return $this;
    }


}
