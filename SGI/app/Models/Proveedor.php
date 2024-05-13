<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'proveedores'; // Nombre de la tabla en la base de datos

    // Resto del código del modelo...
}