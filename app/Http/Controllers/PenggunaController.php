<?php

namespace App\Http\Controllers;
use App\Models\Pelanggan; // ← WAJIB di atas
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PenggunaController extends Controller
{
    public function cekJumlahPoin()
    {
    }

    public function updatePoin()
    {
    }

    public function sentOTP()
    {
    }

    public function verifyOTP()
    {
    }

    public function savePengguna()
    {
    }

    public function cekPoin()
    {
    }

    public function cekNoHP()
    {
    }

    public function getOTP()
    {
    }

    public function getNotifikasi()
    {
    }

    public function getPoin()
    {
    }

    public function getDetailPelanggan(Request $request)
    {
        $pelanggan = Pelanggan::where('penggunaid', Auth::id())->get();

        return view('CekToken.detail-pelanggan', compact('pelanggan'));
    }

    public function tambahLokasi(Request $request)
    {
        $request->validate([
            'alamat' => 'required',
            'nomormeter' => 'required',
            'tandaisebagai' => 'required',
            'nama' => 'required',
            'penggunaid' => 'required',
        ]);

        $tandaisebagai = $request->tandaisebagai == "Lainnya"
            ? $request->tandaisebagai_custom
            : $request->tandaisebagai;

        Pelanggan::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'tandaisebagai' => $tandaisebagai,
            'penggunaid' => $request->penggunaid,
            'nomormeter' => $request->nomormeter,
            'saldo' => 0,
        ]);

        return redirect()->route('detail-pelanggan')
            ->with('success', 'Lokasi berhasil ditambahkan!');
    }

    public function setLogin()
    {
    }

    public function setPin()
    {
    }

    public function ambilDataPengguna()
    {
    }

    public function ambilPoin()
    {
    }
}
