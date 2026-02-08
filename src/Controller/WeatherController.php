<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class WeatherController extends AbstractController
{
    #[Route('/back/api/meteo', name: 'back_api_meteo')]
    public function meteo(Request $request, HttpClientInterface $client): Response
    {
        // Liste Tunisie (coordonnées fiables)
        $cities = [
            'Tunis'    => ['lat' => 36.8065, 'lon' => 10.1815],
            'Sousse'   => ['lat' => 35.8256, 'lon' => 10.6360],
            'Sfax'     => ['lat' => 34.7406, 'lon' => 10.7603],
            'Bizerte'  => ['lat' => 37.2746, 'lon' => 9.8739],
            'Gabès'    => ['lat' => 33.8815, 'lon' => 10.0982],
            'Djerba'   => ['lat' => 33.8076, 'lon' => 10.8451],
            'Kairouan' => ['lat' => 35.6781, 'lon' => 10.0963],
        ];

        $city = $request->query->get('city', 'Sousse');
        if (!isset($cities[$city])) {
            $city = 'Sousse';
        }

        $lat = $cities[$city]['lat'];
        $lon = $cities[$city]['lon'];

        $temperature = null;
        $wind = null;
        $condition = 'Inconnue';
        $error = null;

        try {
            $response = $client->request('GET', 'https://api.open-meteo.com/v1/forecast', [
                'query' => [
                    'latitude' => $lat,
                    'longitude' => $lon,

                    // API récente: current=...
                    'current' => 'temperature_2m,weather_code,wind_speed_10m',

                    'temperature_unit' => 'celsius',
                    'wind_speed_unit' => 'kmh',
                    'timezone' => 'Africa/Tunis',
                ],
            ]);

            if ($response->getStatusCode() !== 200) {
                throw new \RuntimeException('HTTP ' . $response->getStatusCode());
            }

            $data = $response->toArray(false);

            if (!isset($data['current'])) {
                throw new \RuntimeException('Champ current manquant');
            }

            $current = $data['current'];

            // Sécurisation: éviter NaN / string
            $temperature = (isset($current['temperature_2m']) && is_numeric($current['temperature_2m']))
                ? round((float) $current['temperature_2m'], 1)
                : null;

            $wind = (isset($current['wind_speed_10m']) && is_numeric($current['wind_speed_10m']))
                ? round((float) $current['wind_speed_10m'], 1)
                : null;

            $code = $current['weather_code'] ?? null;

            // Mapping plus complet
            $condition = match (true) {
                $code === 0 => 'Ciel dégagé',

                in_array($code, [1, 2, 3], true) => 'Nuageux',
                in_array($code, [45, 48], true) => 'Brouillard',

                in_array($code, [51, 53, 55], true) => 'Bruine',
                in_array($code, [61, 63, 65], true) => 'Pluie',
                in_array($code, [80, 81, 82], true) => 'Averses',

                in_array($code, [71, 73, 75, 77], true) => 'Neige',
                in_array($code, [85, 86], true) => 'Averses de neige',

                in_array($code, [95], true) => 'Orage',
                in_array($code, [96, 99], true) => 'Orage + grêle',

                is_numeric($code) => 'Variable',
                default => 'Inconnue',
            };

        } catch (\Throwable $e) {
            $error = 'Erreur API météo : ' . $e->getMessage();
        }

        return $this->render('back/api/meteo.html.twig', [
            'city' => $city,
            'cities' => array_keys($cities),
            'temperature' => $temperature,
            'wind' => $wind,
            'condition' => $condition,
            'error' => $error,
        ]);
    }
}
