<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Voucher;
use App\Models\Riwayat;

class VoucherController extends Controller
{
    public function loadReward()
    {
        $user = Pengguna::find(1);

        $tier      = $user->tier;
        $points    = $user->poin;
        $totalGoal = 2000;
        $progress  = min(100, round(($points / $totalGoal) * 100));

        // HALAMAN REWARD: cuma 3 voucher
        $vouchers = Voucher::limit(3)->get();

        return view('voucher/reward', [
            'tier'     => $tier,
            'points'   => $points,
            'progress' => $progress,
            'vouchers' => $vouchers,
        ]);
    }

    public function loadVoucher()
    {
        // semua voucher tanpa limit
        $vouchers = Voucher::all();

        return view('voucher/voucher', [
            'vouchers' => $vouchers,
        ]);
    }

    public function loadInfoVoucher($id)
    {
        $voucher = Voucher::findOrFail($id);

        return view('voucher/infovoucher', [
            'voucher' => $voucher
        ]);
    }


}
