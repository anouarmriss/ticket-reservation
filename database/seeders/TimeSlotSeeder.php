<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\TimeSlot;

class TimeSlotSeeder extends Seeder
{
    public function run()
    {
        $times = [
            '09:00', '10:00', '11:00', '12:00',
            '13:00', '14:00', '15:00', '16:00',
            '17:00'
        ];

        foreach ($times as $time) {
            TimeSlot::create([
                'start_time' => $time,
                'max_visitors' => 100,
                'is_active' => true
            ]);
        }
    }
}