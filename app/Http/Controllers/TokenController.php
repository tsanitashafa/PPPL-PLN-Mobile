<?php

namespace App\Http\Controllers;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TokenController extends Controller
{
     // Tampilkan form input token (Tiara Aulia Azadirachta Indica | 5026231148)
    public function showForm()
    {
        return view('MasukkanToken.masukkan-token');
    }
    
      public function verifikasiToken(Request $request) //Tiara Aulia Azadirachta Indica | 5026231148
    {
        $request->validate([
            'nomor_token' => 'required'
        ]);

        // ambil token dari table belitoken
        $token = DB::table('belitoken')
                    ->where('generatenotoken', $request->nomor_token)
                    ->first();

        if (!$token) {
            return redirect()->route('gagal')->with('message', 'Token tidak ditemukan.');
        }

        // token sudah dipakai kalau is_used = true
        if ($token->is_used) {
            return redirect()->route('gagal')->with('message', 'Token sudah digunakan.');
        }

        // tandai token sebagai sudah dipakai
        DB::table('belitoken')
            ->where('generatenotoken', $request->nomor_token)
            ->update(['is_used' => true]);

        return redirect()->route('selamat')->with('token', $request->nomor_token);
    }

    public function selamat()
    {
        return view('MasukkanToken.token-success');
    }

    public function gagal()
    {
        return view('MasukkanToken.token-gagal');
    }

    public function cekToken() //Tiara Aulia Azadirachta Indica | 5026231148
    {
        // ambil data beli token (generateNoToken)
        $data = BeliToken::select('generatenotoken', 'is_used', 'pelanggan_id')->get();

        return view('CekToken.cek-token', [
            'tokens' => $data
        ]);
    }

    public function history($generateNoToken) //Tiara Aulia Azadirachta Indica | 5026231148
    {
        // sesuai diagram: getHistoryPemakaian(generateNoToken) 
        $history = BeliToken::where('generateNoToken', $generateNoToken)
            ->with('pelanggan')
            ->first();

        return view('CekToken.history-pemakaian', [
            'history' => $history
        ]);
    }

    public function getHistoryPemakaian($generateNoToken)
    {
    }
}
=======

use Illuminate\Http\Request;
use App\Models\Pelanggan; // Import Model Pelanggan


// --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH

class TokenController extends Controller
{

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
>>>>>>> dev-5026231037-Al-khiqmah-Manzilatul-Mukaromah
