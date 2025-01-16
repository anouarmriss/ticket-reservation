<?php

namespace Database\Factories;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'reservation_date' => $this->faker->date(),
            'reservation_time' => $this->faker->time('H:i'),
            'qr_code' => $this->faker->unique()->uuid,
            'is_used' => false,
        ];
    }
}