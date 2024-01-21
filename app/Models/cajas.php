<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cajas extends Model
{
    use HasFactory;

    protected $fillable = [
        'dinero_en_caja',
    ];

}
