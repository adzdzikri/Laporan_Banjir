<?php

use App\Http\Controllers\LaporBanjirController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('laporan.form'));

Route::get('/laporan', [LaporBanjirController::class, 'form'])->name('laporan.form');
Route::post('/laporan/konfirmasi', [LaporBanjirController::class, 'konfirmasi'])->name('laporan.konfirmasi');
Route::get('/laporan/daftar', [LaporBanjirController::class, 'daftar'])->middleware('auth')->name('laporan.daftar');

// ===== Authentication manual =====
Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])
    ->middleware('guest')->name('register');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'create'])
    ->middleware('guest')->name('login');
Route::post('/login', [\App\Http\Controllers\LoginController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [\App\Http\Controllers\LoginController::class, 'destroy'])
    ->middleware('auth')->name('logout');

Route::get('/profil', fn () => view('auth.profil'))
    ->middleware('auth')->name('profil');
