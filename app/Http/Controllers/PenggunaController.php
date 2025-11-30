<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use App\Models\TukarPoin;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    // ambil user yang "lagi login" (asumsi: id = 1)
    protected function getCurrentUser(): Pengguna
    {
        return Pengguna::findOrFail(1);
    }

    // 6.1.1 call cekJumlahPoin()
    // cek apakah poin user cukup untuk item tukar tertentu
    public function cekJumlahPoin(int $tukarId): bool
    {
        $user  = $this->getCurrentUser();
        $tukar = TukarPoin::findOrFail($tukarId);

        return (int) $user->poin >= (int) $tukar->poindibutuhkan;
    }

    // 6.1.2 call updatePoin()
    // mengurangi poin user sesuai poin yang dibutuhkan
    public function updatePoin(int $tukarId): void
    {
        $user  = $this->getCurrentUser();
        $tukar = TukarPoin::findOrFail($tukarId);

        $user->poin = (int) $user->poin - (int) $tukar->poindibutuhkan;
        $user->save();
    }

}
