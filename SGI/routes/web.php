<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', HomeController::class);

Route::get('Productos', [ProductoController::class,'index'])->name('Productos.index');

Route::get('Productos/create', [ProductoController::class,'create'])->name('Productos.create');

Route::get('Productos/{IDproducto}', [ProductoController::class,'Show'])->name('Productos.show');
