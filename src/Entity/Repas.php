<?php

namespace App\Entity;

use App\Repository\RepasRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use App\Entity\User;
use App\Entity\Aliment;
use App\Validator as CustomAssert;

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
        pattern: "/^[a-zA-ZÀ-ÿ\s'\-]+$/u",
        message: "Le nom ne peut contenir que des lettres, espaces, apostrophes (') et tirets (-)."
    )]
    private ?string $nom = null;

    #[ORM\Column(type: Types::TIME_MUTABLE)]
    #[Assert\NotNull(message: "L'heure est obligatoire.")]
    private ?\DateTime $heure = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "Les calories sont obligatoires.")]
    #[Assert\Range(
        min: 0,
        max: 8000,
        notInRangeMessage: "Les calories doivent être entre {{ min }} et {{ max }}."
    )]
    private ?int $calories = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    //#[CustomAssert\ValidDescription]
    private ?string $description = null;

    #[ORM\Column(type: "string", length: 50, options: ["default" => "dejeuner"])]
    #[Assert\NotBlank(message: "Le type de repas est obligatoire.")]
    #[Assert\Choice(
        choices: ['petit-dejeuner', 'dejeuner', 'diner', 'collation'],
        message: "Le type de repas doit être: petit-dejeuner, dejeuner, diner ou collation."
    )]
    private ?string $type = 'dejeuner';

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): static
    {
        $this->type = $type;
        return $this;
    }

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

    public function setNom(string $nom): static
    {
        $this->nom = $nom;
        return $this;
    }

    public function getHeure(): ?\DateTime
    {
        return $this->heure;
    }

    public function setHeure(\DateTime $heure): static
    {
        $this->heure = $heure;
        return $this;
    }

    public function getCalories(): ?int
    {
        return $this->calories;
    }

    public function setCalories(int $calories): static
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

    // 👤 User relation methods
    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;
        return $this;
    }
}