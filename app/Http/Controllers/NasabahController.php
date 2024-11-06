<?php

namespace App\Http\Controllers;

use App\Models\Nasabah;
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
        return view('nasabah-detail', compact('nasabah')); // Mengarahkan ke view dan mengirim data nasabah
        // return $nasabah;
    }
}
