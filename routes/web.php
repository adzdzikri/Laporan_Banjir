<?php

use App\Http\Controllers\LaporBanjirController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => redirect()->route('laporan.form'));

Route::get('/laporan', [LaporBanjirController::class, 'form'])->name('laporan.form');
Route::post('/laporan/konfirmasi', [LaporBanjirController::class, 'konfirmasi'])->name('laporan.konfirmasi');
Route::get('/laporan/daftar', [LaporBanjirController::class, 'daftar'])->name('laporan.daftar');
