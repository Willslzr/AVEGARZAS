<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class casas extends Model
{
    use HasFactory;
    protected $fillable = [
        'titular_id',
        'manzana',
        'casa'

    ];
}
