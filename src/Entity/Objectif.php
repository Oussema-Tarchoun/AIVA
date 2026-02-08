<?php

namespace App\Entity;

use App\Repository\ObjectifRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ObjectifRepository::class)]
class Objectif
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT)]
    #[Assert\NotBlank(message: "La description est obligatoire")]
    #[Assert\Length(
        min: 10,
        max: 500,
        minMessage: "La description doit contenir au moins {{ limit }} caractères",
        maxMessage: "La description ne peut pas dépasser {{ limit }} caractères"
    )]
    private ?string $description = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le type est obligatoire")]
    #[Assert\Choice(
        choices: ['Perte de poids', 'Gain musculaire', 'Endurance', 'Flexibilité', 'Autre'],
        message: "Type invalide"
    )]
    private ?string $type = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "La valeur cible est obligatoire")]
    #[Assert\Positive(message: "La valeur cible doit être positive")]
    private ?int $valeurCible = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de début est obligatoire")]
    private ?\DateTimeInterface $dateDebut = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date de fin est obligatoire")]
    #[Assert\GreaterThan(
        propertyPath: "dateDebut",
        message: "La date de fin doit être postérieure à la date de début"
    )]
    private ?\DateTimeInterface $dateFin = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "Le statut est obligatoire")]
    #[Assert\Choice(
        choices: ['En cours', 'Atteint', 'Abandonné'],
        message: "Statut invalide"
    )]
    private ?string $statut = null;

    // ✅ keep nullable (no auth, no forced owner)
    #[ORM\ManyToOne(inversedBy: 'objectifs')]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $user = null;

    #[ORM\OneToMany(
        targetEntity: ActivitePhysique::class,
        mappedBy: 'objectif',
        cascade: ['persist', 'remove']
    )]
    private Collection $activitesPhysiques;

    public function __construct()
    {
        $this->activitesPhysiques = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): self
    {
        $this->type = $type;
        return $this;
    }

    public function getValeurCible(): ?int
    {
        return $this->valeurCible;
    }

    public function setValeurCible(?int $valeurCible): self
    {
        $this->valeurCible = $valeurCible;
        return $this;
    }

    public function getDateDebut(): ?\DateTimeInterface
    {
        return $this->dateDebut;
    }

    public function setDateDebut(?\DateTimeInterface $dateDebut): self
    {
        $this->dateDebut = $dateDebut;
        return $this;
    }

    public function getDateFin(): ?\DateTimeInterface
    {
        return $this->dateFin;
    }

    public function setDateFin(?\DateTimeInterface $dateFin): self
    {
        $this->dateFin = $dateFin;
        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): self
    {
        $this->statut = $statut;
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;
        return $this;
    }

    public function getActivitesPhysiques(): Collection
    {
        return $this->activitesPhysiques;
    }

    public function addActivitePhysique(ActivitePhysique $activite): self
    {
        if (!$this->activitesPhysiques->contains($activite)) {
            $this->activitesPhysiques[] = $activite;
            $activite->setObjectif($this);
        }

        return $this;
    }

    public function removeActivitePhysique(ActivitePhysique $activite): self
    {
        if ($this->activitesPhysiques->removeElement($activite)) {
            if ($activite->getObjectif() === $this) {
                $activite->setObjectif(null);
            }
        }

        return $this;
    }

    public function __toString(): string
    {
        return $this->description ?? 'Objectif';
    }
}
