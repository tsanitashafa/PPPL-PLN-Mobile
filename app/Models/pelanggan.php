<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $primaryKey = 'pelangganid';
    public $timestamps = false;

    public $incrementing = true;
    protected $keyType = 'int';


    protected $fillable = [
        'nama',
        'alamat',
        'tandaisebagai',
        'penggunaid',
        'nomormeter',
        'saldo'
    ];
}
