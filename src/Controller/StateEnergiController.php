<?php

namespace App\Controller;

use App\Entity\Energie;
use App\Entity\Recommandation;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class StateEnergiController extends AbstractController
{
    #[Route('/stateenergi', name: 'stateenergi')]
    public function index(Request $request, EntityManagerInterface $em): Response
    {
        $currentUser = $this->getUser();
        if (!$currentUser instanceof User) {
            return $this->redirectToRoute('app_login');
        }

        if ($currentUser->isBlocked()) {
            throw $this->createAccessDeniedException('Votre compte est bloqué.');
        }

        $isAdmin = $this->isGranted('ROLE_ADMIN');

        // ✅ Admin peut filtrer par utilisateur via ?user=ID, sinon "tous"
        $selectedUser = null;
        $selectedUserId = $request->query->get('user'); // "all" ou id

        if ($isAdmin && $selectedUserId && $selectedUserId !== 'all') {
            $selectedUser = $em->getRepository(User::class)->find($selectedUserId);
            if (!$selectedUser) {
                $this->addFlash('error', 'Utilisateur invalide.');
                return $this->redirectToRoute('stateenergi', ['user' => 'all']);
            }
        }

        // ✅ Si pas admin => stats du user connecté uniquement
        if (!$isAdmin) {
            $selectedUser = $currentUser;
        }

        // ===================== DATA ENERGIES =====================
        // Si $selectedUser === null => admin en mode "tous"
        if ($selectedUser) {
            $energies = $em->getRepository(Energie::class)->findBy(['user' => $selectedUser]);
        } else {
            $energies = $em->getRepository(Energie::class)->findAll();
        }

        // ===================== DATA RECOMMANDATIONS =====================
        // ⚠️ Si Recommandation est reliée à User (ex: rec->getUser()), tu peux filtrer pareil.
        // Sinon on garde global.
        $allRecs = $em->getRepository(Recommandation::class)->findAll();

        // ===================== COUNTS =====================
        // Totaux globaux (dashboard global)
        $totalUsers = $em->getRepository(User::class)->count([]);

        // Total energies / recs selon filtre
        $totalEnergies = count($energies);
        $totalRecommandations = count($allRecs);

        // ===================== CALCULS STATS =====================
        $totalConsommation = 0;

        $monthlyData = array_fill(1, 12, 0);
        $year = (int) date('Y');

        $currentMonth = (int) date('n');
        $lastMonth = $currentMonth > 1 ? $currentMonth - 1 : 12;
        $lastMonthYear = $currentMonth > 1 ? $year : $year - 1;

        $currentMonthTotal = 0;
        $lastMonthTotal = 0;

        $now = new \DateTime();
        $activities = [];
        $recentTransactions = [];
        $typeTotals = [];

        foreach ($energies as $energy) {
            $date = $energy->getDateEnregistrement();
            if (!$date) {
                continue;
            }

            $val = (float) $energy->getValeur();
            $totalConsommation += $val;

            // Mensuel (année courante)
            if ((int)$date->format('Y') === $year) {
                $monthIndex = (int)$date->format('n');
                $monthlyData[$monthIndex] += $val;
            }

            // Mois actuel
            if ((int)$date->format('n') === $currentMonth && (int)$date->format('Y') === $year) {
                $currentMonthTotal += $val;
            }

            // Mois dernier
            if ((int)$date->format('n') === $lastMonth && (int)$date->format('Y') === $lastMonthYear) {
                $lastMonthTotal += $val;
            }

            // Activités récentes
            $diff = $now->diff($date);
            if ($diff->days === 0 && $diff->h === 0) {
                $timeAgo = $diff->i . ' minutes ago';
            } elseif ($diff->days === 0) {
                $timeAgo = $diff->h . ' heures ago';
            } else {
                $timeAgo = $diff->days . ' jours ago';
            }

            $u = $energy->getUser();
            $userName = $u ? $u->getName() : '—';
            $userEmail = $u ? $u->getEmail() : '';
            $initials = $u && $u->getName() ? strtoupper(substr($u->getName(), 0, 2)) : '--';

            $activities[] = [
                'userName' => $userName,
                'userInitials' => $initials,
                'action' => 'a enregistré ' . $energy->getTypeEnergie(),
                'value' => number_format($val, 2) . ' kWh',
                'timeAgo' => $timeAgo
            ];

            $recentTransactions[] = [
                'userName' => $userName,
                'userEmail' => $userEmail,
                'userInitials' => $initials,
                'product' => $energy->getTypeEnergie(),
                'date' => $date->format('d M, Y'),
                'status' => 'completed',
                'amount' => number_format($val, 2) . ' kWh'
            ];

            $type = (string) $energy->getTypeEnergie();
            if (!isset($typeTotals[$type])) {
                $typeTotals[$type] = 0;
            }
            $typeTotals[$type] += $val;
        }

        // ÉVOLUTION (%)
        $energyChangePercent = 0;
        $energyChangeDirection = 'positive';

        if ($lastMonthTotal > 0) {
            $energyChangePercent = round((($currentMonthTotal - $lastMonthTotal) / $lastMonthTotal) * 100, 1);
            $energyChangeDirection = $energyChangePercent >= 0 ? 'positive' : 'negative';
        }

        // GRAPHIQUE MENSUEL
        $months = ['Jan', 'Fév', 'Mar', 'Avr', 'Mai', 'Juin', 'Juil', 'Août', 'Sep', 'Oct', 'Nov', 'Déc'];
        $monthlyGraph = [];

        foreach ($monthlyData as $monthIndex => $value) {
            $monthlyGraph[] = [
                'month' => $months[$monthIndex - 1],
                'value' => $value,
                'height' => min(200, max(20, ($value > 0 ? ($value / 10) : 20)))
            ];
        }

        // DONUT CHART (Top 3 types)
        arsort($typeTotals);
        $topTypes = array_slice($typeTotals, 0, 3, true);
        $totalAll = array_sum($topTypes);

        $colors = ['cyan', 'magenta', 'purple'];
        $pieData = [];
        $i = 0;

        foreach ($topTypes as $type => $total) {
            $percentage = $totalAll > 0 ? round(($total / $totalAll) * 100) : 0;
            $pieData[] = [
                'type' => $type,
                'percentage' => $percentage,
                'total' => number_format($total, 2),
                'color' => $colors[$i] ?? 'cyan'
            ];
            $i++;
        }

        // RECOMMANDATIONS PAR IMPACT (global)
        $impactCounts = [];
        foreach ($allRecs as $rec) {
            $impact = $rec->getNiveauImpact();
            if (!isset($impactCounts[$impact])) {
                $impactCounts[$impact] = 0;
            }
            $impactCounts[$impact]++;
        }

        $totalRecs = array_sum($impactCounts);
        $progressColors = ['cyan', 'magenta', 'purple', 'cyan'];

        $progressData = [];
        $pIndex = 0;

        foreach ($impactCounts as $impact => $count) {
            $percentage = $totalRecs > 0 ? round(($count / $totalRecs) * 100) : 0;
            $progressData[] = [
                'label' => 'Impact ' . $impact,
                'percentage' => $percentage,
                'color' => $progressColors[$pIndex] ?? 'cyan'
            ];
            $pIndex++;
        }

        // ✅ pour dropdown admin
        $users = $isAdmin ? $em->getRepository(User::class)->findAll() : [];

        return $this->render('back/energie/stateenergi.html.twig', [
            'active_page' => 'stateenergi',

            'isAdmin' => $isAdmin,
            'users' => $users,
            'selectedUserId' => $selectedUser ? $selectedUser->getId() : 'all',

            'totalEnergies' => $totalEnergies,
            'totalRecommandations' => $totalRecommandations,
            'totalUsers' => $totalUsers,

            'totalConsommation' => number_format($totalConsommation, 2),
            'energyChangePercent' => abs($energyChangePercent),
            'energyChangeDirection' => $energyChangeDirection,

            'monthlyData' => $monthlyGraph,
            'pieData' => $pieData,
            'progressData' => $progressData,

            'activities' => array_slice($activities, 0, 5),
            'recentTransactions' => array_slice($recentTransactions, 0, 5),
        ]);
    }
}
