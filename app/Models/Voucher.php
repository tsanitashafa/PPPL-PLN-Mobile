<?php
// {{--5026231088 Tsanita Shafa Hadinanda--}}
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voucher extends Model
{
    protected $table = 'voucher';
    protected $primaryKey = 'rewardid';
    public $timestamps = false;

    protected $fillable = [
        'rewardname',
        'deskripsi',
        'nilai',
        'pelangganid',
        'transaksiid'
    ];
}
