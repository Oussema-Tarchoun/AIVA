<?php

namespace App\Entity;

use App\Repository\AlimentRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Context\ExecutionContextInterface;

#[ORM\Entity(repositoryClass: AlimentRepository::class)]
class Aliment
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: "Le nom est obligatoire.")]
    #[Assert\Regex(
        pattern: "/^[a-zA-ZÀ-ÿ\s]+$/",
        message: "Le nom doit contenir uniquement des lettres."
    )]
    private ?string $nom = null;

    #[ORM\Column]
    #[Assert\NotNull(message: "La quantité est obligatoire.")]
    #[Assert\PositiveOrZero(message: "La quantité doit être positive.")]
    #[Assert\LessThanOrEqual(
        value: 10000,
        message: "Valeur impossible : maximum 10000."
    )]
    private ?float $quantite = null;

    #[ORM\Column(type: 'json', nullable: true)]
    private ?array $macro = [];

    #[ORM\ManyToMany(targetEntity: Repas::class, mappedBy: 'aliments')]
    private Collection $repas;

    public function __construct()
    {
        $this->repas = new ArrayCollection();
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

    public function getQuantite(): ?float
    {
        return $this->quantite;
    }

    public function setQuantite(float $quantite): static
    {
        $this->quantite = $quantite;
        return $this;
    }

    public function getMacro(): array
    {
        return $this->macro ?? [];
    }

    public function setMacro(array $macro): static
    {
        $this->macro = $macro;
        return $this;
    }

    /**
     * VALIDATION SERVEUR DES MACRONUTRIMENTS
     */
    #[Assert\Callback]
    public function validateMacro(ExecutionContextInterface $context): void
    {
        if (!$this->macro) {
            return;
        }

        foreach (['proteine', 'glucide', 'lipide'] as $type) {

            if (!isset($this->macro[$type])) {
                continue;
            }

            $value = $this->macro[$type];

            if (!is_numeric($value)) {
                $context->buildViolation("La valeur de $type doit être un nombre.")
                    ->atPath('macro')
                    ->addViolation();
                continue;
            }

            if ($value < 0) {
                $context->buildViolation("$type ne peut pas être négatif.")
                    ->atPath('macro')
                    ->addViolation();
            }

            if ($value > 1000) {
                $context->buildViolation("$type ne peut pas dépasser 1000.")
                    ->atPath('macro')
                    ->addViolation();
            }
        }
    }

    /**
     * @return Collection<int, Repas>
     */
    public function getRepas(): Collection
    {
        return $this->repas;
    }
}
