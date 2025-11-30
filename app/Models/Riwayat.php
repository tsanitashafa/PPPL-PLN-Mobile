<?php
namespace App\Models;

// {{--5026231088 Tsanita Shafa Hadinanda--}}

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    protected $table = 'riwayat';
    protected $primaryKey = 'riwayatid';
    public $timestamps = false;

    protected $fillable = [
        'deskaktivitas',
        'timestamp',
        'satuanlistrik',
        'riwayatpoin',
        'penggunaid'
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'penggunaid');
    }
}
