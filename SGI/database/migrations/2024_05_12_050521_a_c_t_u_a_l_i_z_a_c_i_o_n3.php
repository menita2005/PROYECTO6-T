<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration

{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Crear la tabla Productos
        Schema::create('productos', function (Blueprint $table) {
            $table->id('id');
            $table->string('NombreP');
            $table->text('Descripcion')->nullable();
            $table->integer('Precio');
            $table->integer('stock');
            $table->timestamps();
        });

        // Crear la tabla Proveedores
        Schema::create('proveedores', function (Blueprint $table) {
            $table->id('id');
            $table->string('Nombre');
            $table->string('N_Contacto');
            $table->string('Direccion');
            $table->string('Correo');
            $table->timestamps();
        });

        // Crear la tabla Compras
        Schema::create('compras', function (Blueprint $table) {
            $table->id('id');
            $table->integer('C_Compra');
            $table->integer('V_Compra');
            $table->date('F_Compra');
            $table->timestamps();
        });

        // Crear la tabla Categorias
        Schema::create('categorias', function (Blueprint $table) {
            $table->id('id');
            $table->string('N_Categoria');
            $table->timestamps();
        });

        // Crear la tabla Ventas
        Schema::create('ventas', function (Blueprint $table) {
            $table->id('id');
            $table->integer('C_Venta');
            $table->integer('V_Venta');
            $table->date('F_Venta');
            $table->timestamps();
        });

        // Crear la tabla Informes
        Schema::create('informes', function (Blueprint $table) {
            $table->id('id');
            $table->string('Tipo');
            $table->date('Fecha_I');
            $table->timestamps();
        });

       
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
        Schema::dropIfExists('proveedores');
        Schema::dropIfExists('compras');
        Schema::dropIfExists('categorias');
        Schema::dropIfExists('ventas');
        Schema::dropIfExists('informes');
        
    }
};

