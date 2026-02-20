<?php

namespace App\Service;

use App\Entity\Energie;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GroqRecommandationService
{
    public function __construct(
        private HttpClientInterface $client,
        private string $groqApiKey
    ) {}

    public function generateDescription(Energie $energie, float $valeur, int $impactInt): string
    {
        $type = (string) $energie->getTypeEnergie();
        $periode = (float) $energie->getPeriode();

        $periodeSafe = max($periode, 1.0);
        $moyenneParJour = $valeur / $periodeSafe;

        $unit = match (mb_strtolower($type)) {
            'électricité' => 'kWh',
            'gaz' => 'm³',
            'eau' => 'L',
            default => 'unités',
        };

        $impactTxt = match ($impactInt) {
            1 => 'faible',
            2 => 'moyen',
            3 => 'élevé',
            default => 'moyen',
        };

        $valeurFmt  = number_format($valeur, 2, ',', ' ');
        $periodeFmt = number_format($periode, 0, ',', ' ');
        $moyenneFmt = number_format($moyenneParJour, 2, ',', ' ');

        $prompt =
            "Tu es un expert en efficacité énergétique.\n\n"
            . "Structure obligatoire:\n"
            . "Diagnostic : ...\n"
            . "- Action 1\n"
            . "- Action 2\n"
            . "- Action 3\n"
            . "Suivi : ...\n\n"
            . "Données:\n"
            . "- Type: {$type}\n"
            . "- Valeur: {$valeurFmt} {$unit}\n"
            . "- Période: {$periodeFmt} jours\n"
            . "- Moyenne: {$moyenneFmt} {$unit}/jour\n"
            . "- Impact: {$impactTxt}\n\n"
            . "Chaque action doit contenir un chiffre ou une règle précise.";

        try {
            $response = $this->client->request(
                "POST",
                "https://api.groq.com/openai/v1/chat/completions",
                [
                    "headers" => [
                        "Authorization" => "Bearer {$this->groqApiKey}",
                        "Content-Type"  => "application/json",
                    ],
                    "json" => [
                        "model" => "llama-3.3-70b-versatile",
                        "messages" => [
                            [
                                "role" => "system",
                                "content" => "Tu es un assistant spécialisé en recommandations énergétiques."
                            ],
                            [
                                "role" => "user",
                                "content" => $prompt
                            ]
                        ],
                        "temperature" => 0.6,
                        "max_tokens" => 400
                    ],
                ]
            );

            $data = $response->toArray(false);

            if (isset($data["error"])) {
                throw new \RuntimeException(json_encode($data["error"]));
            }

            $text = $data["choices"][0]["message"]["content"] ?? "";

            if (trim($text) === "") {
                throw new \RuntimeException("Groq returned empty text");
            }

            return trim($text);

        } catch (\Throwable $e) {
            return "⚠️ IA indisponible : " . $e->getMessage();
        }
    }
}
