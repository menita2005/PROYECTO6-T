<?php

namespace Database\Seeders;

use App\Models\Proveedor;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProveedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Proveedor::factory(5)->create();
        echo "¡Los datos de proveedor se han Cargado correctamente!";
    }
}
