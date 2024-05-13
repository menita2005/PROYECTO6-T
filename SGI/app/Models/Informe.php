<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;

    public $timestamps = false;

    
    protected $table = 'informes'; // Nombre de la tabla en la base de datos
}
