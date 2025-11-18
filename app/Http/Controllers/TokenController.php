<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelanggan; // Import Model Pelanggan

class TokenController extends Controller
{
    /**
     * Menampilkan halaman beli token (asumsi)
     */
    public function showBuyTokenPage()
    {
        // Ganti dengan view yang sesuai
        return view('transaksi/beli-token');
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
