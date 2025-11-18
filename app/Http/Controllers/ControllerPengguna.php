<?php
// signup, login, and notif by mirza
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Pengguna;
class ControllerPengguna extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function showRegisterPhone()
    {
        return view('registerphone');
    }


    // simpan no hp
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
        return view('verifyphone', compact('phone'));
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
        return view('registuser');
    }

    public function storeUserData(Request $request)
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
        return view('createpin');
    }

    public function storePin(Request $request)
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
        return view('loginphone');
    }

    // proses login hp
    public function processLoginPhone(Request $request)
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
        return view('loginpin');
    }

    // proses loginpin
    public function processLoginPin(Request $request)
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

    public function homepage()
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

    public function editProfile1()
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

        return view('edit-profile-1', compact('user'));
    }

    public function editProfile2()
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

        return view('edit-profil-2', compact('user'));
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

    public function updateProfile(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'tanggallahir' => 'nullable|date',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // ambil authenticated user dari session
        $userId = Session::get('authenticated_user_id') ?: Session::get('user_id');

        if (!$userId) {
            return redirect()->route('welcome')->with('error', 'Please login first');
        }

        $user = Pengguna::find($userId);

        if (!$user) {
            Session::flush();
            return redirect()->route('welcome')->with('error', 'Session expired, please login again');
        }

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
        $image = $request->file('profile_image');
        
        // Delete old image if exists (using photourl directly)
        if ($user->photourl && file_exists(public_path($user->photourl))) {
            unlink(public_path($user->photourl));
        }
        
        $imageName = time() . '_' . $user->penggunaid . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('storage/profile_images');
        
        // Ensure directory exists
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0755, true);
        }
        
        // Move the file
        if ($image->move($destinationPath, $imageName)) {
            // Save to photourl column (Laravel will use the mutator)
            $user->photourl = 'storage/profile_images/' . $imageName;
        }
    }
        // Update user data
        $user->nama = $request->nama;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->tanggallahir = $request->tanggallahir;
        $user->save();

        return redirect()->route('edit-profile-1')->with('success', 'Profile updated successfully');
    }
}

