<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    // Nama tabel sesuai dengan gambar
    protected $table = 'pelanggan';

    // Kolom-kolom yang dapat diisi
    protected $fillable = [
        'pelangganid',
        'nama',
        'alamat',
        'tandaisebagai',
        'penggunaid',
        'nomormeter', // Kolom Nomor Meter
    ];
}
