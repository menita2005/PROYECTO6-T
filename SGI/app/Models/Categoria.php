<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Categoria extends Model
{
    use HasFactory;

    protected $table = 'categorias'; // Nombre de la tabla en la base de datos

    public $timestamps = false;

    // Resto del código del modelo...
}