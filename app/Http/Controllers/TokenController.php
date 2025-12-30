<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pelanggan; // Import Model Pelanggan
use Carbon\Carbon;

class TokenController extends Controller
{
     // Tampilkan form input token (Tiara Aulia Azadirachta Indica | 5026231148)
    public function showForm()
    {
        return view('MasukkanToken.masukkan-token');
    }

    public function verifikasiToken(Request $request)
    {
        $request->validate([
            'nomor_token' => 'required'
        ]);

        // 1. ambil token dari belitoken
        $token = DB::table('belitoken')
            ->where('generatenotoken', $request->nomor_token)
            ->first();

        if (!$token || $token->is_used == true) {
            return redirect()->route('gagal');
        }

        // 2. hitung total kWh dari jumlahbayar
        $hargaPerKwh = 1000;
        $totalKwh = $token->jumlahbayar / $hargaPerKwh;

        // 3. PERKIRAAN pemakaian awal
        $pemakaianAwal = 0.3; // kWh (assumption)

        // 4. tanggal hari ini
        $tanggal = Carbon::now()->format('Y-m-d');

        // 5. update token jadi terpakai
        DB::table('belitoken')
            ->where('generatenotoken', $request->nomor_token)
            ->update([
                'is_used' => true
            ]);

        // 6. simpan ke cektoken
        DB::table('cektoken')->insert([
            'pelangganid'      => $token->pelangganid,
            'totalkwh'         => $totalKwh,
            'penggunaantoken'  => $pemakaianAwal,
            'tanggal'          => $tanggal
        ]);

        return redirect()->route('selamat');
    }

    public function selamat()
    {
        return view('MasukkanToken.token-success');
    }

    public function gagal()
    {
        return view('MasukkanToken.token-gagal');
    }


// --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH

    // check duluh nanti belum fixs
    /**
     * Menampilkan halaman beli token (asumsi)
     */
    public function showBuyTokenPage()
    {
        // Ganti dengan view yang sesuai
        return view('beli-token/beli-token');
    }

    /**
     * Mencari Nama Pelanggan berdasarkan Nomor Meter.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function cariPelanggan(Request $request)
    {
        // 1. Validasi input: pastikan 'nomor_meter' ada dan merupakan 8 digit
        $validated = $request->validate([
            'nomor_meter' => 'required|digits:8',
        ]);

        $nomorMeter = $validated['nomor_meter'];

        // 2. Cari pelanggan di database
        $pelanggan = Pelanggan::where('nomormeter', $nomorMeter)->first();

        // 3. Cek hasil pencarian
        if ($pelanggan) {
            // Jika ditemukan, kembalikan nama pelanggan
            // Sensor nama (seperti contoh: AR*****AH)
            $namaPelanggan = $this->sensorNama($pelanggan->nama);

            return response()->json([
                'success' => true,
                'nama_pelanggan' => $namaPelanggan,
                'message' => 'Data pelanggan ditemukan.'
            ]);
        } else {
            // Jika tidak ditemukan
            return response()->json([
                'success' => false,
                'message' => 'Nomor Meter tidak terdaftar.'
            ], 404); // Menggunakan kode status 404 Not Found
        }
    }

    /**
     * Fungsi helper untuk mensensor nama (opsional)
     * Contoh: "Rudi Hartono" menjadi "Ru*****no"
     */
    private function sensorNama($nama)
    {
        if (strlen($nama) <= 3) {
            return $nama; // Jangan sensor jika terlalu pendek
        }

        // Ambil 2 karakter pertama
        $start = substr($nama, 0, 2);
        // Ambil 2 karakter terakhir
        $end = substr($nama, -2);
        // Hitung jumlah karakter yang disensor
        $sensorLength = strlen($nama) - 4;
        // Buat string sensor (*)
        $sensor = str_repeat('*', $sensorLength);

        return $start . $sensor . $end;
    }
}
