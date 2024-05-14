<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        
        $this->call(ProductoSeeder::class);
        
        $this->call(CategoriaSeeder::class);

        $this->call(CompraSeeder::class);

        $this->call(InformeSeeder::class);

        $this->call(ProveedorSeeder::class);

        $this->call(UsuarioSeeder::class);

        
        $this->call(VentaSeeder::class);
    }
}
