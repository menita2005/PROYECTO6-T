<?php

namespace Database\Factories;

use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'NombreP' => $this->faker->sentence(),
            'Descripcion' => $this->faker->paragraph(),
            'Precio' => $this->faker->randomFloat(2, 10, 1000),
            'stock' => $this->faker->numberBetween(0, 100),

        ];
        
    }
}

