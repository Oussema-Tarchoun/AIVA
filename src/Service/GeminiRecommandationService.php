<?php

namespace App\Service;

use App\Entity\Energie;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class GeminiRecommandationService
{
    public function __construct(
        private HttpClientInterface $client,
        private string $geminiApiKey
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

        // ✅ formatage lisible
        $valeurFmt = number_format($valeur, 2, ',', ' ');
        $periodeFmt = number_format($periode, 0, ',', ' ');
        $moyenneFmt = number_format($moyenneParJour, 2, ',', ' ');

        // ✅ contraintes très spécifiques selon type (anti-générique)
        $typeActions = match (mb_strtolower($type)) {
            'électricité' => "Actions obligatoires (choisis exactement 3):\n"
                . "- Remplacer des ampoules par LED et préciser une cible (ex: 5 ampoules).\n"
                . "- Réduire les veilles (multiprise avec interrupteur) et citer 2 appareils typiques (TV/box/chargeurs).\n"
                . "- Optimiser clim/chauffage électrique: consigne 24–26°C en été ou 19–20°C en hiver.\n"
                . "- Programmer chauffe-eau / machine à laver en heures creuses (si applicable).\n",
            'gaz' => "Actions obligatoires (choisis exactement 3):\n"
                . "- Ajuster thermostat: -1°C et expliquer le gain.\n"
                . "- Programmer chauffage par plages horaires.\n"
                . "- Vérifier chaudière (entretien, pression) + purge radiateurs.\n"
                . "- Améliorer isolation (joints fenêtres/portes).\n",
            'eau' => "Actions obligatoires (choisis exactement 3):\n"
                . "- Détecter fuite: test compteur/écoute chasse d’eau.\n"
                . "- Installer mousseurs/réducteurs de débit.\n"
                . "- Douche: fixer une durée cible (ex: 5 minutes).\n"
                . "- Optimiser chasse d’eau (double débit).\n",
            default => "Donne 3 actions concrètes, spécifiques et mesurables.\n",
        };

        $prompt =
            "Tu es un expert en efficacité énergétique.\n"
            . "Ta réponse ne doit pas être générique.\n\n"

            . "Règles:\n"
            . "- Pas de salutation.\n"
            . "- Les données sont enregistrées (saisies), pas mesurées.\n"
            . "- Interdit: mesuré/mesurée/capteur/compteur.\n"
            . "- Réponds en français.\n\n"

            . "Structure obligatoire:\n"
            . "1) Ligne 'Diagnostic :' (1 phrase) qui reprend EXACTEMENT les chiffres.\n"
            . "2) 3 puces '-' (actions concrètes, mesurables, adaptées au type).\n"
            . "3) Ligne 'Suivi :' (1 phrase) expliquant quoi comparer dans l'app.\n\n"

            . "Chiffres à utiliser:\n"
            . "- Type: {$type}\n"
            . "- Valeur: {$valeurFmt} {$unit}\n"
            . "- Période: {$periodeFmt} jours\n"
            . "- Moyenne: {$moyenneFmt} {$unit}/jour\n"
            . "- Impact: {$impactTxt}\n\n"

            . "Diagnostic exact à écrire:\n"
            . "Diagnostic : Consommation enregistrée : {$valeurFmt} {$unit} sur {$periodeFmt} jours (moyenne {$moyenneFmt} {$unit}/jour), impact {$impactTxt}.\n\n"

            . $typeActions . "\n"

            . "⚠️ Contraintes anti-basique:\n"
            . "- Chaque action doit contenir un détail chiffré OU une règle précise (température, minutes, nombre d’ampoules, horaires, etc.).\n"
            . "- Interdit: 'réduisez votre consommation' sans action concrète.\n";

        $model = 'models/gemini-2.5-flash';

        try {
            $response = $this->client->request(
                'POST',
                "https://generativelanguage.googleapis.com/v1beta/{$model}:generateContent?key={$this->geminiApiKey}",
                [
                    'headers' => ['Content-Type' => 'application/json'],
                    'json' => [
                        'contents' => [
                            ['parts' => [['text' => $prompt]]],
                        ],
                        'generationConfig' => [
                            'temperature' => 0.5,   // ✅ moins de blabla
                            'topP' => 0.9,
                            'maxOutputTokens' => 450,
                        ],
                    ],
                ]
            );

            $data = $response->toArray(false);

            if (isset($data['error'])) {
                throw new \RuntimeException('Gemini API error: ' . json_encode($data['error']));
            }

            $parts = $data['candidates'][0]['content']['parts'] ?? [];
            $text = '';
            foreach ($parts as $p) {
                if (isset($p['text'])) $text .= $p['text'] . "\n";
            }
            $text = trim($text);

            if ($text === '') {
                throw new \RuntimeException('Gemini returned empty text');
            }

            return $text;

        } catch (\Throwable $e) {
            return "⚠️ IA indisponible : " . $e->getMessage();
        }
    }
}
