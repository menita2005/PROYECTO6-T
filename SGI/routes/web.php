<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\CompraController;
use App\Http\Controllers\VentaController;


Route::get('/', HomeController::class);

Route::get('Productos', [ProductoController::class,'index'])->name('Productos.index');

Route::get('Productos/create', [ProductoController::class,'create'])->name('Productos.create');

Route::get('Productos/{id}', [ProductoController::class,'Show'])->name('Productos.show');
//Proveedor
Route::get('Proveedor', [ProveedorController::class,'index'])->name('Proveedor.index');

Route::get('Proveedor/create', [ProveedorController::class,'create'])->name('Proveedor.create');

Route::get('Proveedor/{id}', [ProveedorController::class,'Show'])->name('Proveedor.show');
//Categoria
Route::get('Categoria', [CategoriaController::class,'index'])->name('Categoria.index');

Route::get('Categoria/create', [CategoriaController::class,'create'])->name('Categoria.create');

Route::get('Categoria/{id}', [CategoriaController::class,'Show'])->name('Categoria.show');
//Compra
Route::get('Compra', [CompraController::class,'index'])->name('Compra.index');

Route::get('Compra/create', [CompraController::class,'create'])->name('Compra.create');

Route::get('Compra/{id}', [CompraController::class,'Show'])->name('Compra.show');
//Venta
Route::get('Venta', [VentaController::class,'index'])->name('Venta.index');

Route::get('Venta/create', [VentaController::class,'create'])->name('Venta.create');

Route::get('Venta/{id}', [VentaController::class,'Show'])->name('Venta.show');
//Informes
