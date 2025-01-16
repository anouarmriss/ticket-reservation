<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Models\User;
use App\Models\Reservation;
use App\Mail\ReservationConfirmation;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Testing\RefreshDatabase;

class EmailTest extends TestCase
{
    use RefreshDatabase;

    public function test_reservation_confirmation_email_can_be_sent()
    {
        Mail::fake();

        // Create a user
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'phone' => '1234567890'
        ]);

        // Create a reservation
        $reservation = Reservation::factory()->create([
            'user_id' => $user->id,
            'reservation_date' => '2025-01-20',
            'reservation_time' => '14:00:00',
            'qr_code' => 'test123'
        ]);

        // Generate QR Code path
        $qrCodePath = storage_path('app/public/qrcodes/test123.png');

        // Send the email
        Mail::to($user->email)
            ->send(new ReservationConfirmation($reservation, $qrCodePath));

        // Assert email was sent
        Mail::assertSent(ReservationConfirmation::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email);
        });
    }

    public function test_email_contains_correct_information()
    {
        Mail::fake();

        // Create test data
        $user = User::factory()->create();
        $reservation = Reservation::factory()->create([
            'user_id' => $user->id
        ]);
        $qrCodePath = storage_path('app/public/qrcodes/test123.png');

        // Send email
        $mailable = new ReservationConfirmation($reservation, $qrCodePath);

        // Assert email content
        $mailable->assertSeeInHtml($user->name);
        $mailable->assertSeeInHtml($reservation->reservation_date);
        $mailable->assertSeeInHtml($reservation->reservation_time);
    }
}