<?php
<<<<<<< HEAD

=======
// {{--5026231088 Tsanita Shafa Hadinanda--}}
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TukarPoin extends Model
{
    protected $table = 'tukarpoin';
    protected $primaryKey = 'tukarid';
    public $timestamps = false;

    protected $fillable = [
        'judul',
        'poindibutuhkan',
        'redeem',
        'nilai',
        'generatenotoken',
        'penggunaid'
    ];
<<<<<<< HEAD
}
=======
}
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
