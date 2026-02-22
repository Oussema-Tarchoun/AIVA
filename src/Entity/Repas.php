<?php

namespace App\Entity;

use App\Repository\RepasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: RepasRepository::class)]
class Repas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom du repas est obligatoire.")]
    #[Assert\Length(
        min: 2,
        max: 255,
        minMessage: "Le nom doit contenir au moins {{ limit }} caractères.",
        maxMessage: "Le nom ne peut pas dépasser {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ0-9\s'\-]+$/u",
        message: "Le nom ne peut contenir que des lettres, chiffres, espaces, apostrophes et tirets."
    )]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TIME_MUTABLE, nullable: true)]
    #[Assert\NotNull(message: "L'heure est obligatoire.")]
    private ?\DateTime $heure = null;

    #[ORM\Column(nullable: true)]
    #[Assert\NotNull(message: "Les calories sont obligatoires.")]
    #[Assert\Range(
        min: 0,
        max: 8000,
        notInRangeMessage: "Les calories doivent être entre {{ min }} et {{ max }}."
    )]
    private ?int $calories = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(type: "string", length: 50, options: ["default" => "dejeuner"])]
    #[Assert\NotBlank(message: "Le type de repas est obligatoire.")]
    #[Assert\Choice(
        choices: ['petit-dejeuner', 'dejeuner', 'diner', 'collation'],
        message: "Le type de repas doit être: petit-dejeuner, dejeuner, diner ou collation."
    )]
    private ?string $type = 'dejeuner';

    #[ORM\Column(type: 'date_immutable', nullable: true)]
    #[Assert\NotNull(message: "La date est obligatoire.")]
    private ?\DateTimeImmutable $date = null;

    // 🔗 Relation Repas <-> Aliment (ManyToMany)
    #[ORM\ManyToMany(targetEntity: Aliment::class, inversedBy: 'repas')]
    #[ORM\JoinTable(name: 'repas_aliment')]
    private Collection $aliments;

    // 🔗 Relation Repas -> User (ManyToOne)
    #[ORM\ManyToOne(inversedBy: 'repas')]
    #[ORM\JoinColumn(nullable: true)]
    private ?User $user = null;

    public function __construct()
    {
        $this->aliments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getHeure(): ?\DateTime
    {
        return $this->heure;
    }

    public function setHeure(?\DateTime $heure): static
    {
        $this->heure = $heure;
        return $this;
    }

    public function getCalories(): ?int
    {
        return $this->calories;
    }

    public function setCalories(?int $calories): static
    {
        $this->calories = $calories;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type): static
    {
        $this->type = $type;
        return $this;
    }

    public function getDate(): ?\DateTimeImmutable
    {
        return $this->date;
    }

    public function setDate(?\DateTimeImmutable $date): self
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return Collection<int, Aliment>
     */
    public function getAliments(): Collection
    {
        return $this->aliments;
    }

    public function addAliment(Aliment $aliment): static
    {
        if (!$this->aliments->contains($aliment)) {
            $this->aliments->add($aliment);
        }
        return $this;
    }

    public function removeAliment(Aliment $aliment): static
    {
        $this->aliments->removeElement($aliment);
        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }

    public function getNutritionalScore(): int
    {
        $score = 100;

        $nbAliments = count($this->aliments);
        if ($nbAliments === 0) return 0;

        // Bonus variété (max +20)
        $score += min(20, $nbAliments * 5);

        $totalProt = 0;
        $totalGlu  = 0;
        $totalLip  = 0;

        foreach ($this->aliments as $aliment) {
            $macro = $aliment->getMacro();
            if (is_array($macro)) {
                $totalProt += (float)($macro['proteine'] ?? 0);
                $totalGlu  += (float)($macro['glucide']  ?? 0);
                $totalLip  += (float)($macro['lipide']   ?? 0);
            }
        }

        if ($totalProt >= 20) $score += 15;

        $totalMacros = $totalProt + $totalGlu + $totalLip;
        if ($totalMacros > 0) {
            $maxRatio = max($totalProt, $totalGlu, $totalLip) / $totalMacros;
            if ($maxRatio < 0.70) $score += 15;
        }

        if ($this->calories !== null && $this->calories > 800) $score -= 20;

        return max(0, min(100, $score));
    }

    public function getScoreLabel(): string
    {
        $s = $this->getNutritionalScore();
        if ($s >= 80) return 'Excellent';
        if ($s >= 60) return 'Bon';
        if ($s >= 40) return 'Moyen';
        return 'Faible';
    }

    public function getScoreColor(): string
    {
        $s = $this->getNutritionalScore();
        if ($s >= 80) return '#00d4aa';
        if ($s >= 60) return '#60a5fa';
        if ($s >= 40) return '#f59e0b';
        return '#ef4444';
    }
}
