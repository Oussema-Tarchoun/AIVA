<?php

namespace App\Entity;

use App\Repository\ActivitePhysiqueRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ActivitePhysiqueRepository::class)]
class ActivitePhysique
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le type d'activité est obligatoire")]
    #[Assert\Length(min: 3, max: 100)]
    private ?string $type = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "La durée est obligatoire")]
    #[Assert\Positive(message: "La durée doit être positive")]
    #[Assert\Range(min: 1, max: 600)]
    private ?int $duree = null;

    #[ORM\Column]
    #[Assert\NotBlank(message: "Les calories sont obligatoires")]
    #[Assert\PositiveOrZero(message: "Les calories doivent être >= 0")]
    private ?int $caloriesBruless = null;

    // ✅ DATE فقط
    #[ORM\Column(type: Types::DATE_MUTABLE)]
    #[Assert\NotBlank(message: "La date est obligatoire")]
    #[Assert\LessThanOrEqual("today", message: "La date ne peut pas être dans le futur")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(length: 50)]
    #[Assert\NotBlank(message: "L'intensité est obligatoire")]
    #[Assert\Choice(choices: ['faible', 'moyenne', 'elevee'], message: "Intensité invalide")]
    private ?string $intensite = null;

    // ✅ obligatoire (objectif_id NOT NULL)
    #[ORM\ManyToOne(inversedBy: 'activitesPhysiques')]
    #[ORM\JoinColumn(nullable: false)]
    #[Assert\NotNull(message: "Vous devez sélectionner un objectif")]
    private ?Objectif $objectif = null;

    public function getId(): ?int { return $this->id; }

    public function getType(): ?string { return $this->type; }
    public function setType(?string $type): self { $this->type = $type; return $this; }

    public function getDuree(): ?int { return $this->duree; }
    public function setDuree(?int $duree): self { $this->duree = $duree; return $this; }

    public function getCaloriesBruless(): ?int { return $this->caloriesBruless; }
    public function setCaloriesBruless(?int $caloriesBruless): self { $this->caloriesBruless = $caloriesBruless; return $this; }

    public function getDate(): ?\DateTimeInterface { return $this->date; }

    // ✅ accepter null pour éviter exception avant validation
    public function setDate(?\DateTimeInterface $date): self { $this->date = $date; return $this; }

    public function getIntensite(): ?string { return $this->intensite; }
    public function setIntensite(?string $intensite): self { $this->intensite = $intensite; return $this; }

    public function getObjectif(): ?Objectif { return $this->objectif; }
    public function setObjectif(?Objectif $objectif): self { $this->objectif = $objectif; return $this; }

    public function __toString(): string
    {
        return ($this->type ?? 'Activité') . ' (' . ($this->duree ?? 0) . ' min)';
    }
}
