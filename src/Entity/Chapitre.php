<?php

namespace App\Entity;

use App\Repository\ChapitreRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity(repositoryClass: ChapitreRepository::class)]
class Chapitre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(nullable: true)]
    #[Assert\Positive(message: 'L\'identifiant du chapitre doit être positif.')]
    private ?int $id_chapitre = null;

    #[ORM\Column(length: 255)]
    #[Assert\NotBlank(message: 'Le titre est obligatoire.')]
    #[Assert\Length(
        max: 255,
        maxMessage: 'Le titre ne doit pas dépasser 255 caractères.'
    )]
    private ?string $titre = null;

    #[ORM\Column(type: 'text')]
    #[Assert\NotBlank(message: 'Le contenu est obligatoire.')]
    private ?string $contenu = null;

    #[ORM\Column]
    #[Assert\NotNull(message: 'L\'ordre est obligatoire.')]
    #[Assert\Positive(message: 'L\'ordre doit être un nombre positif.')]
    private ?int $ordre = null;

    #[ORM\Column(type: 'text', nullable: true)]
    private ?string $exercise = null;

    #[ORM\ManyToOne(inversedBy: 'chapitres')]
    #[ORM\JoinColumn(name: 'id_cours', referencedColumnName: 'id', nullable: false)]
    #[Assert\NotNull(message: 'Le cours associé est obligatoire.')]
    private ?Cours $id_cours = null;

    public function __construct()
    {
        // Générer un id_chapitre aléatoire si non défini
        if ($this->id_chapitre === null) {
            $this->id_chapitre = random_int(1_000_000, 9_999_999);
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdChapitre(): ?int
    {
        return $this->id_chapitre;
    }

    public function setIdChapitre(?int $id_chapitre): static
    {
        $this->id_chapitre = $id_chapitre;

        return $this;
    }

    public function getTitre(): ?string
    {
        return $this->titre;
    }

    public function setTitre(?string $titre): static
    {
        $this->titre = $titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->contenu;
    }

    public function setContenu(?string $contenu): static
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getOrdre(): ?int
    {
        return $this->ordre;
    }

    public function setOrdre(?int $ordre): static
    {
        $this->ordre = $ordre;

        return $this;
    }

    public function getExercise(): ?string
    {
        return $this->exercise;
    }

    public function setExercise(?string $exercise): static
    {
        $this->exercise = $exercise;

        return $this;
    }

    public function getIdCours(): ?Cours
    {
        return $this->id_cours;
    }

    public function setIdCours(?Cours $id_cours): static
    {
        $this->id_cours = $id_cours;

        return $this;
    }
}
