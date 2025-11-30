<?php
// {{--5026231088 Tsanita Shafa Hadinanda--}}

namespace App\Http\Controllers;

use App\Models\TukarPoin;
use App\Models\Pengguna;
use App\Models\Riwayat;
use App\Http\Controllers\BeliTokenController;
use Carbon\Carbon;

use Illuminate\Support\Facades\DB;

class TukarPoinController extends Controller
{
    // dipakai di Reward, cuma balikin data
    public function loadTukar($limit = 3)
    {
        return TukarPoin::limit($limit)->get();
    }

    // halaman semua tukar
    public function loadTukarSemua()
    {
        $tukarItems = TukarPoin::all();

        return view('tukar/tukar', [
            'tukarItems' => $tukarItems,
        ]);
    }

    public function loadTukarById($id)
    {
        $tukar = TukarPoin::findOrFail($id);

        return view('tukar/tukar2', [
            'tukar' => $tukar,
        ]);
    }

    // =====================================
    // REDEEM POIN
    // =====================================
    public function redeem($id)
    {
        $id    = (int) $id;
        $tukar = TukarPoin::findOrFail($id);

        // anggap user login = id 1
        $user = Pengguna::findOrFail(1);

        // 1. cek poin cukup atau tidak
        if ((int) $user->poin < (int) $tukar->poindibutuhkan) {
            // poin tidak cukup → halaman gagal
            return view('tukar/tukar-gagal', ['tukar' => $tukar]);
        }

        // 2. poin cukup → kurangi poin user
        $user->poin = (int) $user->poin - (int) $tukar->poindibutuhkan;
        $user->save();

        // 3. generate & simpan token ke belitoken (SATU fungsi)
        $beliTokenCtrl = app(BeliTokenController::class);
        $kodeToken = $beliTokenCtrl->generateNoToken(
            (int) $tukar->nilai,        // jumlahbayar
            (int) $user->penggunaid     // pelangganid
        );

        // 4. simpan token juga ke tukarpoin
        $tukar->generatenotoken = $kodeToken;
        $tukar->penggunaid      = $user->penggunaid;
        $tukar->redeem          = 1;
        $tukar->save();

        // 5. CATAT RIWAYAT POIN (negatif karena mengurangi poin)
        Riwayat::create([
            'deskaktivitas' => $tukar->judul,                     // contoh: "Token Listrik Senilai Rp50.000"
            'timestamp'     => Carbon::now()->toDateTimeString(), // 'YYYY-mm-dd HH:ii:ss'
            'satuanlistrik' => 'KWH',                             // sesuai data lain di tabelmu
            'riwayatpoin'   => -1 * (int) $tukar->poindibutuhkan, // poin berkurang
            'penggunaid'    => $user->penggunaid,
        ]);

        // 6. halaman berhasil
        return view('tukar/tukar-berhasil', [
            'kodeToken' => $kodeToken,
        ]);
    }


}
