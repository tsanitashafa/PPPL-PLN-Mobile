<?php
<<<<<<< HEAD

namespace App\Http\Controllers;

class VoucherController extends Controller
{
    public function loadVoucherLimit($limit)
    {
=======
// {{--5026231088 Tsanita Shafa Hadinanda--}}
namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Voucher;
use App\Http\Controllers\TukarPoinController;
use App\Http\Controllers\RiwayatController;

class VoucherController extends Controller
{
    public function loadReward(
        TukarPoinController $tukarCtrl,
        RiwayatController $riwayatCtrl
    ) {
        $user = Pengguna::find(1);

        $tier      = $user->tier;
        $points    = $user->poin;
        $totalGoal = 2000;
        $progress  = min(100, round(($points / $totalGoal) * 100));

        // 3 voucher
        $vouchers   = Voucher::limit(3)->get();

        // 3 tukar dari TukarPoinController
        $tukarItems = $tukarCtrl->loadTukar(3);

        // 3 riwayat dari RiwayatController
        $riwayatLast = $riwayatCtrl->loadRiwayatLimit(3);

        return view('voucher/reward', [
            'tier'        => $tier,
            'points'      => $points,
            'progress'    => $progress,
            'vouchers'    => $vouchers,
            'tukarItems'  => $tukarItems,
            'riwayatLast' => $riwayatLast,
        ]);
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
    }

    public function loadVoucher()
    {
<<<<<<< HEAD
    }

    public function loadVoucherById($id)
    {
    }

    public function getDataReward()
    {
    }

    public function loadReward()
    {
    }

    public function redeemReward($id)
    {
    }
}
=======
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
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
