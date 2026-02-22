<?php

namespace App\Controller\Front;

use App\Entity\Objectif;
use App\Entity\ActivitePhysique;
use App\Form\ObjectifType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

#[Route('/front/objectif')]
class ObjectifFrontController extends AbstractController
{
    #[Route('/', name: 'front_objectif_index', methods: ['GET'])]
    public function index(
        Request $request,
        EntityManagerInterface $em,
        HttpClientInterface $client
    ): Response {
        // ✅ same page as /health but keep URL /front/objectif/
        return $this->health($request, $em, $client);
    }

    #[Route('/new', name: 'front_objectif_new', methods: ['GET','POST'])]
    public function new(Request $request, EntityManagerInterface $em): Response
    {
        $objectif = new Objectif();
        $form = $this->createForm(ObjectifType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($objectif);
            $em->flush();

            if ($request->isXmlHttpRequest()) {
                return new Response(
                    '<div style="padding:14px;color:#00d4aa;font-weight:800;">Objectif saved ✅</div>',
                    200,
                    ['X-Modal-Success' => '1']
                );
            }

            return $this->redirectToRoute('front_objectif_index');
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('front/objectif/health.html.twig', [
                'form' => $form->createView(),
                'title' => 'New Objectif',
            ]);
        }

        return $this->render('front/objectif/new.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    // ✅ Force numeric id so "/health" is NOT treated as {id}
    #[Route('/{id<\d+>}', name: 'front_objectif_show', methods: ['GET'])]
    public function show(Request $request, Objectif $objectif): Response
    {
        if ($request->isXmlHttpRequest()) {
            return $this->render('front/objectif/_modal_show.html.twig', [
                'objectif' => $objectif,
            ]);
        }

        return $this->render('front/objectif/show.html.twig', [
            'objectif' => $objectif,
        ]);
    }

    #[Route('/{id<\d+>}/edit', name: 'front_objectif_edit', methods: ['GET','POST'])]
    public function edit(Request $request, Objectif $objectif, EntityManagerInterface $em): Response
    {
        $form = $this->createForm(ObjectifType::class, $objectif);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();

            if ($request->isXmlHttpRequest()) {
                return new Response(
                    '<div style="padding:14px;color:#00d4aa;font-weight:800;">Objectif updated ✅</div>',
                    200,
                    ['X-Modal-Success' => '1']
                );
            }

            return $this->redirectToRoute('front_objectif_index');
        }

        if ($request->isXmlHttpRequest()) {
            return $this->render('front/objectif/_modal_form.html.twig', [
                'form' => $form->createView(),
                'title' => 'Edit Objectif #' . $objectif->getId(),
            ]);
        }

        return $this->render('front/objectif/edit.html.twig', [
            'form' => $form->createView(),
            'objectif' => $objectif,
        ]);
    }

    #[Route('/{id<\d+>}', name: 'front_objectif_delete', methods: ['POST','DELETE'])]
    public function delete(Request $request, Objectif $objectif, EntityManagerInterface $em): Response
    {
        if ($this->isCsrfTokenValid('delete'.$objectif->getId(), $request->request->get('_token'))) {
            $em->remove($objectif);
            $em->flush();
        }

        return $this->redirectToRoute('front_objectif_index');
    }

    #[Route('/health', name: 'health', methods: ['GET'])]
    public function health(
        Request $request,
        EntityManagerInterface $em,
        HttpClientInterface $client
    ): Response {
        // ===================== SEARCH + SORT =====================
        $q = trim((string) $request->query->get('q', ''));

        $osort = (string) $request->query->get('osort', 'id');
        $odir  = strtolower((string) $request->query->get('odir', 'desc')) === 'asc' ? 'asc' : 'desc';

        $asort = (string) $request->query->get('asort', 'id');
        $adir  = strtolower((string) $request->query->get('adir', 'desc')) === 'asc' ? 'asc' : 'desc';

        $allowedOSort = ['id','description','type','statut','user'];
        if (!in_array($osort, $allowedOSort, true)) $osort = 'id';

        $allowedASort = ['id','type','duree','calories','date','intensite','objectif'];
        if (!in_array($asort, $allowedASort, true)) $asort = 'id';

        // ===================== OBJECTIFS QUERY =====================
        $qbO = $em->createQueryBuilder()
            ->select('o','u')
            ->from(Objectif::class, 'o')
            ->leftJoin('o.user', 'u');

        if ($q !== '') {
            $qbO->andWhere('LOWER(o.description) LIKE :q OR LOWER(o.type) LIKE :q OR LOWER(o.statut) LIKE :q OR LOWER(u.name) LIKE :q')
                ->setParameter('q', '%'.mb_strtolower($q).'%');
        }

        $oSortMap = [
            'id' => 'o.id',
            'description' => 'o.description',
            'type' => 'o.type',
            'statut' => 'o.statut',
            'user' => 'u.name',
        ];
        $qbO->orderBy($oSortMap[$osort], $odir);

        $objectifs = $qbO->getQuery()->getResult();

        // ===================== ACTIVITES QUERY =====================
        $qbA = $em->createQueryBuilder()
            ->select('a','o')
            ->from(ActivitePhysique::class, 'a')
            ->leftJoin('a.objectif', 'o');

        if ($q !== '') {
            $qbA->andWhere('LOWER(a.type) LIKE :q OR LOWER(a.intensite) LIKE :q OR LOWER(o.description) LIKE :q')
                ->setParameter('q', '%'.mb_strtolower($q).'%');
        }

        $aSortMap = [
            'id' => 'a.id',
            'type' => 'a.type',
            'duree' => 'a.duree',
            // ✅ FIXED: property renamed in entity
            'calories' => 'a.caloriesBrulees',
            'date' => 'a.date',
            'intensite' => 'a.intensite',
            'objectif' => 'o.description',
        ];
        $qbA->orderBy($aSortMap[$asort], $adir);

        $activites = $qbA->getQuery()->getResult();

        // ===================== ✅ METEO API =====================
        $cities = [
            'Tunis'    => ['lat' => 36.8065, 'lon' => 10.1815],
            'Sousse'   => ['lat' => 35.8256, 'lon' => 10.6360],
            'Sfax'     => ['lat' => 34.7406, 'lon' => 10.7603],
            'Bizerte'  => ['lat' => 37.2746, 'lon' => 9.8739],
            'Gabès'    => ['lat' => 33.8815, 'lon' => 10.0982],
            'Djerba'   => ['lat' => 33.8076, 'lon' => 10.8451],
            'Kairouan' => ['lat' => 35.6781, 'lon' => 10.0963],
        ];

        $city = (string) $request->query->get('city', 'Sousse');
        if (!isset($cities[$city])) {
            $city = 'Sousse';
        }

        $lat = $cities[$city]['lat'];
        $lon = $cities[$city]['lon'];

        $temperature = null;
        $wind = null;
        $condition = 'Inconnue';
        $meteoError = null;

        try {
            $response = $client->request('GET', 'https://api.open-meteo.com/v1/forecast', [
                'query' => [
                    'latitude' => $lat,
                    'longitude' => $lon,
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

            $temperature = (isset($current['temperature_2m']) && is_numeric($current['temperature_2m']))
                ? round((float) $current['temperature_2m'], 1)
                : null;

            $wind = (isset($current['wind_speed_10m']) && is_numeric($current['wind_speed_10m']))
                ? round((float) $current['wind_speed_10m'], 1)
                : null;

            $code = $current['weather_code'] ?? null;

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
            $meteoError = 'Erreur API météo : ' . $e->getMessage();
        }

        return $this->render('front/health.html.twig', [
            'q' => $q,
            'osort' => $osort,
            'odir' => $odir,
            'asort' => $asort,
            'adir' => $adir,

            'objectifs' => $objectifs,
            'activites' => $activites,

            // ✅ météo variables
            'city' => $city,
            'cities' => array_keys($cities),
            'temperature' => $temperature,
            'wind' => $wind,
            'condition' => $condition,
            'meteoError' => $meteoError,
        ]);
    }
}
