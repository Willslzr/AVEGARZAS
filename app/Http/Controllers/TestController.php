<?php

namespace App\Http\Controllers;

use App\Models\Titulares;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test(){


        return view ('test2');
    }
}
