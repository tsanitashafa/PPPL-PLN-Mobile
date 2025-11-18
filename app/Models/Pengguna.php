<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'pengguna';
    // Primary Key
    protected $primaryKey = 'penggunaid';

    // *** INI SOLUSINYA ***
    // Memberi tahu Eloquent bahwa tabel ini tidak memiliki kolom created_at dan updated_at.
    public $timestamps = false;

    protected $fillable = [
        'nama',
        'email',
        'tanggallahir',
        'phone',
        'photoUrl',
    ];
}
