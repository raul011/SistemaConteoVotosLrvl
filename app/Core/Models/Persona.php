<?php

namespace App\Core\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    // Nombre de la tabla en la base de datos
    protected $table = 'personas';

    // Campos asignables masivamente
    protected $fillable = ['nombre', 'apellido', 'email'];
}
