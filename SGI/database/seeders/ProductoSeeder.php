<?php

namespace Database\Seeders;

use App\Models\Producto;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Producto::factory(5)->create();
        echo "¡Los datos de productos se han cargado correctamente!";
    }
    
}
