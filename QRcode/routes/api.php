<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\QrController;


Route::apiResource('karyawan', KaryawanController::class);
Route::apiResource('Qr', QrController::class);
Route::get('/generate', [QrController::class, 'generateQR'])->name('generate');


