<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;

class BantuanController extends Controller
{
    public function loadArtikel()
    {
        $bantuan = Bantuan::orderBy('bantuanid', 'desc')->get();
        return response()->json($bantuan);
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

    public function bantuan()
    {
        $bantuan = Bantuan::orderBy('bantuanid', 'desc')->get();
        return view('halamanbantuan1', compact('bantuan'));
    }

    public function bantuanDetail($id)
    {
        $bantuanItem = Bantuan::find($id);
        if (!$bantuanItem) {
            abort(404);
        }
        return view('halamanbantuan2', compact('bantuanItem'));
    }
}
