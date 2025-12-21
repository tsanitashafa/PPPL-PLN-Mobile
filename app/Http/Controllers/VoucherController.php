<?php
// {{--5026231088 Tsanita Shafa Hadinanda--}}
namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\Voucher;
use App\Http\Controllers\TukarPoinController;
use App\Http\Controllers\RiwayatController;
use Illuminate\Support\Facades\Session;


class VoucherController extends Controller
{
    public function loadReward(
        TukarPoinController $tukarCtrl,
        RiwayatController $riwayatCtrl
    ) {
        // ambil user yang lagi login dari session
        $userId = Session::get('authenticated_user_id') ?: Session::get('user_id');

        if (!$userId) {
            // kalau belum login, balikin ke welcome (atau route lain yang kamu mau)
            return redirect()->route('welcome');
        }

        $user = Pengguna::findOrFail($userId);

        $points = (int) $user->poin;

        // ======================
        // HITUNG TIER DARI POIN
        // ======================
        // silakan ubah batas kalau mau
        if ($points >= 5000) {
            $calculatedTier = 'Gold';
        } elseif ($points >= 1000) {
            $calculatedTier = 'Silver';
        } else {
            $calculatedTier = 'Bronze';
        }

        // ============================
        // UPDATE TIER DI DATABASE
        // (abaikan huruf besar kecil)
        // ============================
        $currentTier = $user->tier ?? '';
        if (strtolower($currentTier) !== strtolower($calculatedTier)) {
            $user->tier = $calculatedTier;   // simpan rapi "Gold/Silver/Bronze"
            $user->save();
        }

        // ======================
        // PILIH GAMBAR BERDASAR TIER
        // ======================
        switch (strtolower($calculatedTier)) {
            case 'gold':
                $tierImage = 'gold.png';
                break;
            case 'silver':
                $tierImage = 'silver.png';
                break;
            default: // bronze / lainnya
                $tierImage = 'bronze.png';
                break;
        }

        // ======================
        // PROGRESS BAR (MAX 5000)
        // ======================
        $totalGoal = 5000; // << sesuai permintaan
        $progress = min(100, round(($points / $totalGoal) * 100));

        // 3 voucher
        $vouchers = Voucher::limit(3)->get();

        // 3 tukar dari TukarPoinController
        $tukarItems = $tukarCtrl->loadTukar(3);

        // 3 riwayat dari RiwayatController
        $riwayatLast = $riwayatCtrl->loadRiwayatLimit(3);

        return view('voucher/reward', [
            'tier' => $calculatedTier,
            'tierImage' => $tierImage,
            'points' => $points,
            'progress' => $progress,
            'vouchers' => $vouchers,
            'tukarItems' => $tukarItems,
            'riwayatLast' => $riwayatLast,
        ]);
    }

    public function loadVoucher()
    {
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

    // 5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH
    // Tambahkan di VoucherController.php

    public function pakaiVoucher($id)
    {
        $voucher = Voucher::findOrFail($id);

        // Simpan ke session agar bisa dibaca di beli-token
        session([
            'selected_voucher_id' => $voucher->rewardid,
            'selected_voucher_name' => $voucher->rewardname,
            'selected_voucher_value' => $voucher->nilai // Misal nilainya 5000
        ]);

        return redirect()->route('beli-token');
    }
}
