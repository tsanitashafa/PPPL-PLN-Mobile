<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; // Import Request
use Illuminate\Support\Str; // Import Str untuk generate token
use Illuminate\Support\Facades\Session;
use App\Models\Pelanggan;
use App\Models\Pengguna; // ← WAJIB!
use function PHPUnit\Framework\returnArgument;

class PelangganController extends Controller
{
    public function getDataBeliToken()
    {
    }
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
    public function setTotalPembayaran(Request $request)
    {
        // Simpan total ke session
        session(['total_pembayaran' => $request->total]);

        return response()->json(['status' => 'success']);
    }
    // --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH

    public function pembayaran(Request $request)
    {
        // Ambil total dari session
        // Data diambil dari query string/request dari beli-token.blade.php
        $total = $request->input('total') ?? session('total_pembayaran', 0);

        return view('bayar-token/pembayaran', compact('total'));
    }

    public function getListPelanggan()
    {
    }

    public function detailPelangganLokasi()
    {
    }



    // --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH


    public function bayarToken(Request $request)
    {
        // Data dari input
        $meter = trim($request->meter);
        $nominal = (int) $request->nominal;
        // $total = (int) $request->total;
        $persentaseVoucher = (int) $request->voucher; // Ini angka 10 dari session
        // LOGIKA PERSENTASE DI SERVER
        $potongan = ($persentaseVoucher / 100) * $nominal;
        $totalSetelahDiskon = $nominal - $potongan;
        // Biaya layanan
        $biayaLayanan = 1500;
        $totalAkhir = $totalSetelahDiskon + $biayaLayanan;

        // Ambil data pelanggan berdasarkan nomor meter
        $pelanggan = Pelanggan::where('nomormeter', $meter)->first();

        if (!$pelanggan) {
            return view('bayar-token.transaksi-gagal')->with('message', 'Pelanggan tidak ditemukan.');
        }

        // Cek saldo pelanggan
        if ($pelanggan->saldo < $totalAkhir) {
            return view('bayar-token.transaksi-gagal')->with('message', 'Saldo tidak mencukupi.');
        }

        // Kurangi saldo pelanggan
        $pelanggan->saldo -= $totalAkhir;
        $pelanggan->save();

        // Tambah poin ke tabel PENGGUNA
        $poinTambahan = 10;

        $pengguna = Pengguna::find($pelanggan->penggunaid);

        if ($pengguna) {
            $pengguna->poin += $poinTambahan;
            $pengguna->save();
        }

        // Generate token PLN
        $token = strtoupper(Str::random(20));

        // Redirect ke halaman berhasil
        return redirect()->route('transaksi.berhasil')->with([
            'token' => $token,
            'poin' => $poinTambahan,
            'saldo' => $pelanggan->saldo,
            'nominal_beli' => $nominal,
            'meter' => $meter,
            'total_bayar' => $totalAkhir

        ]);

    }


    /**
     * Menampilkan halaman transaksi berhasil.
     */
    public function transaksiBerhasil()
    {
        // Set session flag for recent purchase notification
        Session::put('recent_purchase', true);
        // Halaman ini akan mengambil data dari session flash
        return view('bayar-token.transaksi-berhasil');
    }

}

