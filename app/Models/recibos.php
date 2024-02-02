<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recibos extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_mensualidad',
        'pagado_por',
        'aprobado_por',
        'monto',
        'observaciones',

    ];

}
