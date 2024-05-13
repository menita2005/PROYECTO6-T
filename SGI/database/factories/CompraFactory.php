<?php

namespace Database\Factories;

use App\Models\Compra;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompraFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'C_compra' => $this->faker->numberBetween(1, 100),
            'V_compra' => $this->faker->randomFloat(2, 10, 1000),
            'F_compra' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
        ];
    }
}

