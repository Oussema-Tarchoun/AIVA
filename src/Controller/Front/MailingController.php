<?php

namespace App\Controller\Front;

use App\Service\MailingService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/nutrition/mailing', name: 'front_mailing_')]
class MailingController extends AbstractController
{
    public function __construct(
        private MailingService $mailingService
    ) {}

    /**
     * POST /nutrition/mailing/weekly
     * Génère et envoie (ou logue en mode démo) le rapport hebdomadaire.
     */
    #[Route('/weekly', name: 'weekly', methods: ['POST'])]
    public function sendWeekly(Request $request): JsonResponse
    {
        // ── Sécurité : utilisateur connecté uniquement ──────────────────────
        $user = $this->getUser();
        if (!$user) {
            return $this->json(['success' => false, 'message' => 'Non authentifié.'], 401);
        }

        // ── Token CSRF optionnel (recommandé en prod) ───────────────────────
        $token = $request->headers->get('X-CSRF-Token') ?? '';
        // Si tu actives CSRF, décommente :
        // if (!$this->isCsrfTokenValid('mailing_weekly', $token)) {
        //     return $this->json(['success' => false, 'message' => 'Token invalide.'], 403);
        // }

        // ── Générer et envoyer ──────────────────────────────────────────────
        $result = $this->mailingService->sendWeeklyReport($user);

        return $this->json($result, $result['success'] ? 200 : 500);
    }
}
