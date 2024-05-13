<?php

namespace Database\Seeders;

use App\Models\Categoria;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Categoria::factory(5)->create();
        echo "¡Los datos de Categoria se han Cargado correctamente!";
    }
}
