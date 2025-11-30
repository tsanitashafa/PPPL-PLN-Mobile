<?php
<<<<<<< HEAD

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TukarPoinController extends Controller
{
    public function loadTukar($limit)
    {
    }

    public function loadTukarSemua()
    {
=======
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
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
    }

    public function loadTukarById($id)
    {
<<<<<<< HEAD
    }
}
=======
        $tukar = TukarPoin::findOrFail($id);

        return view('tukar/detail', [
            'tukar' => $tukar,
        ]);
    }
}
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
