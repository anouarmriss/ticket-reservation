<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;  // Add this import
use App\Models\Reservation;  // Add this import

// Your existing routes...

Route::get('/mail-preview', function () {
    $user = User::factory()->create();
    $reservation = Reservation::factory()->create(['user_id' => $user->id]);
    $qrCodePath = storage_path('app/public/qrcodes/test123.png');
    
    return new App\Mail\ReservationConfirmation($reservation, $qrCodePath);
});