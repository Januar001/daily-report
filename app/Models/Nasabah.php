<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Nasabah extends Model
{
    use HasFactory;

    protected $table = 'nasabah';

    protected $fillable = [
        'nama',
        'CIF',
        'alamat',
        'user_id',
        'Kolektibilitas',
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
    public function user()    
    {
        return $this->belongsTo(User::class);
    }
}
