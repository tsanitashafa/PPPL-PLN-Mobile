<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MetodePembayaran extends Model
{
    protected $table = 'metodepembayaran';
    protected $primaryKey = 'metodeid';
    public $timestamps = false;

    protected $fillable = [
        'namametode',
        'bankid',
        'ewalletid',
        'qrisid',
        'plnmobilepayid',
        'saldo'
    ];
}