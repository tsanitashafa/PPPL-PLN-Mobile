<?php
// {{--5026231088 Tsanita Shafa Hadinanda--}}
namespace App\Http\Controllers;

use App\Models\TukarPoin;

class TukarPoinController extends Controller
{
    // dipakai di Reward, cuma balikin data
    public function loadTukar($limit = 3)
    {
        return TukarPoin::limit($limit)->get();
    }

    // halaman semua tukar
    public function loadTukarSemua()
    {
        $tukarItems = TukarPoin::all();

        return view('tukar/tukar', [
            'tukarItems' => $tukarItems,
        ]);
    }

    public function loadTukarById($id)
    {
        $tukar = TukarPoin::findOrFail($id);

        return view('tukar/detail', [
            'tukar' => $tukar,
        ]);
    }
}
