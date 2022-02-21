<?php

namespace App\Entity;

use App\Repository\CollaborateurRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraint as Assert;

/**
 * @ORM\Entity(repositoryClass=CollaborateurRepository::class)
 */
class Collaborateur
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $MatriculeCollaborateur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Salaire;

    /**
     * @ORM\Column(type="integer")
     */
    private $SalaireBrut;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $IndemniteStage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Photo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Status;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Role;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Password;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatriculeCollaborateur(): ?string
    {
        return $this->MatriculeCollaborateur;
    }

    public function setMatriculeCollaborateur(string $MatriculeCollaborateur): self
    {
        $this->MatriculeCollaborateur = $MatriculeCollaborateur;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(string $Nom): self
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->Prenom;
    }

    public function setPrenom(string $Prenom): self
    {
        $this->Prenom = $Prenom;

        return $this;
    }

    public function getSalaire(): ?string
    {
        return $this->Salaire;
    }

    public function setSalaire(?string $Salaire): self
    {
        $this->Salaire = $Salaire;

        return $this;
    }

    public function getSalaireBrut(): ?int
    {
        return $this->SalaireBrut;
    }

    public function setSalaireBrut(int $SalaireBrut): self
    {
        $this->SalaireBrut = $SalaireBrut;

        return $this;
    }

    public function getIndemniteStage(): ?int
    {
        return $this->IndemniteStage;
    }

    public function setIndemniteStage(?int $IndemniteStage): self
    {
        $this->IndemniteStage = $IndemniteStage;

        return $this;
    }

    public function getPhoto(): ?string
    {
        return $this->Photo;
    }

    public function setPhoto(?string $Photo): self
    {
        $this->Photo = $Photo;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->Status;
    }

    public function setStatus(string $Status): self
    {
        $this->Status = $Status;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->Role;
    }

    public function setRole(string $Role): self
    {
        $this->Role = $Role;

        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->Password;
    }

    public function setPassword(string $Password): self
    {
        $this->Password = $Password;

        return $this;
    }
}
