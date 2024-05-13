<?php

namespace Database\Factories;

use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Usuario>
 */
class VentaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'C_Venta' => $this->faker->numberBetween(1, 100), // Cantidad de venta
            'V_Venta' => $this->faker->randomFloat(2, 10, 1000), // Valor de la venta
            'F_venta' => $this->faker->dateTime(), // Fecha de la venta
        ];
    
    }
}
