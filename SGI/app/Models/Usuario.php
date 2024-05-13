<?php
namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;


class Usuario extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false; // Desactivar las marcas de tiempo

    /**
     * The attributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'Nombre',
        'Email',
        'Clave',
    ];

    /**
     * The attributes that should be hidden for serialization.
     * 
     * @var array<int, string>
     */
    protected $hidden = [
        'Clave'
    ];

    // Definir mutador para el atributo Nombre
    public function setNombreAttribute($value)
    {
        $this->attributes['Nombre'] = strtolower($value);
    }

    // Definir mutador para el atributo Nombre
    public function getNombreAttribute($value)
    {
        return ucwords($value);
    }
}
