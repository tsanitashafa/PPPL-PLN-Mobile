<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
// Main Part by Mirza Fathi Taufiqurrahman 5026231105


class Pengguna extends Authenticatable
{
    protected $table = 'pengguna';
    protected $primaryKey = 'penggunaid';
    public $incrementing = true;
    protected $keyType = 'int';
    public $timestamps = false;

    protected $fillable = ['phone', 'nama', 'email', 'pin', 'poin', 'tier', 'notifenabled', 'saldo', 'photourl', 'tanggallahir'];

    // by mirza
    // Accessor: ketika mengakses $user->profile_image, mengembalikan nilai photourl
    public function getProfileImageAttribute()
    {
        return $this->photourl ?: 'assets/img/image-profile.png';
    }

    // Mutator: ketika mengatur $user->profile_image = value, disimpan ke photourl
    public function setProfileImageAttribute($value)
    {
        $this->attributes['photourl'] = $value;
    }
}
