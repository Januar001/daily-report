<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nasabah extends Model
{
    use HasFactory;

    protected $table = 'nasabah';

    protected $fillable = [
        'nama',
        'CIF',
        'alamat',
        'AO',
        'Kolektibilitas',
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}