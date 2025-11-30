<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'pelangganid';
    public $timestamps = false;
<<<<<<< HEAD
    public $incrementing = true;
    protected $keyType = 'int';
=======
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda

    protected $fillable = [
        'nama',
        'alamat',
        'tandaisebagai',
        'penggunaid',
        'nomormeter',
        'saldo'
    ];
}