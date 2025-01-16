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
        return $this->view('emails.reservation-confirmation')
                    ->subject('Your Reservation Confirmation')
                    ->attach($this->qrCodePath, [
                        'as' => 'qr-code.png',
                        'mime' => 'image/png'
                    ]);
    }
}