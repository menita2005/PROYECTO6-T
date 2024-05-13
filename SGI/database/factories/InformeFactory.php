<?php

namespace Database\Factories;

use App\Models\Informe;
use Illuminate\Database\Eloquent\Factories\Factory;

class InformeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {return [

        'Tipo' => $this->faker->sentence(2), 
        'Fecha_I' => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
    ];
    }
}
