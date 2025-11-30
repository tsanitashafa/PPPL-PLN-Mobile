<?php

namespace App\Http\Controllers;
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
        $data = BeliToken::select('generatenotoken', 'is_used', 'pelangganid')->get();

        return view('CekToken.cek-token', [
            'tokens' => $data
        ]);
    }

    public function cekTokenPelanggan($pelangganid) //Tiara Aulia Azadirachta Indica | 5026231148
    {
        // Ambil data pelanggan
        $pelanggan = Pelanggan::findOrFail($pelangganid);

        // Ambil token berdasarkan pelanggan_id
        $tokens = BeliToken::where('pelangganid', $pelangganid)->get();

        return view('CekToken.cek-token', compact('tokens', 'pelanggan'));
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