<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Pengguna;
use App\Models\Riwayat;

class RiwayatController extends Controller
{
    public function loadRiwayat()
    {
        $user = Pengguna::findOrFail(1);

        $tier      = $user->tier;
        $points    = $user->poin;
        $totalGoal = 10000;
        $progress  = min(100, round(($points / $totalGoal) * 100));

        $riwayat = Riwayat::where('penggunaid', $user->penggunaid)
                    ->orderByDesc('timestamp')
                    ->limit(3)
                    ->get();

        return view('riwayat/riwayat', [
            'tier'     => $tier,
            'points'   => $points,
            'progress' => $progress,
            'riwayat'  => $riwayat
        ]);
    }

    public function loadRiwayatPoin()
    {
        $user = Pengguna::findOrFail(1);

        $riwayat = Riwayat::where('penggunaid', $user->penggunaid)
                    ->orderByDesc('timestamp')
                    ->get();

        return view('riwayat/riwayatpoin', [
            'riwayat' => $riwayat
        ]);
    }
}
