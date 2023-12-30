<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulares extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario_id',
        'nombre',
        'manzana',
        'casa',
        'telefono',
        'cedula',
        'fecha_de_nacimiento',
        'saldo_positivo'
    ];
}
