<?php

namespace App\Models;

<<<<<<< HEAD
<<<<<<< HEAD
use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
=======
=======
>>>>>>> origin/dev-5026231105-Mirza-Fathi-Taufiqurrahman
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

<<<<<<< HEAD


class Pengguna extends Authenticatable
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
=======
// Models pengguna + function profile picture by Mirza Fathi Taufiqurrahman 5026231105

class Pengguna extends Authenticatable
>>>>>>> origin/dev-5026231105-Mirza-Fathi-Taufiqurrahman
{
    protected $table = 'pengguna';
    protected $primaryKey = 'penggunaid';
    public $timestamps = false;

<<<<<<< HEAD
<<<<<<< HEAD
    protected $fillable = [
        'nama',
        'email',
        'phone',
        'poin',
        'tier',
        'photourl',
        'tanggallahir',
        'notifenabled',
        'saldo',
        'pin'
    ];
}
=======
    protected $fillable = ['phone', 'nama', 'email', 'pin', 'poin', 'tier', 'notifenabled', 'saldo', 'photourl', 'tanggallahir'];

    // by mirza
=======
    protected $fillable = ['phone', 'nama', 'email', 'pin', 'poin', 'tier', 'notifenabled', 'saldo', 'photourl', 'tanggallahir'];

>>>>>>> origin/dev-5026231105-Mirza-Fathi-Taufiqurrahman
    // Accessor: ketika mengakses $user->profile_image, mengembalikan nilai photourl
    public function getProfileImageAttribute()
    {
        return $this->photourl;
    }

    // Mutator: ketika mengatur $user->profile_image = value, disimpan ke photourl
    public function setProfileImageAttribute($value)
    {
        $this->attributes['photourl'] = $value;
    }
}
<<<<<<< HEAD
>>>>>>> origin/dev-5026231088-Tsanita-Shafa-Hadinanda
=======
>>>>>>> origin/dev-5026231105-Mirza-Fathi-Taufiqurrahman
