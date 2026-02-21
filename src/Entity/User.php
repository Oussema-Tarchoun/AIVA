<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Scheb\TwoFactorBundle\Model\Totp\TwoFactorInterface;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\UniqueConstraint(name: 'UNIQ_IDENTIFIER_EMAIL', fields: ['email'])]
#[UniqueEntity(fields: ['email'], message: 'There is already an account with this email')]
class User implements UserInterface, PasswordAuthenticatedUserInterface, TwoFactorInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 180)]
    private ?string $email = null;

    #[ORM\Column]
    private array $roles = [];

    #[ORM\Column]
    private ?string $password = null;

    #[ORM\Column(length: 50)]
    private ?string $name = null;

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $isBlocked = false;

    #[ORM\Column(type: 'string', nullable: true)]
    private ?string $totpSecret = null;

    #[ORM\Column(type: 'integer', options: ['default' => 0])]
    private int $resetPasswordAttempts = 0;

    #[ORM\Column(type: 'json')]
    private array $knownIps = [];

    #[ORM\Column(type: 'boolean', options: ['default' => false])]
    private bool $isVerified = false;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private ?string $verificationToken = null;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $tokenExpiresAt = null;

    #[ORM\Column(type: 'integer', options: ['default' => 0])]
    private int $experiencePoints = 0;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private ?\DateTimeInterface $lastPointsAwardedAt = null;

    #[ORM\ManyToMany(targetEntity: Badge::class, inversedBy: 'users')]
    private Collection $badges;

    // ✅ Relation Energie
    #[ORM\OneToMany(
        mappedBy: 'user',
        targetEntity: Energie::class,
        cascade: ['remove'],
        orphanRemoval: true
    )]
    private Collection $energies;

    // ✅ Relation Objectif
    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Objectif::class)]
    private Collection $objectifs;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Categorie::class)]
    private Collection $categories;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Cours::class)]
    private Collection $cours;

    #[ORM\OneToMany(mappedBy: 'user', targetEntity: Repas::class)]
    private Collection $repas;

    public function __construct()
    {
        $this->energies = new ArrayCollection();
        $this->objectifs = new ArrayCollection();
        $this->categories = new ArrayCollection();
        $this->cours = new ArrayCollection();
        $this->repas = new ArrayCollection();
        $this->badges = new ArrayCollection();
    }

    // =======================
    // Getters & Setters
    // =======================

    public function getId(): ?int
    {
        return $this->id;
    }

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
        return $this;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): static
    {
        $this->password = $password;
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
        return $this;
    }

    public function isBlocked(): bool
    {
        return $this->isBlocked;
    }

    public function setIsBlocked(bool $isBlocked): static
    {
        $this->isBlocked = $isBlocked;
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
        }

        return $this;
    }

    public function removeEnergie(Energie $energie): static
    {
        if ($this->energies->removeElement($energie)) {
            if ($energie->getUser() === $this) {
                $energie->setUser(null);
            }
        }

        return $this;
    }

    // =======================
    // Objectif Relation Methods
    // =======================

    public function getObjectifs(): Collection
    {
        return $this->objectifs;
    }

    public function addObjectif(Objectif $objectif): static
    {
        if (!$this->objectifs->contains($objectif)) {
            $this->objectifs->add($objectif);
            $objectif->setUser($this);
        }

        return $this;
    }

    public function removeObjectif(Objectif $objectif): static
    {
        if ($this->objectifs->removeElement($objectif)) {
            if ($objectif->getUser() === $this) {
                $objectif->setUser(null);
            }
        }

        return $this;
    }

    /** @return Collection<int, Repas> */
    public function getRepas(): Collection { return $this->repas; }

    // =======================
    // 2FA TOTP Methods
    // =======================

    public function isTotpAuthenticationEnabled(): bool
    {
        return $this->totpSecret !== null;
    }

    public function getTotpAuthenticationUsername(): string
    {
        return $this->email;
    }

    public function getTotpAuthenticationRecipient(): string
    {
        return $this->email;
    }

    public function getTotpAuthenticationConfiguration(): ?\Scheb\TwoFactorBundle\Model\Totp\TotpConfigurationInterface
    {
        if (!$this->totpSecret) {
            return null;
        }

        return new \Scheb\TwoFactorBundle\Model\Totp\TotpConfiguration($this->totpSecret, \Scheb\TwoFactorBundle\Model\Totp\TotpConfiguration::ALGORITHM_SHA1, 30, 6);
    }

    public function getTotpSecret(): ?string
    {
        return $this->totpSecret;
    }

    public function setTotpSecret(?string $totpSecret): void
    {
        $this->totpSecret = $totpSecret;
    }

    public function getResetPasswordAttempts(): int
    {
        return $this->resetPasswordAttempts;
    }

    public function setResetPasswordAttempts(int $attempts): self
    {
        $this->resetPasswordAttempts = $attempts;
        return $this;
    }

    public function incrementResetPasswordAttempts(): self
    {
        $this->resetPasswordAttempts++;
        return $this;
    }

    public function getKnownIps(): array
    {
        return $this->knownIps;
    }

    public function setKnownIps(array $knownIps): self
    {
        $this->knownIps = $knownIps;
        return $this;
    }

    public function addKnownIp(string $ip): self
    {
        if (!in_array($ip, $this->knownIps, true)) {
            $this->knownIps[] = $ip;
        }
        return $this;
    }

    public function isVerified(): bool
    {
        return $this->isVerified;
    }

    public function setIsVerified(bool $isVerified): self
    {
        $this->isVerified = $isVerified;
        return $this;
    }

    public function getVerificationToken(): ?string
    {
        return $this->verificationToken;
    }

    public function setVerificationToken(?string $token): self
    {
        $this->verificationToken = $token;
        return $this;
    }

    public function getTokenExpiresAt(): ?\DateTimeInterface
    {
        return $this->tokenExpiresAt;
    }

    public function setTokenExpiresAt(?\DateTimeInterface $expiresAt): self
    {
        $this->tokenExpiresAt = $expiresAt;
        return $this;
    }

    public function getExperiencePoints(): int
    {
        return $this->experiencePoints;
    }

    public function setExperiencePoints(int $xp): self
    {
        $this->experiencePoints = $xp;
        return $this;
    }

    public function getLastPointsAwardedAt(): ?\DateTimeInterface
    {
        return $this->lastPointsAwardedAt;
    }

    public function setLastPointsAwardedAt(?\DateTimeInterface $date): self
    {
        $this->lastPointsAwardedAt = $date;
        return $this;
    }

    /**
     * Logic: 
     * Bronze: 0 - 500 XP
     * Silver: 501 - 1500 XP
     * Gold: 1501+ XP
     */
    public function getLevelName(): string
    {
        if ($this->experiencePoints > 1500) {
            return 'Gold';
        }
        if ($this->experiencePoints > 500) {
            return 'Silver';
        }
        return 'Bronze';
    }

    public function getLevelColor(): string
    {
        return match ($this->getLevelName()) {
            'Gold' => '#FFD700',
            'Silver' => '#C0C0C0',
            default => '#CD7F32',
        };
    }

    /**
     * @return Collection<int, Badge>
     */
    public function getBadges(): Collection
    {
        return $this->badges;
    }

    public function addBadge(Badge $badge): self
    {
        if (!$this->badges->contains($badge)) {
            $this->badges->add($badge);
        }

        return $this;
    }

    public function removeBadge(Badge $badge): self
    {
        $this->badges->removeElement($badge);

        return $this;
    }
}
