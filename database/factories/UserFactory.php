<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->unique()->userName,
            'email' => $this->faker->unique()->safeEmail,
            'password' => bcrypt('password123'),
            'dob' => Carbon::today()->subYears(20)->subDays(rand(1, 365)),
            'joined_date' => Carbon::today()->subYears(1),
            'hourly_rate' => $this->faker->randomFloat(2, 10, 50),
        ];
    }
}
