<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nameCar' => fake()->paragraph(1),
            'typeCar' => fake()->paragraph(1),
            'priceCar'=> fake()->paragraph(1),
            'user_id' => User::factory(),
        ];
    }
}
