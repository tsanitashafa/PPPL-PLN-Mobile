<?php

namespace App\Http\Controllers;

use App\Models\BeliToken;
use Carbon\Carbon;

class BeliTokenController extends Controller
{
    /**
     * Generate token 16 digit (depan bukan 0),
     * simpan ke tabel belitoken, lalu return token-nya.
     */
    public function generateNoToken(int $jumlahBayar, int $penggunaId): string
    {
        // generate 16 digit, digit pertama 1–9
        $token = (string) random_int(1, 9);
        for ($i = 0; $i < 15; $i++) {
            $token .= random_int(0, 9);
        }

        // simpan ke tabel belitoken
        BeliToken::create([
            'jumlahbayar'     => $jumlahBayar,
            'voucher'         => null,              // atau isi sesuai kebutuhan
            'status'          => 'Berhasil',        // atau 'Sukses' seperti di screenshot-mu
            'tgltransaksi'    => Carbon::now(),
            'generatenotoken' => $token,
            'pelangganid'     => $penggunaId,
        ]);

        return $token;
    }
}
