<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class MarketingController extends Controller
{
    public function index(){
        $marketing = Report::with('User', 'Nasabah')
                    ->where('jenis_kunjungan', 'marketing')->paginate(10);
        // return $marketing;
        return view('report-marketing', ['marketing' => $marketing]);
    }
}
