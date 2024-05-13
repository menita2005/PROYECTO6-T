<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proveedor>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'Nombre' => $this->faker->sentence(5),
            'N_Contacto' => $this->faker->phoneNumber(),
            'Direccion' => $this->faker->address(),
            'Correo' => $this->faker->email()
        ];
    }
}
