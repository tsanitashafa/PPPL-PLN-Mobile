<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bantuan;

class BantuanController extends Controller
{
    // Sesuai diagram: loadBantuan()
    public function bantuan()
    {
        // Mengambil semua data bantuan, diurutkan terbaru
        $bantuan = Bantuan::orderBy('bantuanid', 'desc')->get();
        
        // Return ke view halaman bantuan (sesuai nama file di folder views kamu)
        // Saya asumsikan namanya 'halamanbantuan1' berdasarkan gambar file yang kamu kirim
        return view('halamanbantuan1', compact('bantuan'));
    }

    // Sesuai diagram: getDetailBantuan($id)
    public function bantuanDetail($id)
    {
        $bantuanItem = Bantuan::find($id);
        
        if (!$bantuanItem) {
            // Jika tidak ketemu, tampilkan 404
            abort(404);
        }

        // Return ke view detail bantuan
        // Saya asumsikan namanya 'halamanbantuan2'
        return view('halamanbantuan2', compact('bantuanItem'));
    }
}