<?php

namespace App\Service;

use App\Entity\Badge;
use App\Entity\User;
use App\Repository\BadgeRepository;
use Doctrine\ORM\EntityManagerInterface;

class GamificationService
{
    public function __construct(
        private EntityManagerInterface $entityManager,
        private BadgeRepository $badgeRepository
    ) {
    }

    public function addExperience(User $user, int $amount): void
    {
        $user->setExperiencePoints($user->getExperiencePoints() + $amount);
        $this->checkForBadges($user);
        $this->entityManager->flush();
    }

    public function awardDailyLoginPoints(User $user): bool
    {
        $now = new \DateTime();
        $lastAwarded = $user->getLastPointsAwardedAt();

        // If never awarded or awarded more than 24h ago
        if (!$lastAwarded || $lastAwarded->diff($now)->days >= 1) {
            $this->addExperience($user, 10); // 10 XP for daily login
            $user->setLastPointsAwardedAt($now);
            $this->entityManager->flush();
            return true;
        }

        return false;
    }

    public function awardRegistrationPoints(User $user): void
    {
        $this->addExperience($user, 50); // 50 XP for registering
        $this->awardBadge($user, 'Welcome', 'Welcome to the AIVA community!', 'fas fa-handshake');
    }

    private function checkForBadges(User $user): void
    {
        $xp = $user->getExperiencePoints();

        if ($xp >= 500) {
            $this->awardBadge($user, 'Silver Member', 'Reached 500 XP milestone.', 'fas fa-medal');
        }

        if ($xp >= 1500) {
            $this->awardBadge($user, 'Gold Legend', 'Reached 1500 XP milestone.', 'fas fa-crown');
        }
    }

    private function awardBadge(User $user, string $name, string $description, string $icon): void
    {
        $badge = $this->badgeRepository->findOneBy(['name' => $name]);

        if (!$badge) {
            $badge = new Badge();
            $badge->setName($name);
            $badge->setDescription($description);
            $badge->setIcon($icon);
            $this->entityManager->persist($badge);
            $this->entityManager->flush();
        }

        if (!$user->getBadges()->contains($badge)) {
            $user->addBadge($badge);
        }
    }
}
