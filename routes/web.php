<?php

use App\Http\Controllers\NasabahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('dashboard');
});
// Route::get('/user', function () {
//     return view('user');
// });

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/nasabah', [NasabahController::class, 'index'])->name('nasabah.index');

Route::get('/report/kunjungan', function () {
    return view('report-kunjungan');
});
Route::get('/report/marketing', function () {
    return view('report-marketing');
});
Route::get('/report/survei', function () {
    return view('report-survei');
});
