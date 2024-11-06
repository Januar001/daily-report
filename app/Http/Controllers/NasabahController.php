<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
use App\Models\Report;
use Illuminate\Http\Request;

class NasabahController extends Controller
{
    public function index()
    {
        $nasabah = Nasabah::paginate(10);
        return view('nasabah', compact('nasabah'));

    }

    public function show($cif)
    {
        $nasabah = Nasabah::where('cif', $cif)->first(); // Mengambil data nasabah berdasarkan CIF
        $report = Report::with('nasabah','user')->where('nasabah_id',$nasabah->id)->get();
        $report_last = Report::with('nasabah','user')->where('nasabah_id',$nasabah->id)->latest()->first();
        // $lat = $report_last->latitude;
        // $long = $report_last->longitude;
        // $latlong= $lat .','. $long;
        if ($report_last) {
            // Jika ada laporan, ambil latitude dan longitude
            $lat = $report_last->latitude;
            $long = $report_last->longitude;
            $latlong = $lat . ',' . $long;
        } else {
            // Jika tidak ada laporan, tetapkan nilai default atau kosong
            $latlong = null; // atau "0,0" sebagai koordinat default
        }

        return view('nasabah-detail', ['nasabah'=>$nasabah,'report'=>$report,'latlong'=>$latlong]); // Mengarahkan ke view dan mengirim data nasabah
        // return $report;
    }
}
