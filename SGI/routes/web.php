<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', HomeController::class);

Route::get('Productos', [ProductoController::class,'index']);

Route::get('Productos/create', [ProductoController::class,'create']);

Route::get('Productos/{pan}', [ProductoController::class,'Show']);
