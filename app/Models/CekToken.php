<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CekToken extends Model
{
    protected $table = 'cektoken';
    protected $primaryKey = 'cektokenid';
    public $timestamps = false;

    protected $fillable = [
        'penggunaantoken',
        'totalkwh',
        'tanggal',
        'pelangganid'
    ];
}