<?php

namespace App\Service;

use App\Entity\Energie;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeminiRecommandationService
{
    private HttpClientInterface $client;
    private string $apiKey;

    public function __construct(HttpClientInterface $client, string $geminiApiKey)
    {
        $this->client = $client;
        $this->apiKey = $geminiApiKey;
    }

    public function generateDescription(
        Energie $energie,
        float $consommation,
        int $niveauImpact
    ): string {
        $typeEnergie = $energie->getType();

        $prompt = "
Tu es un expert en efficacité énergétique.
Génère une recommandation claire, concise et convaincante destinée à un utilisateur final.

Données :
- Type d'énergie : $typeEnergie
- Consommation actuelle : $consommation kWh
- Niveau d'impact : $niveauImpact / 10

Objectif :
Aider l'utilisateur à réduire sa consommation avec des conseils pratiques.
Langue : français.
Tonalité : professionnelle et motivante.
Longueur : 3 à 4 phrases maximum.
";

        $response = $this->client->request(
            'POST',
            'https://generativelanguage.googleapis.com/v1/models/gemini-pro:generateContent?key=' . $this->apiKey,
            [
                'json' => [
                    'contents' => [
                        [
                            'parts' => [
                                ['text' => $prompt]
                            ]
                        ]
                    ]
                ]
            ]
        );

        $data = $response->toArray(false);

        return $data['candidates'][0]['content']['parts'][0]['text']
            ?? 'Réduisez votre consommation en adoptant des pratiques énergétiques responsables.';
    }
}
