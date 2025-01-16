<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;  // Add this line

    protected $fillable = [
        'name',
        'email',
        'phone'
    ];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}