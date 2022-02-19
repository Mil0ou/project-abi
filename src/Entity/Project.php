<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $abregeProject;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nomProject;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $infoTechnique;

    /**
     * @ORM\Column(type="integer")
     */
    private $chargeEstimee;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $commentaireCommercial;

    /**
     * @ORM\Column(type="date")
     */
    private $datePrevisionnelDebut;

    /**
     * @ORM\Column(type="date")
     */
    private $datePrevisionnelFin;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateReelDebut;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateReelFin;

    /**
     * @ORM\Column(type="smallint", nullable=true)
     */
    private $nbMaxiCollab;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $remarqueEstime;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $resumerDoc;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeProject;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAbregeProject(): ?string
    {
        return $this->abregeProject;
    }

    public function setAbregeProject(string $abregeProject): self
    {
        $this->abregeProject = $abregeProject;

        return $this;
    }

    public function getNomProject(): ?string
    {
        return $this->nomProject;
    }

    public function setNomProject(string $nomProject): self
    {
        $this->nomProject = $nomProject;

        return $this;
    }

    public function getInfoTechnique(): ?string
    {
        return $this->infoTechnique;
    }

    public function setInfoTechnique(?string $infoTechnique): self
    {
        $this->infoTechnique = $infoTechnique;

        return $this;
    }

    public function getChargeEstimee(): ?int
    {
        return $this->chargeEstimee;
    }

    public function setChargeEstimee(int $chargeEstimee): self
    {
        $this->chargeEstimee = $chargeEstimee;

        return $this;
    }

    public function getCommentaireCommercial(): ?string
    {
        return $this->commentaireCommercial;
    }

    public function setCommentaireCommercial(?string $commentaireCommercial): self
    {
        $this->commentaireCommercial = $commentaireCommercial;

        return $this;
    }

    public function getDatePrevisionnelDebut(): ?\DateTimeInterface
    {
        return $this->datePrevisionnelDebut;
    }

    public function setDatePrevisionnelDebut(\DateTimeInterface $datePrevisionnelDebut): self
    {
        $this->datePrevisionnelDebut = $datePrevisionnelDebut;

        return $this;
    }

    public function getdatePrevisionnelFin(): ?\DateTimeInterface
    {
        return $this->datePrevisionnelFin;
    }

    public function setdatePrevisionnelFin(\DateTimeInterface $datePrevisionnelFin): self
    {
        $this->datePrevisionnelFin = $datePrevisionnelFin;

        return $this;
    }

    public function getDateReelDebut(): ?\DateTimeInterface
    {
        return $this->dateReelDebut;
    }

    public function setDateReelDebut(?\DateTimeInterface $dateReelDebut): self
    {
        $this->dateReelDebut = $dateReelDebut;

        return $this;
    }

    public function getDateReelFin(): ?\DateTimeInterface
    {
        return $this->dateReelFin;
    }

    public function setDateReelFin(?\DateTimeInterface $dateReelFin): self
    {
        $this->dateReelFin = $dateReelFin;

        return $this;
    }

    public function getNbMaxiCollab(): ?int
    {
        return $this->nbMaxiCollab;
    }

    public function setNbMaxiCollab(?int $nbMaxiCollab): self
    {
        $this->nbMaxiCollab = $nbMaxiCollab;

        return $this;
    }

    public function getRemarqueEstime(): ?string
    {
        return $this->remarqueEstime;
    }

    public function setRemarqueEstime(?string $remarqueEstime): self
    {
        $this->remarqueEstime = $remarqueEstime;

        return $this;
    }

    public function getResumerDoc(): ?string
    {
        return $this->resumerDoc;
    }

    public function setResumerDoc(?string $resumerDoc): self
    {
        $this->resumerDoc = $resumerDoc;

        return $this;
    }

    public function getTypeProject(): ?string
    {
        return $this->typeProject;
    }

    public function setTypeProject(string $typeProject): self
    {
        $this->typeProject = $typeProject;

        return $this;
    }
}
