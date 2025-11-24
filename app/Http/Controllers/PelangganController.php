<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request; // Import Request
use Illuminate\Support\Str; // Import Str untuk generate token
use App\Models\Pelanggan;
use App\Models\Pengguna; // ← WAJIB!
use function PHPUnit\Framework\returnArgument;

class PelangganController extends Controller
{
    public function getDataBeliToken()
    {
    }

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



    // antar sesion beli token ke pembayaran
    public function setTotalPembayaran(Request $request)
    {
        // Simpan total ke session
        session(['total_pembayaran' => $request->total]);

        return response()->json(['status' => 'success']);
    }

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



    public function bayarToken(Request $request)
    {
        // Data dari input
        $meter = trim($request->meter);
        $nominal = (int) $request->nominal;
        $total = (int) $request->total;
        $voucher = (int) $request->voucher;

        // Biaya layanan
        $biayaLayanan = 1500;
        $totalAkhir = $total + $biayaLayanan;

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
        // Halaman ini akan mengambil data dari session flash
        return view('bayar-token.transaksi-berhasil');
    }

    // ... (Metode lain)


    //     public function getDataReward(Request $request)
//     {
//         // Ambil total tagihan akhir dari form
//         $totalAkhir = $request->total_akhir;

    //         // Ambil data pelanggan (misal login / id 1 saja sementara)
//         $pelanggan = Pelanggan::find(1);

    //         // Jika saldo tidak cukup → gagal
//         if ($pelanggan->saldo < $totalAkhir) {
//             return view('bayar-token/transaksi-gagal');
//         }

    //         // Jika cukup → proses transaksi
//         $pelanggan->saldo -= $totalAkhir;
//         $pelanggan->poin += 10;
//         $pelanggan->save();

    //         // Generate token PLN (dummy 20 digit)
//         $token = strtoupper(Str::random(20));

    //         return redirect()->route('transaksi.berhasil')->with([
//             'token' => $token,
//             'poin' => 10,
//             'saldo' => $pelanggan->saldo
//         ]);
//     }


    //     //cek agi
//     // public function bayarToken(Request $request)
//     // {
//     //     $meter = $request->meter;
//     //     $nominal = $request->nominal;
//     //     $total = $request->total;
//     //     $voucher = $request->voucher;

    //     //     // Cek saldo / logika lain
//     //     if ($total > 500000) {
//     //         return view('bayar-token.transaksi-gagal');
//     //     }

    //     //     return view('bayar-token.transaksi-berhasil', [
//     //         'meter' => $meter,
//     //         'nominal' => $nominal,
//     //         'total' => $total,
//     //         'voucher' => $voucher
//     //     ]);
//     // }

    //     // $meter = $request->meter;
//     // $nominal = $request->nominal;
//     // $total = $request->total;
//     // $voucher = $request->voucher;

    //     // return view('pembayaran', compact('meter', 'nominal', 'total', 'voucher'));
// }
}
