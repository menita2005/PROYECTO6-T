<?php

namespace Database\Seeders;

use App\Models\Informe;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InformeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Informe::factory(5)->create();
        echo "¡Los datos de informe se han cargado correctamente!";
    }
}
