<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Driver>
 */
class DriverFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(), 
            'first_name' => $this->faker->firstName(),
            'phone' => $this->faker->phoneNumber(),
            'sex' => $this->faker->randomElement(['M', 'F']),
            'availability' => $this->faker->boolean() , 
        ];
    }
}
