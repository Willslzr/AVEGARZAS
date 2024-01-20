<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mensualidades extends Model
{
    use HasFactory;

    protected $fillable = [
        'titular_id',
        'monto',
        'mes_pagado',
        'imagen',
        'numero_de_referencia',
        'estado',
        'id_admin_aprob'

    ];
}
