<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nasabah_id',
        'latitude',
        'longitude',
        'lokasi_kunjungan',
        'keterangan',
        'foto',
        'jenis_kunjungan',
        'kolek_lap',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function nasabah()
    {
        return $this->belongsTo(Nasabah::class);
    }

    // public function detailReports()
    // {
    //     return $this->hasOne(DetailReport::class);
    // }
}
