<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Bantuan;

class NewsController extends Controller
{
    // =================================================================
    // 1. HALAMAN UTAMA ARTIKEL
    // =================================================================
    public function loadArtikel()
    {
        $news = News::orderBy('beritaid', 'desc')->take(2)->get();
        $bantuan = Bantuan::orderBy('bantuanid', 'desc')->take(2)->get();

        // PERBAIKAN: Gunakan 'fitur-artikel.' (sesuai nama folder kamu)
        return view('fitur-artikel.halamanartikel', compact('news', 'bantuan'));
    }

    // =================================================================
    // 2. HALAMAN LIST SEMUA BERITA
    // =================================================================
    public function berita()
    {
        $news = News::orderBy('beritaid', 'desc')->get();
        $bantuan = Bantuan::orderBy('bantuanid', 'desc')->get();

        // PERBAIKAN: Gunakan 'fitur-artikel.'
        return view('fitur-artikel.halamanberita', compact('news', 'bantuan'));
    }

    // =================================================================
    // 3. HALAMAN DETAIL BERITA
    // =================================================================
    public function beritaDetail($id)
    {
        $newsItem = News::find($id);

        if (!$newsItem) {
            abort(404);
        }

        // PERBAIKAN: Gunakan 'fitur-artikel.'
        return view('fitur-artikel.halamanberita2', compact('newsItem'));
    }
}