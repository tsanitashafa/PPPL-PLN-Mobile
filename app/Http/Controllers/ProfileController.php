<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
class ProfileController extends Controller
{
    public function loadEditProfile()
    {
    }
}
=======
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Pengguna; // Pastikan model Anda bernama 'Pengguna'

class ProfileController extends Controller
{
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
>>>>>>> dev-5026231037-Al-khiqmah-Manzilatul-Mukaromah
