<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Bantuan;

class ArtikelController extends Controller
{
    public function index()
    {
        $news = News::orderBy('beritaid', 'desc')->take(2)->get();
        $bantuan = Bantuan::orderBy('bantuanid', 'desc')->take(2)->get();

        return view('halamanartikel', compact('news', 'bantuan'));
    }

    public function loadArtikel()
    {
        $news = News::orderBy('beritaid', 'desc')->get();
        return response()->json($news);
    }

    public function loadBantuan()
    {
        $bantuan = Bantuan::orderBy('bantuanid', 'desc')->get();
        return response()->json($bantuan);
    }

    public function getDetailBantuan($id)
    {
        $bantuan = Bantuan::find($id);
        if (!$bantuan) {
            return response()->json(['error' => 'Bantuan not found'], 404);
        }
        return response()->json($bantuan);
    }
}
