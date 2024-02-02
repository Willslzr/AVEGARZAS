<?php

namespace App\Http\Controllers;

use App\Models\Titulares;
use Illuminate\Http\Request;
use App\Models\mensualidades;
use Barryvdh\DomPDF\Facade\Pdf;

class VecinoController extends Controller
{
    public function main(){

    return view ('Backend.vecinos.main');

    }

    public function reporte($id){

        $mensualidad = mensualidades::where('id', $id)->first();


        $titular = Titulares::where('id', $mensualidad->titular_id)->first();


        $pdf = Pdf::loadView('Backend.vecinos.reporte', compact('titular', 'mensualidad'));


        return $pdf->download('recibo.pdf');

        // return view ('Backend.vecinos.reporte', compact('titular', 'mensualidad'));

    }

    public function mostrar($manzana, $casa){
        $usuario = Titulares::where('manzana', $manzana)
        ->where('casa', $casa)
        ->first();

        $mespago = $usuario->mensualidades()->orderBy('id', 'desc')->first()->mes_pagado;


        return view ('Backend.vecinos.mostrar', compact('mespago', 'usuario'));
    }
}
