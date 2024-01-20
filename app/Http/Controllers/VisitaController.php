<?php

namespace App\Http\Controllers;

use App\Models\Titulares;
use Illuminate\Http\Request;

class VisitaController extends Controller
{
    public function main(){
        return view ('visitaMain');
    }

    public function buscar(request $request){
        $usuario = Titulares::where('manzana', $request->input('manzana'))
        ->where('casa', $request->input('casa'))
        ->first();

        // dd($usuario, $usuario->mensualidades()->latest()->value('mes_pagado'));

        $mespago = $usuario->mensualidades()->latest()->value('mes_pagado');

        return view ('visitaMostrar', compact('mespago', 'usuario'));
    }

    public function mostrar(){
        return ('llegamos a mostrar');
    }

    public function store(){

    }
}
