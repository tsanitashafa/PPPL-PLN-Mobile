<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bantuan extends Model
{
    protected $table = 'bantuan';
    protected $primaryKey = 'bantuanid';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'konten',
        'kategori'
    ];
}