<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class SurveiController extends Controller
{
    public function index(){
        $survei = Report::with('User', 'Nasabah')
                    ->where('jenis_kunjungan', 'survei')->paginate(10);
        // return $survei;
        return view('report-survei', ['survei' => $survei]);
    }
}
