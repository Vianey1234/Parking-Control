<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Incidente extends Model
{
    use HasFactory;

    // Agrega los campos que pueden ser llenados masivamente
    protected $fillable = [
        'titulo',
        'descripcion',
        'tipo',
    ];
}
