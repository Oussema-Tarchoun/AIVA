<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Energie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 100)]
    #[Assert\NotBlank(message: "Le type d'énergie est obligatoire.")]
    #[Assert\Choice(choices: ["Électricité", "Gaz", "Eau"])]
    private ?string $type_energie = null;

    #[ORM\Column]
    #[Assert\Positive]
    private ?float $periode = null;

    #[ORM\Column]
    #[Assert\Positive]
    private ?float $valeur = null;

    #[ORM\Column(type: "date")]
    private ?\DateTimeInterface $date_enregistrement = null;

    #[ORM\Column(length: 255)]
    private ?string $source = null;

    // Relation ManyToOne vers User
    #[ORM\ManyToOne(inversedBy: "energies")]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    // Relation OneToMany vers Recommandation
    #[ORM\OneToMany(
        mappedBy: "energie",
        targetEntity: Recommandation::class,
        orphanRemoval: true
    )]
    private Collection $recommandations;

    public function __construct()
    {
        $this->recommandations = new ArrayCollection();
    }

    // Getters & setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypeEnergie(): ?string
    {
        return $this->type_energie;
    }

    public function setTypeEnergie(?string $type_energie): self
    {
        $this->type_energie = $type_energie;
        return $this;
    }

    public function getPeriode(): ?float
    {
        return $this->periode;
    }

    public function setPeriode(?float $periode): self
    {
        $this->periode = $periode;
        return $this;
    }

    public function getValeur(): ?float
    {
        return $this->valeur;
    }

    public function setValeur(?float $valeur): self
    {
        $this->valeur = $valeur;
        return $this;
    }

    public function getDateEnregistrement(): ?\DateTimeInterface
    {
        return $this->date_enregistrement;
    }

    public function setDateEnregistrement(?\DateTimeInterface $date_enregistrement): self
    {
        $this->date_enregistrement = $date_enregistrement;
        return $this;
    }

    public function getSource(): ?string
    {
        return $this->source;
    }

    public function setSource(?string $source): self
    {
        $this->source = $source;
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

    /** @return Collection<int, Recommandation> */
    public function getRecommandations(): Collection
    {
        return $this->recommandations;
    }

    public function addRecommandation(Recommandation $recommandation): self
    {
        if (!$this->recommandations->contains($recommandation)) {
            $this->recommandations->add($recommandation);
            $recommandation->setEnergie($this);
        }

        return $this;
    }

    public function removeRecommandation(Recommandation $recommandation): self
    {
        if ($this->recommandations->removeElement($recommandation)) {
            if ($recommandation->getEnergie() === $this) {
                $recommandation->setEnergie(null);
            }
        }

        return $this;
    }
}