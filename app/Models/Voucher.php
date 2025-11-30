<?php
<<<<<<< HEAD
<<<<<<< HEAD

=======
// {{--5026231088 Tsanita Shafa Hadinanda--}}
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
=======

>>>>>>> origin/dev-5026231105-Mirza-Fathi-Taufiqurrahman
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
<<<<<<< HEAD
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
=======
}
>>>>>>> origin/dev-5026231105-Mirza-Fathi-Taufiqurrahman
