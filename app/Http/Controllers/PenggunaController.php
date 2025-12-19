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
        $userId = Session::get('authenticated_user_id') ?: Session::get('user_id');
        if (!$userId) {
            return redirect()->route('welcome');
        }

        $user = Pengguna::find($userId);
        if (!$user) {
            return redirect()->route('welcome');
        }

        // ⬇️ INI YANG SEBELUMNYA KURANG
        $pelanggan = Pelanggan::where('penggunaid', $user->penggunaid)->get();

        return view('CekToken.detail-pelanggan', compact('pelanggan'));
    }

    public function tambahLokasi(Request $request) //Tiara Aulia Azadirachta Indica | 5026231148
    {
        // 1. Ambil user login dari session
        $userId = Session::get('authenticated_user_id') ?: Session::get('user_id');
        if (!$userId) {
            return redirect()->route('welcome');
        }
        $user = Pengguna::findOrFail($userId);
        // 2. Validasi input user
        $request->validate([
            'alamat' => 'required',
            'nomormeter' => 'required',
            'tandaisebagai' => 'required',
        ]);
        // 3. Jika user memilih "Lainnya"
        $tandaisebagai = $request->tandaisebagai == "Lainnya"
            ? $request->tandaisebagai_custom
            : $request->tandaisebagai;
        // 4. Simpan data lokasi — nama, penggunaid, saldo dari user login
        Pelanggan::create([
            'nama' => $user->nama,            // otomatis dari user login
            'alamat' => $request->alamat,
            'tandaisebagai' => $tandaisebagai,
            'penggunaid' => $user->penggunaid,        // otomatis dari user login
            'nomormeter' => $request->nomormeter,
            'saldo' => $user->saldo,                     // ambil dari login
        ]);
        return redirect()->route('detail-pelanggan')
            ->with('success', 'Lokasi berhasil ditambahkan!');
    }

    public function cekTokenPelanggan($pelangganid) //Tiara Aulia Azadirachta Indica | 5026231148
    {
        // ambil data pelanggan (supaya tandaisebagai bisa dipakai di Blade)
        $pelanggan = Pelanggan::find($pelangganid);

        // ambil data tokennya
        $data = BeliToken::where('pelangganid', $pelangganid)->get();
        return view('CekToken.cek-token', [
            'tokens' => $data,
            'pelanggan' => $pelanggan,
            'pelangganid' => $pelangganid
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
    public function ambilDataPengguna()
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

    // {{--5026231088 Tsanita Shafa Hadinanda--}}
    public function cekJumlahPoin(int $tukarId): bool
    {
        // ambil user yg login dari session
        $userId = Session::get('authenticated_user_id') ?: Session::get('user_id');

        if (!$userId) {
            // kalau belum login, otomatis ga cukup poin
            return false;
        }

        $user = Pengguna::find($userId);

        if (!$user) {
            return false;
        }

        $tukar = TukarPoin::findOrFail($tukarId);

        return (int) $user->poin >= (int) $tukar->poindibutuhkan;
    }

    // mengurangi poin user sesuai poin yang dibutuhkan
    public function updatePoin(int $tukarId): void
    {
        // ambil user yg login dari session
        $userId = Session::get('authenticated_user_id') ?: Session::get('user_id');

        if (!$userId) {
            // kalau ga ada user login, jangan lakukan apa-apa
            return;
        }

        $user = Pengguna::findOrFail($userId);
        $tukar = TukarPoin::findOrFail($tukarId);

        $user->poin = (int) $user->poin - (int) $tukar->poindibutuhkan;
        // kalau mau aman biar ga minus:
        // $user->poin = max(0, (int) $user->poin - (int) $tukar->poindibutuhkan);
        $user->save();

    }


    public function verifyPOTP(Request $request)
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