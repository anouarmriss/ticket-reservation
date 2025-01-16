<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimeSlot extends Model
{
    use HasFactory;

    protected $fillable = [
        'start_time',
        'max_visitors',
        'is_active'
    ];

    protected $casts = [
        'start_time' => 'datetime',
        'is_active' => 'boolean'
    ];

    public static function getMaxVisitors()
    {
        $timeSlot = self::where('is_active', true)->first();
        return $timeSlot ? $timeSlot->max_visitors : 100; // Default to 100 if no setting found
    }
}   