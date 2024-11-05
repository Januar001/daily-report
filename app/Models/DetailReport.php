<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailReport extends Model
{
    use HasFactory;

    protected $fillable = [
        'report_id',
        'latitude',
        'longitude',
        'lokasi_kunjungan',
        'keterangan',
        'foto',
        'jenis_kunjungan',
        'date_created',
    ];

    public function report()
    {
        return $this->belongsTo(Report::class);
    }
}
