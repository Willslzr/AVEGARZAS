<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Titulares extends Model
{
    use HasFactory;
    protected $fillable = [
        'usuario_id',
        'nombres',
        'apellidos',
        'email',
        'manzana',
        'casa',
        'telefono',
        'cedula',
        'fecha_de_nacimiento',
        'saldo_positivo'
    ];
    public function user(){

        return $this->belongsTo(User::class, 'id');
    }
}
