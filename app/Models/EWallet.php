<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ewallet extends Model
{
    protected $table = 'ewallet';
    protected $primaryKey = 'ewalletid';
    public $timestamps = false;

    protected $fillable = [
        'statuskoneksi',
        'nomorewallet',
        'saldo'
    ];
}