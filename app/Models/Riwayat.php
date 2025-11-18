<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table = 'riwayat';
    protected $primaryKey = 'riwayatid';
    public $timestamps = false;

    protected $fillable = [
        'deskaktivitas',
        'timestamp',
        'satuanlistrik',
        'riwayatpoin',
        'penggunaid'
    ];
}