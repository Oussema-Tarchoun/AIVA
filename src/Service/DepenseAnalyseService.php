<?php

namespace App\Service;

use App\Entity\User;
use App\Repository\DepenseRepository;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class DepenseAnalyseService
{
    public function __construct(
        private DepenseRepository $depenseRepo,
        private HttpClientInterface $httpClient,
        private string $geminiApiKey,
        private string $ollamaUrl,
    ) {}

    public function analyser(User $user): string
    {
        $now = new \DateTime();
        $moisActuel = $now->format('Y-m');
        $moisPrecedent = (clone $now)->modify('-1 month')->format('Y-m');

        $totalActuel = $this->depenseRepo->totalParMoisPourMois($user, $moisActuel);
        $totalPrecedent = $this->depenseRepo->totalParMoisPourMois($user, $moisPrecedent);
        $parCategorie = $this->depenseRepo->totalParCategorie($user);

        $catDetails = implode(', ', array_map(
            fn($c) => $c['nom'] . ': ' . number_format((float) $c['total'], 2) . ' TND',
            $parCategorie
        ));

        $prompt = "Analyse les dépenses de cet étudiant et donne des conseils concis en français (max 200 mots).\n"
            . "Mois actuel ($moisActuel): $totalActuel TND\n"
            . "Mois précédent ($moisPrecedent): $totalPrecedent TND\n"
            . "Répartition par catégorie: $catDetails\n"
            . "Identifie les tendances, les catégories élevées, et propose des recommandations budgétaires.";

        // Priorité : Ollama local (qwen2.5:1.5b — ~1GB, rapide, gratuit)
        try {
            $response = $this->httpClient->request('POST', $this->ollamaUrl . '/api/generate', [
                'timeout' => 60,
                'json' => [
                    'model' => 'qwen2.5:1.5b',
                    'prompt' => $prompt,
                    'stream' => false,
                ],
            ]);

            if ($response->getStatusCode() === 200) {
                $data = $response->toArray();
                $text = $data['response'] ?? '';
                if (trim($text) !== '') {
                    return $text;
                }
            }
        } catch (\Throwable $ollamaError) {
            // Ollama non disponible, on tente Gemini
        }

        // Fallback : Gemini Flash
        try {
            $url = 'https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=' . $this->geminiApiKey;
            $response = $this->httpClient->request('POST', $url, [
                'timeout' => 30,
                'json' => [
                    'contents' => [
                        ['parts' => [['text' => $prompt]]],
                    ],
                ],
            ]);

            $data = $response->toArray();
            return $data['candidates'][0]['content']['parts'][0]['text'] ?? 'Pas de réponse Gemini.';
        } catch (\Throwable $geminiError) {
            // Gemini aussi a échoué
        }

        return 'Erreur: Ollama non disponible (' . ($ollamaError->getMessage() ?? '') . '). Lancez: ollama run qwen2.5:1.5b';
    }
}
