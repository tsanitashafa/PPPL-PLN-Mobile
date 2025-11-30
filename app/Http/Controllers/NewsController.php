<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;     
use App\Models\Bantuan;  

class NewsController extends Controller
{
    public function index()
    {

        $news = News::orderBy('beritaid', 'desc')->take(2)->get();


        $bantuan = Bantuan::orderBy('bantuanid', 'desc')->take(2)->get();


        return view('halamanartikel', compact('news', 'bantuan'));
    }

    public function berita()
    {
        $news = News::orderBy('beritaid', 'desc')->get();
        return view('halamanberita', compact('news'));
    }

    public function beritaDetail($id)
    {
        $newsItem = News::find($id);
        if (!$newsItem) {
            abort(404);
        }
        return view('halamanberita2', compact('newsItem'));
    }
}