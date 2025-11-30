<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    protected $table = 'pengguna';
    protected $primaryKey = 'penggunaid';
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'email',
        'phone',
        'poin',
        'tier',
        'photourl',
        'tanggallahir',
        'notifenabled',
        'saldo',
        'pin'
    ];
}

