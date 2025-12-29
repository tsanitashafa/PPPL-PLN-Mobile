<?php
// {{--5026231088 Tsanita Shafa Hadinanda--}}

namespace App\Http\Controllers;

use App\Models\TukarPoin;
use App\Models\Pengguna;
use App\Models\Riwayat;
use App\Http\Controllers\BeliTokenController;
use Carbon\Carbon;
use Illuminate\Support\Facades\Session;

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

        // ambil user yang lagi login dari session
        $userId = Session::get('authenticated_user_id') ?: Session::get('user_id');

        if (!$userId) {
            // kalau belum login, balikin ke welcome (atau route lain yang kamu mau)
            return redirect()->route('welcome');
        }

        $user = Pengguna::findOrFail($userId);

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
        $pelangganId = DB::table('pelanggan')
            ->where('penggunaid', (int) $user->penggunaid)
            ->orderByDesc('pelangganid')   // ambil yang terbaru (id terbesar)
            ->value('pelangganid');

        if (!$pelangganId) {
            return back()->withErrors('Pelanggan untuk pengguna ini belum ada.');
        }

        $kodeToken = $beliTokenCtrl->generateNoToken(
            (int) $tukar->nilai,
            (int) $pelangganId
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
