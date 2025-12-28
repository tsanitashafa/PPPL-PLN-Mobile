<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bantuan;

class BantuanController extends Controller
{
    // =================================================================
    // 1. HALAMAN LIST BANTUAN
    // =================================================================
    public function bantuan()
    {
        // Mengambil semua data bantuan, diurutkan terbaru
        $bantuan = Bantuan::orderBy('bantuanid', 'desc')->get();

        // PERBAIKAN: Tambahkan 'fitur-artikel.' di depannya
        return view('fitur-artikel.halamanbantuan1', compact('bantuan'));
    }

    // =================================================================
    // 2. HALAMAN DETAIL BANTUAN
    // =================================================================
    public function bantuanDetail($id)
    {
        $bantuanItem = Bantuan::find($id);

        if (!$bantuanItem) {
            abort(404);
        }

        // PERBAIKAN: Tambahkan 'fitur-artikel.' di depannya
        return view('fitur-artikel.halamanbantuan2', compact('bantuanItem'));
    }
}