<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SisingamangarajaController;

/*
|--------------------------------------------------------------------------
| Login Awal
|--------------------------------------------------------------------------
*/

// Halaman login awal
Route::get('/', function () {
    return view('welcome-login');
})->name('login-awal');

// Proses tombol “Mulai Membaca”
Route::post('/start', function () {
    return redirect()->route('home');
})->name('start');


/*
|--------------------------------------------------------------------------
| Halaman Utama Website
|--------------------------------------------------------------------------
*/

Route::get('/home', [SisingamangarajaController::class, 'home'])->name('home');
Route::get('/biografi', [SisingamangarajaController::class, 'biografi'])->name('biografi');
Route::get('/perjuangan', [SisingamangarajaController::class, 'perjuangan'])->name('perjuangan');
Route::get('/galeri', [SisingamangarajaController::class, 'galeri'])->name('galeri');
