<?php

use App\Http\Controllers\DokterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\RekamController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\LaporanController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route Login
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login/proses', [LoginController::class, 'proses']);
Route::get('/login/logout', [LoginController::class, 'logout']);

Route::group(['middleware' => ['auth']], function(){

    // Route Halaman
    Route::get('/', [HalamanController::class, 'index']);

    // Route Untuk Dokter
    Route::resource('dokter', DokterController::class);

    // Route Untuk Pasien
    Route::resource('pasien', PasienController::class);

    // Route Untuk Rekam Medis
    Route::resource('rekam', RekamController::class);

    // Route Untuk Obat
    Route::resource('obat', ObatController::class);

    // Route Untuk Ruangan
    Route::resource('ruang', RuangController::class);

    // Route Untuk Laporan
    // Route::resource('laporan', LaporanController::class);
    Route::get('/laporan', [LaporanController::class, 'index']);
    Route::get('/cetak/{tgl_awal}/{tgl_akhir}', [LaporanController::class, 'cetak']);
});


// by -> zwan06
