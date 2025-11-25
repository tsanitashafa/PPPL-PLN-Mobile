<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    protected $table = 'bank';
    protected $primaryKey = 'bankid';
    public $timestamps = false;

    protected $fillable = [
        'nomorakun',
        'namabank',
'saldo'
    ];
}