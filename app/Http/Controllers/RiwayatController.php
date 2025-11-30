<?php

// {{--5026231088 Tsanita Shafa Hadinanda--}}
namespace App\Http\Controllers;

use App\Models\Riwayat;

class RiwayatController extends Controller
{
    // dipakai di Reward, cuma balikin data
    public function loadRiwayatLimit($limit = 3)
    {
        return Riwayat::orderBy('timestamp', 'desc')
            ->limit($limit)
            ->get();
    }

    // halaman semua riwayat
    public function loadRiwayat()
{
    $all = Riwayat::orderBy('timestamp', 'desc')->get();

    // Group per bulan
    $grouped = $all->groupBy(function ($item) {
        return \Carbon\Carbon::parse($item->timestamp)->isoFormat('MMMM YYYY');
    });

    return view('riwayat.riwayat', [
        'grouped' => $grouped
    ]);
}

}
