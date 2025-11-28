<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;     
use App\Models\Bantuan;  

class NewsController extends Controller
{
    public function index()
    {
        // 1. AMBIL NEWS (Urutkan pakai 'beritaid')
        $news = News::orderBy('beritaid', 'desc')->take(2)->get();

        // 2. AMBIL BANTUAN (Urutkan pakai 'bantuanid')
        $bantuan = Bantuan::orderBy('bantuanid', 'desc')->take(2)->get();

        // 3. Kirim ke View
        return view('halamanartikel', compact('news', 'bantuan'));
    }
}