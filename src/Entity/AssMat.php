<?php

namespace App\Entity;

use App\Repository\AssMatRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AssMatRepository::class)
 */
class AssMat
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
    private $dispo;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $place;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $civilite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nomPrenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telFixe;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $telPortable;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $premierAgrement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $secteur;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $samediMatin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $samediAprem;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dimancheMatin;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $dimancheAprem;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nuit;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $renouvAgrement;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $obs;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateNaissance;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $mail;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $dateDepart;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $observations;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $disponibilite1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $disponibilite2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $disponibilite3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $disponibilite4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $activite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $visio;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $participeActivite;

    public function __construct()
    {

    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDispo(): ?string
    {
        return $this->dispo;
    }

    public function setDispo(?string $dispo): self
    {
        $this->dispo = $dispo;

        return $this;
    }

    public function getPlace(): ?int
    {
        return $this->place;
    }

    public function setPlace(?int $place): self
    {
        $this->place = $place;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(?string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getNomPrenom(): ?string
    {
        return $this->nomPrenom;
    }

    public function setNomPrenom(?string $nomPrenom): self
    {
        $this->nomPrenom = $nomPrenom;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(?int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getTelFixe(): ?int
    {
        return $this->telFixe;
    }

    public function setTelFixe(?int $telFixe): self
    {
        $this->telFixe = $telFixe;

        return $this;
    }

    public function getTelPortable(): ?int
    {
        return $this->telPortable;
    }

    public function setTelPortable(?int $telPortable): self
    {
        $this->telPortable = $telPortable;

        return $this;
    }

    public function getPremierAgrement(): ?int
    {
        return $this->premierAgrement;
    }

    public function setPremierAgrement(?int $premierAgrement): self
    {
        $this->premierAgrement = $premierAgrement;

        return $this;
    }

    public function getSecteur(): ?string
    {
        return $this->secteur;
    }

    public function setSecteur(?string $secteur): self
    {
        $this->secteur = $secteur;

        return $this;
    }

    public function getSamediMatin(): ?int
    {
        return $this->samediMatin;
    }

    public function setSamediMatin(?int $samediMatin): self
    {
        $this->samediMatin = $samediMatin;

        return $this;
    }

    public function getSamediAprem(): ?int
    {
        return $this->samediAprem;
    }

    public function setSamediAprem(?int $samediAprem): self
    {
        $this->samediAprem = $samediAprem;

        return $this;
    }

    public function getDimancheMatin(): ?int
    {
        return $this->dimancheMatin;
    }

    public function setDimancheMatin(?int $dimancheMatin): self
    {
        $this->dimancheMatin = $dimancheMatin;

        return $this;
    }

    public function getDimancheAprem(): ?int
    {
        return $this->dimancheAprem;
    }

    public function setDimancheAprem(?int $dimancheAprem): self
    {
        $this->dimancheAprem = $dimancheAprem;

        return $this;
    }

    public function getNuit(): ?int
    {
        return $this->nuit;
    }

    public function setNuit(?int $nuit): self
    {
        $this->nuit = $nuit;

        return $this;
    }

    public function getRenouvAgrement(): ?string
    {
        return $this->renouvAgrement;
    }

    public function setRenouvAgrement(?string $renouvAgrement): self
    {
        $this->renouvAgrement = $renouvAgrement;

        return $this;
    }

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(?string $obs): self
    {
        $this->obs = $obs;

        return $this;
    }

    public function getDateNaissance(): ?string
    {
        return $this->dateNaissance;
    }

    public function setDateNaissance(?string $dateNaissance): self
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function getMail(): ?string
    {
        return $this->mail;
    }

    public function setMail(?string $mail): self
    {
        $this->mail = $mail;

        return $this;
    }

    public function getDateDepart(): ?string
    {
        return $this->dateDepart;
    }

    public function setDateDepart(?string $dateDepart): self
    {
        $this->dateDepart = $dateDepart;

        return $this;
    }

    public function getObservations(): ?string
    {
        return $this->observations;
    }

    public function setObservations(?string $observations): self
    {
        $this->observations = $observations;

        return $this;
    }

    public function getDisponibilite1(): ?string
    {
        return $this->disponibilite1;
    }

    public function setDisponibilite1(?string $disponibilite1): self
    {
        $this->disponibilite1 = $disponibilite1;

        return $this;
    }

    public function getDisponibilite2(): ?string
    {
        return $this->disponibilite2;
    }

    public function setDisponibilite2(?string $disponibilite2): self
    {
        $this->disponibilite2 = $disponibilite2;

        return $this;
    }

    public function getDisponibilite3(): ?string
    {
        return $this->disponibilite3;
    }

    public function setDisponibilite3(?string $disponibilite3): self
    {
        $this->disponibilite3 = $disponibilite3;

        return $this;
    }

    public function getDisponibilite4(): ?string
    {
        return $this->disponibilite4;
    }

    public function setDisponibilite4(?string $disponibilite4): self
    {
        $this->disponibilite4 = $disponibilite4;

        return $this;
    }

    public function getActivite(): ?int
    {
        return $this->activite;
    }

    public function setActivite(?int $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

    public function getVisio(): ?int
    {
        return $this->visio;
    }

    public function setVisio(?int $visio): self
    {
        $this->visio = $visio;

        return $this;
    }

    public function getParticipeActivite(): ?int
    {
        return $this->participeActivite;
    }

    public function setParticipeActivite(?int $participeActivite): self
    {
        $this->participeActivite = $participeActivite;

        return $this;
    }
}
