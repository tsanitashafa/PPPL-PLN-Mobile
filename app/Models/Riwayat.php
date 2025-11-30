<?php
<<<<<<< HEAD
<<<<<<< HEAD

namespace App\Models;

=======
// {{--5026231088 Tsanita Shafa Hadinanda--}}
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
=======

namespace App\Models;

>>>>>>> origin/dev-5026231105-Mirza-Fathi-Taufiqurrahman
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
<<<<<<< HEAD
<<<<<<< HEAD
        'penggunaid'
    ];
}
=======
        'penggunaid',
    ];

    protected $casts = [
        'timestamp'    => 'datetime',
        'riwayatpoin'  => 'integer',
        'penggunaid'   => 'integer',
    ];

    public function pengguna()
    {
        return $this->belongsTo(Pengguna::class, 'penggunaid');
    }
}
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
=======
        'penggunaid'
    ];
}
>>>>>>> origin/dev-5026231105-Mirza-Fathi-Taufiqurrahman
