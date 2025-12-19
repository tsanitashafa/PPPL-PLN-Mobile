<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



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
        return $this->photourl;
    }

    // Mutator: ketika mengatur $user->profile_image = value, disimpan ke photourl
    public function setProfileImageAttribute($value)
    {
        $this->attributes['photourl'] = $value;
    }
}
