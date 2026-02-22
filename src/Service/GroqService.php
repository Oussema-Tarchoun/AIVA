<?php

namespace App\Service;

/**
 * Service centralisé pour les appels à l'API Groq.
 * Extrait depuis FrontRepasController pour être réutilisable.
 */
class GroqService
{
    private string $apiKey;

    public function __construct(string $groqApiKey)
    {
        $this->apiKey = $groqApiKey;
    }

    /**
     * Analyse les repas de la semaine et retourne le rapport structuré.
     */
    public function analyzeWeekly(string $resumeText): ?array
    {
        $system = <<<SYS
Tu es un expert en nutrition et coach de santé. Analyse ces repas et génère un rapport.
Réponds UNIQUEMENT en JSON valide, sans markdown.

Schéma EXACT:
{
  "resume": "string",
  "points_positifs": ["string"],
  "points_amelioration": ["string"],
  "analyse_par_jour": [{ "jour": "string", "commentaire": "string" }],
  "conseils": ["string"],
  "score_semaine": number
}

Règles: 2-4 points positifs, 2-4 améliorations, 3-5 conseils. Score 0-100. Français.
SYS;

        try {
            $body = json_encode([
                'model'           => 'llama-3.1-8b-instant',
                'messages'        => [
                    ['role' => 'system', 'content' => $system],
                    ['role' => 'user',   'content' => $resumeText],
                ],
                'max_tokens'      => 1200,
                'temperature'     => 0.3,
                'response_format' => ['type' => 'json_object'],
            ], JSON_UNESCAPED_UNICODE | JSON_THROW_ON_ERROR);
        } catch (\JsonException) {
            return null;
        }

        $resp = $this->callApi($body);
        if (isset($resp['error'])) {
            return null;
        }

        $text = $resp['choices'][0]['message']['content'] ?? '';
        return $this->parseJson($text);
    }

    // ── Helpers ────────────────────────────────────────────────────────────

    public function callApi(string $jsonBody): array
    {
        if (empty($this->apiKey)) {
            return ['error' => 'GROQ_API_KEY manquante'];
        }

        $ch = curl_init('https://api.groq.com/openai/v1/chat/completions');
        curl_setopt_array($ch, [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST           => true,
            CURLOPT_HTTPHEADER     => [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->apiKey,
            ],
            CURLOPT_POSTFIELDS     => $jsonBody,
            CURLOPT_CONNECTTIMEOUT => 5,
            CURLOPT_TIMEOUT        => 30,
        ]);

        $raw    = curl_exec($ch);
        $status = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $err    = curl_error($ch);
        curl_close($ch);

        if ($raw === false) {
            return ['error' => 'Curl failed: ' . $err];
        }

        $resp = json_decode($raw, true) ?? [];
        if ($status < 200 || $status >= 300) {
            return ['error' => 'Groq error ' . $status, 'details' => $resp];
        }

        return $resp;
    }

    public function parseJson(string $text): ?array
    {
        $start = strpos($text, '{');
        $end   = strrpos($text, '}');
        if ($start !== false && $end !== false && $end > $start) {
            $text = substr($text, $start, $end - $start + 1);
        }
        $data = json_decode($text, true);
        if (!is_array($data)) {
            $text .= str_repeat(']', max(0, substr_count($text, '[') - substr_count($text, ']')));
            $text .= str_repeat('}', max(0, substr_count($text, '{') - substr_count($text, '}')));
            $data  = json_decode($text, true);
        }
        return is_array($data) ? $data : null;
    }
}
