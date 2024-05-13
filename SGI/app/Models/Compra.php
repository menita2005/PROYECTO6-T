<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    public $timestamps = false;

    
    protected $table = 'compras'; // Nombre de la tabla en la base de datos

    // Resto del código del modelo...
}
