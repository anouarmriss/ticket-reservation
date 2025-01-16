<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;  // Add this line

    protected $fillable = [
        'user_id',
        'reservation_date',
        'reservation_time',
        'qr_code',
        'is_used'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}