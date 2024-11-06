<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Report;
use App\Models\Nasabah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $ao = User::where('jabatan', 'account officer')->count();
        $nasabah = Nasabah::count();
        $jmlLaporan = Report::count();
        return view('dashboard', ['AO' => $ao,'NASABAH'=>$nasabah,'JMLLAPORAN'=>$jmlLaporan]);
    }
}
