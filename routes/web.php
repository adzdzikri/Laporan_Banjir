<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporBanjirController;

Route::get('/', function () {
    return redirect('/laporbanjir');
});

Route::get('/laporbanjir', [LaporBanjirController::class, 'form']);

Route::post('/laporbanjir/kirim', [LaporBanjirController::class, 'kirim']);