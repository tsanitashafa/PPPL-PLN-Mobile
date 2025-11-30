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

    public function getDetailPelanggan(Request $request) //Tiara Aulia Azadirachta Indica | 5026231148
    {
        //$pelanggan = Pelanggan::where('penggunaid', Auth::id())->get(); //nanti dipakai kalau udah nyambung login
         $pelanggan = Pelanggan::where('penggunaid', 4)->get(); // sementara hardcode

        return view('CekToken.detail-pelanggan', compact('pelanggan'));

        $pelanggan = Pelanggan::with('alamat')->find($pelangganId); // ini untuk cek token

        return view('CekToken.detail-pelanggan', [
            'pelanggan' => $pelanggan
        ]);
    }

    public function tambahLokasi(Request $request) //Tiara Aulia Azadirachta Indica | 5026231148
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

    public function cekTokenPelanggan($pelangganId) //Tiara Aulia Azadirachta Indica | 5026231148
    {
        $data = BeliToken::where('pelangganid', $pelangganid)->get();

        return view('CekToken.cek-token', [
            'tokens' => $data,
            'pelangganid' => $pelangganid
        ]);
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