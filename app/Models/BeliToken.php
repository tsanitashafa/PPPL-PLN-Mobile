<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BeliToken extends Model
{
    protected $table = 'belitoken';
    protected $primaryKey = 'transaksiid';
    public $timestamps = false;

    protected $fillable = [
        'jumlahbayar',
        'voucher',
        'status',
        'tgltransaksi',
        'generatenotoken',
        'pelangganid',
        'metodeid',
        'rewardid'
    ];
}