<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'code',
        'nama',
        'no_hp',
        'email',
        'password',
        'jabatan',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
