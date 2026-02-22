<?php

namespace App\Service;

use App\Entity\User;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Mime\Address;
use Twig\Environment;
use Psr\Log\LoggerInterface;

/**
 * Service d'envoi du rapport hebdomadaire par email.
 * Supporte le mode démo (log uniquement) et le mode réel (Gmail SMTP).
 */
class MailingService
{
    public function __construct(
        private MailerInterface       $mailer,
        private Environment           $twig,
        private WeeklyAnalysisService $weeklyAnalysis,
        private LoggerInterface       $logger,
        private string                $mailerFrom,
        private string                $mailerFromName,
        private bool                  $emailDemo
    ) {}

    /**
     * Génère et envoie (ou logue) le rapport hebdomadaire pour un utilisateur.
     *
     * @return array{ success: bool, mode: string, message: string }
     */
    public function sendWeeklyReport(User $user): array
    {
        // ── 1. Générer l'analyse ────────────────────────────────────────────
        $data = $this->weeklyAnalysis->generateForUser($user);

        if (!$data) {
            return [
                'success' => false,
                'mode'    => $this->emailDemo ? 'demo' : 'real',
                'message' => 'Pas assez de données pour générer le rapport.',
            ];
        }

        // ── 2. Générer le HTML de l'email ───────────────────────────────────
$htmlContent = $this->twig->render('front/repas/weekly_report.html.twig', [
            'user'    => $user,
            'stats'   => $data['stats'],
            'analyse' => $data['analyse'],
        ]);

        $score   = $data['analyse']['score_semaine'] ?? 0;
        $subject = sprintf(
            '[AIVA] Votre rapport nutrition — Score %d/100 — %s',
            $score,
            (new \DateTimeImmutable())->format('d/m/Y')
        );

        // ── 3. Mode DÉMO : logger uniquement ───────────────────────────────
        if ($this->emailDemo) {
            $this->logger->info('[AIVA Mailing DÉMO] Rapport généré pour ' . $user->getEmail(), [
                'user'    => $user->getEmail(),
                'subject' => $subject,
                'score'   => $score,
                'stats'   => $data['stats'],
            ]);

            // Sauvegarder le HTML dans var/mail_demo/ pour inspection
            $dir  = __DIR__ . '/../../var/mail_demo/';
            if (!is_dir($dir)) {
                mkdir($dir, 0775, true);
            }
            $file = $dir . 'weekly_' . $user->getId() . '_' . date('Ymd_His') . '.html';
            file_put_contents($file, $htmlContent);

            return [
                'success' => true,
                'mode'    => 'demo',
                'message' => 'Email généré avec succès (mode démo). Fichier : ' . basename($file),
            ];
        }

        // ── 4. Mode RÉEL : envoi Gmail SMTP ────────────────────────────────
        try {
            $email = (new Email())
                ->from(new Address($this->mailerFrom, $this->mailerFromName))
                ->to(new Address($user->getEmail(), $user->getName() ?? ''))
                ->subject($subject)
                ->html($htmlContent);

            $this->mailer->send($email);

            $this->logger->info('[AIVA Mailing] Email envoyé à ' . $user->getEmail());

            return [
                'success' => true,
                'mode'    => 'real',
                'message' => 'Email envoyé avec succès à ' . $user->getEmail(),
            ];

        } catch (\Throwable $e) {
            $this->logger->error('[AIVA Mailing] Échec envoi : ' . $e->getMessage());

            return [
                'success' => false,
                'mode'    => 'real',
                'message' => 'Erreur envoi : ' . $e->getMessage(),
            ];
        }
    }
}
