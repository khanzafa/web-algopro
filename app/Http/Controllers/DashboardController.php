<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class DashboardController extends Controller
{
    //INDEX
    public function index()
    {
        $user = Auth::user();

        // Fetch necessary data for the dashboard (optimize queries if needed)
        $users = User::all(); // Consider filtering or pagination for large datasets
        $users_total = User::all()->count();
        $tbjp_user = User::where('prodi', 'TBJP')->count();
        $tbjp_percentage = round(($tbjp_user / $users_total) * 100, 2);
        $tep_user = User::where('prodi', 'TEP')->count();
        $tep_percentage = round(($tep_user / $users_total) * 100, 2);
        $tmp_user = User::where('prodi', 'TMP')->count();
        $tmp_percentage = round(($tmp_user / $users_total) * 100, 2);
        $mtp_user = User::where('prodi', 'MTP')->count();
        $mtp_percentage = round(($mtp_user / $users_total) * 100, 2);
        $girls = User::where('gender', 'Perempuan')->count();
        $boys = User::where('gender', 'Laki-laki')->count();

        // Get user registered count per day in the last 7 days
        $users_per_day = User::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->where('created_at', '>=', now()->subDays(7))
            ->groupBy('date')
            ->get();

        $chart_labels = [];
        $chart_data = [];
        foreach ($users_per_day as $day) {
            $chart_labels[] = $day->date;
            $chart_data[] = $day->count;
        }

        $dummy_data = [
            'labels' => ['January', 'February', 'March', 'April', 'May'],
            'data' => [65, 59, 80, 81, 56],
        ];

        return view(
            'dashboard',
            compact(
                'dummy_data', // Dummy data for testing chart
                'users_per_day',
                'chart_labels',
                'chart_data',
                'user',
                'users',
                'users_total',
                'tbjp_user',
                'tep_user',
                'tmp_user',
                'mtp_user',
                'girls',
                'boys',
                'tbjp_percentage',
                'tep_percentage',
                'tmp_percentage',
                'mtp_percentage'
            )
        );
        // return view('dashboard');
    }

    public function users()
    {
        $users = User::all();
        return view('users', compact('users'));
    }
}
