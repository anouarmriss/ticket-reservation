<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Models\Reservation;

class ReservationConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public $reservation;
    public $qrCodePath;

    public function __construct(Reservation $reservation, $qrCodePath)
    {
        $this->reservation = $reservation;
        $this->qrCodePath = $qrCodePath;
    }

    public function build()
    {
        return $this->subject('Your Reservation Confirmation - ' . $this->reservation->qr_code)
                    ->view('emails.reservation-confirmation')
                    ->attach($this->qrCodePath, [
                        'as' => 'your-ticket-qr-code.png',
                        'mime' => 'image/png'
                    ]);
    }
}