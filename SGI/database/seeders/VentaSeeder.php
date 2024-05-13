<?php

namespace Database\Seeders;

use App\Models\Venta;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class VentaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Venta::factory(5)->create();
        echo "¡Los datos de venta se han cargado correctamente!";
    }
}
