<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/generate-qr', [QrController::class, 'generateQR'])-> name('generate');
