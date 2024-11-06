<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SurveiController;
use App\Http\Controllers\NasabahController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KunjunganController;
use App\Http\Controllers\MarketingController;

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

Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

Route::get('/user', [UserController::class, 'index'])->name('user.index');

Route::get('/nasabah', [NasabahController::class, 'index'])->name('nasabah.index');

Route::get('/report/kunjungan', [KunjunganController::class, 'index'])->name('report.kunjungan');

Route::get('/report/marketing', [MarketingController::class, 'index'])->name('report.marketing');

Route::get('/report/survei', [SurveiController::class, 'index'])->name('report.survei');

