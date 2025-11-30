<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Pengguna;
use Illuminate\Support\Facades\Auth;
// Controller profile untuk edit profile+picture by Mirza Fathi Taufiqurrahman 5026231105
class ProfileController extends Controller
{
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

    /**
     * Menampilkan halaman Profile Index.
     * Menggunakan session untuk mengambil data user terakhir yang diupdate.
     */
    // --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH
    public function loadEditProfile()
    {
        // Dalam aplikasi nyata, ini seharusnya Auth::id() atau ID user yang sedang login
        $penggunaid = session('last_updated_id');

        if ($penggunaid) {
            // Eloquent: Menggunakan find() untuk mencari berdasarkan primary key
            $pengguna = Pengguna::find($penggunaid);
        } else {
            // Fallback: Jika tidak ada ID di session, ambil yang pertama
            $pengguna = Pengguna::first();
        }

        return view('fitur-tambahan/edit-profile-1', compact('pengguna'));
    }

    // ----------------------------------------------------

    /**
     * Menampilkan halaman Edit Profile.
     * Menggunakan Eloquent untuk mengambil data.
     */
    // --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH
    public function edit($id)
    {
        // Eloquent: Menggunakan find() untuk mencari berdasarkan primary key (penggunaid)
        // Jika ID tidak ditemukan, find() akan mengembalikan null.
        $pengguna = Pengguna::find($id);

        if (!$pengguna) {
            // Handle jika pengguna tidak ditemukan (opsional)
            abort(404);
        }

        return view('fitur-tambahan/edit-profile-2', compact('pengguna'));
    }

    // ----------------------------------------------------

    /**
     * Memproses update data Profile.
     * Menggunakan Eloquent untuk mencari dan menyimpan data.
     */
    // --5026231037 AL-KHIQMAH MANZILATUL MUKAROMAH
    public function update(Request $request)
    {
        // 1. Cari objek Pengguna berdasarkan ID
        $pengguna = Pengguna::find($request->penggunaid);

        if (!$pengguna) {
            return back()->with('error', 'Profile tidak ditemukan.');
        }

        // 2. Update atribut objek Eloquent
        $pengguna->nama = $request->nama;
        $pengguna->email = $request->email;
        $pengguna->tanggallahir = $request->tanggallahir;
        $pengguna->phone = $request->phone;

        // 3. Simpan perubahan ke database
        $pengguna->save();

        // 4. Simpan ID pengguna yang baru diupdate ke session sebelum redirect
        $request->session()->flash('last_updated_id', $pengguna->penggunaid);

        // 5. Alihkan kembali ke halaman profile index dengan pesan sukses
        return redirect('/profile')->with('success', 'Profile berhasil diperbarui!');
    }
}
