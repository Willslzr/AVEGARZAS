<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class configuraciones extends Model
{
    use HasFactory;

    protected $fillable = [
        'precio_dolar',
        'precio_mensualidad',

    ];

}
