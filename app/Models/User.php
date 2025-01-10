<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}