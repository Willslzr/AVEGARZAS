<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TitularesController extends Controller
{
    public function index(){
        return view("Backend.titulares.indice");
    }
}
