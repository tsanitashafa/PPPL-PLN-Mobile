<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlnMobilePay extends Model
{
    protected $table = 'plnmobilepay';
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'saldo'
    ];
}