<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class KunjunganController extends Controller
{
    public function index()
    {
        $kunjungan = Report::with('User', 'Nasabah')
                    ->where('jenis_kunjungan', 'Kunjungan')->paginate(10);
        // return $kunjungan;
        return view('report-kunjungan', ['kunjungan' => $kunjungan]);

    }
}
