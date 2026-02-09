<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class Recommandation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $titre = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 100, nullable: true)]
    private ?string $niveau_impact = null;

    #[ORM\Column(type: "date", nullable: true)]
    private ?\DateTimeInterface $date_generation = null;

    // Relation ManyToOne vers Energie
    #[ORM\ManyToOne(inversedBy: "recommandations")]
    #[ORM\JoinColumn(nullable: false, onDelete: "CASCADE")]
    private ?Energie $energie = null;

    // Getters & setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): self
    {
        $this->titre = $titre;
        return $this;
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

    public function getNiveauImpact(): ?string
    {
        return $this->niveau_impact;
    }

    public function setNiveauImpact(?string $niveau_impact): self
    {
        $this->niveau_impact = $niveau_impact;
        return $this;
    }

    public function getDateGeneration(): ?\DateTimeInterface
    {
        return $this->date_generation;
    }

    public function setDateGeneration(?\DateTimeInterface $date_generation): self
    {
        $this->date_generation = $date_generation;
        return $this;
    }

    public function getEnergie(): ?Energie
    {
        return $this->energie;
    }

    public function setEnergie(?Energie $energie): self
    {
        $this->energie = $energie;
        return $this;
    }
}