<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Import Request

use Illuminate\Support\Facades\Session;
use App\Models\Pelanggan;
use App\Models\BeliToken;
use App\Models\Pengguna; // ← WAJIB!


class PelangganController extends Controller
{

    // --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH
    // --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH

    public function detailPelanggan($nomorMeter)
    {
        $pelanggan = Pelanggan::where('nomormeter', $nomorMeter)->first();
        if (!$pelanggan) {
            return response()->json(['message' => 'Pelanggan not found'], 404);
        }
        return response()->json([
            'nama' => $pelanggan->nama
        ]);

    }
    // --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH


    // antar sesion beli token ke pembayaran

    //flow pembayaran 1
    public function setTotalPembayaran(Request $request)
    {
        // Simpan total ke session
        session(['total_pembayaran' => $request->total]);

        return response()->json(['status' => 'success']);
    }
    // --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH
//flow pembayaran 2

    public function pembayaran(Request $request)
    {
        // Ambil total dari session
        // Data diambil dari query string/request dari beli-token.blade.php
        $total = $request->input('total') ?? session('total_pembayaran', 0);

        return view('bayar-token/pembayaran', compact('total'));
    }





    // --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH

    //flow pembayaran 2
    public function bayarToken(Request $request)
    {
        // 1. Ambil Data Input
        $meter = trim($request->meter);
        $nominal = (int) $request->nominal;
        $persentaseVoucher = (int) ($request->voucher ?? 0);

        // 2. Hitung Logika Biaya
        $potongan = ($persentaseVoucher / 100) * $nominal;
        $totalSetelahDiskon = $nominal - $potongan;
        $biayaLayanan = 1500;
        $totalAkhir = $totalSetelahDiskon + $biayaLayanan;

        // 3. Validasi Pelanggan & Saldo
        $pelanggan = Pelanggan::where('nomormeter', $meter)->first();

        if (!$pelanggan) {

            return $this->transaksiGagal('Pelanggan tidak ditemukan.');
        }
        if ($pelanggan->saldo < $totalAkhir) {
            return $this->transaksiGagal('Saldo tidak mencukupi.');
        }


        // 4. Eksekusi Pengurangan Saldo
        $pelanggan->saldo -= $totalAkhir;
        $pelanggan->save();

        // 5. Update Poin Pengguna
        $pengguna = Pengguna::find($pelanggan->penggunaid);
        if ($pengguna) {
            $pengguna->poin += 10; // Tambah 10 poin
            $pengguna->save();
        }

        // 6. GENERATE TOKEN (Memanggil fungsi terpisah)
        $tokenDihasilkan = $this->generateToken(16);

        // 7. SIMPAN KE TABEL 'belitoken'

        BeliToken::create([
            'jumlahbayar' => $totalAkhir,
            'voucher' => $persentaseVoucher > 0 ? 1 : 0,
            'status' => 'Berhasil',
            'tgltransaksi' => now(),
            'generatenotoken' => $tokenDihasilkan,
            'pelangganid' => $pelanggan->pelangganid,
            'metodeid' => $request->metodeid ?? 1,
            'rewardid' => null,
            'is_used' => 0
        ]);

        // 8. Redirect ke halaman berhasil dengan Session Flash
        return redirect()->route('transaksi.berhasil')->with([
            'token' => $tokenDihasilkan,
            'poin' => 10,
            'saldo' => $pelanggan->saldo,
            'nominal_beli' => $nominal,
            'meter' => $meter,
            'total_bayar' => $totalAkhir
        ]);
    }

    private function transaksiGagal($pesan)
    {
        return view('bayar-token.transaksi-gagal', ['pesan' => $pesan]);
    }

    /**
     * FUNGSI TERPISAH: Generate angka 16 digit
     */
    private function generateToken($length = 16)
    {
        $token = '';
        for ($i = 0; $i < $length; $i++) {
            $token .= mt_rand(0, 9);
        }
        return $token;
    }

    public function transaksiBerhasil()
    {
        Session::put('recent_purchase', true);
        return view('bayar-token.transaksi-berhasil');
    }

}

