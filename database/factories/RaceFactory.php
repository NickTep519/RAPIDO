<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Race>
 */
class RaceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'starting_point' => $this->faker->city(),
            'arrival_point' => $this->faker->city(),
            'starting_date_time' => $this->faker->dateTime(),
            'arrival_date_time' => $this->faker->dateTime(),
            'race-status' => $this->faker->randomElement(['on_hold','in_progress', 'arrived']),
        ];
    }
}
