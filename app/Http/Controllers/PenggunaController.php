<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan; // ← WAJIB di atas
use App\Models\Pengguna;
use App\Models\BeliToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class PenggunaController extends Controller
{
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
        $data = BeliToken::where('pelangganid', $pelangganId)->get();

        return view('CekToken.cek-token', [
            'tokens' => $data,
            'pelangganid' => $pelangganId
        ]);
    }

    // signup, login, and notif by mirza

    // Controller pengguna(fitur signup+login+notification settings) by Mirza Fathi Taufiqurrahman 5026231105
    public function welcome()
    {
        return view('welcome');
    }

    public function showRegisterPhone()
    {
        return view('SignUp.registerphone');
    }

    // simpan no hp
    public function cekNoHP(Request $request)
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
        return view('SignUp.verifyemail');
    }

    // verif kode otp email
    public function verifyEmailOTP(Request $request)
    {
        $validated = $request->validate([
            'otp' => 'required|min:6|max:6'
        ]);

        // Misal OTP benar (dummy)
        if ($request->otp == '000000') {
            return redirect()->route('createpin');
        } else {
            return back()->with('error', 'Kode OTP salah!');
        }
    }

    // halaman verifikasi hp
    public function showVerifyPhone()
    {
        $phone = Session::get('phone');
        return view('SignUp.verifyphone', compact('phone'));
    }

    // verif otp hp
    public function verifyOTP(Request $request)
    {
        $validated = $request->validate([
            'otp' => 'required|min:6|max:6'
        ]);

        // Misal OTP benar (dummy)
        if ($request->otp == '000000') {
            return redirect()->route('registuser');
        } else {
            return back()->with('error', 'Kode OTP salah!');
        }
    }

    // isi nama & email
    public function showRegistUser()
    {
        return view('SignUp.registuser');
    }

    public function savePengguna(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email'
        ]);

        // Simpan ke database create user baru
        $user = Pengguna::create([
            'phone' => Session::get('phone'),
            'nama' => $request->name,
            'email' => $request->email,
            'poin' => 0,
            'tier' => 'bronze',
            'notifenabled' => false,
            'saldo' => 0,
            'profile_image' => null,
            'tanggallahir' => null
        ]);

        Session::put('user_id', $user->penggunaid);
        Session::put('email', $request->email);

        return redirect()->route('verifyemail');
    }

    // buat pin
    public function showCreatePin()
    {
        return view('SignUp.createpin');
    }

    public function setPIN(Request $request)
    {
        // Handle PIN combination if JS fails
        if (!$request->has('pin') && $request->has('pin.*')) {
            $pinArray = $request->input('pin', []);
            $pin = implode('', $pinArray);
            $request->merge(['pin' => $pin]);
        }

        $validated = $request->validate([
            'pin' => 'required|min:6|max:6'
        ]);

        $user = Pengguna::find(Session::get('user_id'));

        if (!$user) {
            return back()->with('error', 'User not found. Please try again.');
        }

        if ($user) {
            $user->pin = $request->pin;
            $user->save();
        }

        return redirect()->route('homepage')->with('success', 'Registrasi Berhasil!');
    }

    // show login hp
    public function showLoginPhone()
    {
        return view('Login.loginphone');
    }

    // proses login hp
    public function cekNoHPLog(Request $request)
    {
        $validated = $request->validate([
            'phone' => 'required|numeric'
        ]);

        $phone = '+62' . $request->phone;
        $user = Pengguna::where('phone', $phone)->first();

        if ($user) {
            Session::put('login_user_id', $user->penggunaid);
            return redirect()->route('loginpin');
        } else {
            return back()->with('error', 'Nomor handphone tidak ditemukan!');
        }
    }

    // buka loginpin
    public function showLoginPin()
    {
        return view('Login.loginpin');
    }

    // proses loginpin
    public function setLogin(Request $request)
    {
        // Handle PIN combination if JS fails
        if (!$request->has('pin') && $request->has('pin.*')) {
            $pinArray = $request->input('pin', []);
            $pin = implode('', $pinArray);
            $request->merge(['pin' => $pin]);
        }

        $validated = $request->validate([
            'pin' => 'required|min:6|max:6'
        ]);

        $user = Pengguna::find(Session::get('login_user_id'));

        if ($user && $user->pin == $request->pin) {
            // login berhasil
            Session::put('authenticated_user_id', $user->penggunaid);
            return redirect()->route('homepage');
        } else {
            return back()->with('error', 'PIN salah!');
        }
    }

    public function ambilPoin()
    {
        // ambil user authenticated dari session
        $userId = Session::get('authenticated_user_id') ?: Session::get('user_id');

        if (!$userId) {
            return redirect()->route('welcome');
        }

        $user = Pengguna::find($userId);

        if (!$user) {
            return redirect()->route('welcome');
        }

        return view('homepage', compact('user'));
    }

    public function notif()
    {
        // ambil user authenticated dari session
        $userId = Session::get('authenticated_user_id') ?: Session::get('user_id');

        if (!$userId) {
            return redirect()->route('welcome');
        }

        $user = Pengguna::find($userId);

        if (!$user) {
            return redirect()->route('welcome');
        }

        return view('notif', compact('user'));
    }

    public function logout()
    {
        Session::flush();
        return redirect()->route('welcome');
    }

    public function toggleNotification(Request $request)
    {
        $validated = $request->validate([
            'notifenabled' => 'required|boolean'
        ]);

        // ambil authenticated user dari session
        $userId = Session::get('authenticated_user_id') ?: Session::get('user_id');

        if (!$userId) {
            return response()->json(['success' => false, 'message' => 'User not authenticated'], 401);
        }

        $user = Pengguna::find($userId);

        if (!$user) {
            return response()->json(['success' => false, 'message' => 'User not found'], 404);
        }

        // Update the notifenabled field
        $user->notifenabled = $request->notifenabled;
        $user->save();

        return response()->json(['success' => true, 'message' => 'Notification setting updated successfully']);
    }
}
