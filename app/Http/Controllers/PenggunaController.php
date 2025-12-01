<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;


class PenggunaController extends Controller
{
    public function verifyOTP(Request $request)
    {
        $phone = $request->phone;
        $verifikasi = $request->verifikasi;
        $pengguna = Pengguna::where('phone', $phone)->where('pin', $verifikasi)->first();
        if (!$pengguna) {
            return view('hubungkan-ewallet/menyambungkan-gagal');
        }
        return view('hubungkan-ewallet/menyambungkan-berhasil');
    }
}
