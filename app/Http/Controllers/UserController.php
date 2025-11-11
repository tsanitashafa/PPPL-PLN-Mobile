<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
class UserController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function showRegisterPhone()
    {
        return view('registerphone');
    }


    // ===== [CREATE] Simpan nomor HP =====
    public function storePhone(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|numeric'
        ]);

        // Simpan sementara ke session (bisa ke DB juga)
        Session::put('phone', '+62' . $request->phone);

        return redirect()->route('verifyphone');
    }

    public function showVerifyEmail()
    {
        return view('verifyemail');
    }

    // ===== [READ] Halaman verifikasi =====
    public function showVerifyPhone()
    {
        $phone = Session::get('phone');
        return view('verifyphone', compact('phone'));
    }

    // ===== [READ] Verifikasi kode OTP =====
    public function verifyOTP(Request $request)
    {
        $validated = $request->validate([
            'otp' => 'required|min:6|max:6'
        ]);

        // Misal OTP benar (dummy)
        if ($request->otp == '123456') {
            return redirect()->route('registuser');
        } else {
            return back()->with('error', 'Kode OTP salah!');
        }
    }

    // ===== [UPDATE] Isi nama & email =====
    public function showRegistUser()
    {
        return view('registuser');
    }

    public function storeUserData(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email'
        ]);

        // Simpan ke database (contoh create user baru)
        $user = User::create([
            'phone' => Session::get('phone'),
            'name' => $request->name,
            'email' => $request->email
        ]);

        Session::put('user_id', $user->id);

        return redirect()->route('createpin');
    }

    // ===== [UPDATE] Buat PIN =====
    public function showCreatePin()
    {
        return view('createpin');
    }

    public function storePin(Request $request)
    {
        $validated = $request->validate([
            'pin' => 'required|min:6|max:6'
        ]);

        $user = User::find(Session::get('user_id'));

        if ($user) {
            $user->pin = $request->pin;
            $user->save();
        }

        return redirect()->route('welcome')->with('success', 'Registrasi Berhasil!');
    }

    public function notif()
    {
        return view('notif');
    }
}

