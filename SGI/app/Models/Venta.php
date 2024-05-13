<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    use HasFactory;

    public $timestamps = false;

    
    protected $table = 'ventas'; // Nombre de la tabla en la base de datos

    // Resto del código del modelo...
}