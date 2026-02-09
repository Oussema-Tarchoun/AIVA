<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
<<<<<<< HEAD

#[ORM\Entity(repositoryClass: UserRepository::class)]
class User
=======
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface
>>>>>>> f5b1638a8a5efd0d8f8bcf9078ab43dc9a779314
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
<<<<<<< HEAD
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $password = null;

    // Une seule valeur : "ROLE_ADMIN" ou "ROLE_USER"
    #[ORM\Column(length: 50)]
    private ?string $roles = null;

    #[ORM\Column(type: 'boolean')]
    private bool $isBlocked = false;

    /**
     * @var Collection<int, Cours>
     */
    #[ORM\OneToMany(targetEntity: Cours::class, mappedBy: 'user')]
    private Collection $cours;

    public function __construct()
    {
        $this->cours = new ArrayCollection();
    }

=======
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $isBlocked = false;

    // ✅ ADD THIS RELATION WITH ENERGIE
    #[ORM\OneToMany(
        mappedBy: 'user',
        targetEntity: Energie::class,
        cascade: ['remove'],
        orphanRemoval: true
    )]
    private Collection $energies;

    public function __construct()
    {
        $this->energies = new ArrayCollection();
    }

    // =======================
    // Getters & Setters
    // =======================

>>>>>>> f5b1638a8a5efd0d8f8bcf9078ab43dc9a779314
    public function getId(): ?int
    {
        return $this->id;
    }

<<<<<<< HEAD
    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

=======
    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;
        return $this;
    }

    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    public function getRoles(): array
    {
        $roles = $this->roles;
        $roles[] = 'ROLE_USER';
        return array_unique($roles);
    }

    public function setRoles(array $roles): static
    {
        $this->roles = $roles;
>>>>>>> f5b1638a8a5efd0d8f8bcf9078ab43dc9a779314
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
<<<<<<< HEAD

        return $this;
    }

    public function getRoles(): ?string
    {
        return $this->roles;
    }

    public function setRoles(string $roles): static
    {
        $this->roles = $roles;

=======
        return $this;
    }

    #[\Deprecated]
    public function eraseCredentials(): void
    {
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;
>>>>>>> f5b1638a8a5efd0d8f8bcf9078ab43dc9a779314
        return $this;
    }

    public function isBlocked(): bool
    {
        return $this->isBlocked;
    }

    public function setIsBlocked(bool $isBlocked): static
    {
        $this->isBlocked = $isBlocked;
<<<<<<< HEAD

        return $this;
    }

    /**
     * @return Collection<int, Cours>
     */
    public function getCours(): Collection
    {
        return $this->cours;
    }

    public function addCour(Cours $cour): static
    {
        if (!$this->cours->contains($cour)) {
            $this->cours->add($cour);
            $cour->setUser($this);
=======
        return $this;
    }

    // =======================
    // Energie Relation Methods
    // =======================

    public function getEnergies(): Collection
    {
        return $this->energies;
    }

    public function addEnergie(Energie $energie): static
    {
        if (!$this->energies->contains($energie)) {
            $this->energies->add($energie);
            $energie->setUser($this);
>>>>>>> f5b1638a8a5efd0d8f8bcf9078ab43dc9a779314
        }

        return $this;
    }

<<<<<<< HEAD
    public function removeCour(Cours $cour): static
    {
        if ($this->cours->removeElement($cour)) {
            if ($cour->getUser() === $this) {
                $cour->setUser(null);
=======
    public function removeEnergie(Energie $energie): static
    {
        if ($this->energies->removeElement($energie)) {
            if ($energie->getUser() === $this) {
                $energie->setUser(null);
>>>>>>> f5b1638a8a5efd0d8f8bcf9078ab43dc9a779314
            }
        }

        return $this;
    }
}
