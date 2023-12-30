<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        $usuario = Auth::user();

        //aqui ira mi logica para extraer la informacion que necesito de la base de datos
        //y dibujarla en el dashboard del usuario

        return view('Backend.dashboard');
    }
}
