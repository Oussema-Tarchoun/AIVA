<?php

namespace App\Entity;

use App\Repository\DepenseRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: DepenseRepository::class)]
class Depense
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(name: 'id_depense')]
    private ?int $id_depense = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'La description est obligatoire.')]
    private ?string $description = null;

    #[ORM\Column(type: 'decimal', precision: 10, scale: 2)]
    #[Assert\NotBlank(message: 'Le montant est obligatoire.')]
    #[Assert\Positive(message: 'Le montant doit être positif.')]
    private ?string $montant = null;

    #[ORM\Column(name: 'date_depense', type: Types::DATE_MUTABLE)]
    #[Assert\NotNull(message: 'La date de dépense est obligatoire.')]
    private ?\DateTimeInterface $date_depense = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le statut est obligatoire.')]
    private ?string $statut = null;

    // Depense appartient à 1 categorie (le user est celui de la categorie)
    #[ORM\ManyToOne(inversedBy: 'depenses')]
    #[ORM\JoinColumn(name: 'id_categorie', referencedColumnName: 'id_categorie', nullable: false, onDelete: 'CASCADE')]
    #[Assert\NotNull(message: 'Veuillez choisir une catégorie.')]
    private ?Categorie $categorie = null;

    public function getIdDepense(): ?int { return $this->id_depense; }

    public function getDescription(): ?string { return $this->description; }
    public function setDescription(?string $description): static { $this->description = $description; return $this; }

    public function getMontant(): ?string { return $this->montant; }
    public function setMontant(?string $montant): static { $this->montant = $montant; return $this; }

    public function getDateDepense(): ?\DateTimeInterface { return $this->date_depense; }
    public function setDateDepense(?\DateTimeInterface $date_depense): static { $this->date_depense = $date_depense; return $this; }

    public function getStatut(): ?string { return $this->statut; }
    public function setStatut(?string $statut): static { $this->statut = $statut; return $this; }

    public function getCategorie(): ?Categorie { return $this->categorie; }
    public function setCategorie(?Categorie $categorie): static { $this->categorie = $categorie; return $this; }

    /** Propriétaire = user de la catégorie (pas de colonne id_user dans depense). */
    public function getUser(): ?User
    {
        return $this->categorie?->getUser();
    }
}