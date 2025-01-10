<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;

Route::post('/reservations', [ReservationController::class, 'store']);
Route::get('/reservations', [ReservationController::class, 'index']);
Route::get('/validate/{qr_code}', [ReservationController::class, 'validateQrCode']);