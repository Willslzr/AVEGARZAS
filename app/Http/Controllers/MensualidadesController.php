<?php

namespace App\Http\Controllers;

use App\Models\Titulares;
use Illuminate\Http\Request;
use App\Models\mensualidades;
use Illuminate\Support\Carbon;
use App\Models\configuraciones;
use Barryvdh\DomPDF\Facade\Pdf;

class MensualidadesController extends Controller
{
    public function index()
    {
    return view ("Backend.mensualidades.indice");
    }

    public function reportepersonal($id){

        $mensualidades = mensualidades::where('titular_id', $id)
        ->get();

        $titular = Titulares::where('id', $id)->first();

        $ultimaMensualidad = mensualidades::where('titular_id', $id)
        ->orderBy('mes_pagado', 'desc')
        ->first();
        // dd($ultimaMensualidad);

        $mesespendientes = $this->calmeses($ultimaMensualidad->mes_pagado);

        // dd($mesespendientes);

        $pdf = Pdf::loadView('Backend.mensualidades.reportes.personal', compact('titular', 'mensualidades', 'mesespendientes'));


        return $pdf->stream('reporte.pdf');

        // return view ('reportes.equipos', compact('equipos'));
    }

    public function reportegeneral(){
        $usuarios = Titulares::orderBy('manzana', 'asc')
        ->orderBy('casa', 'asc')
        ->get();
        // dd($usuarios);

        $fechaActual = Carbon::now();

        $pdf = Pdf::loadView('Backend.mensualidades.reportes.general', compact('usuarios', 'fechaActual'));


        return $pdf->stream('reporte_general.pdf');
    }




    public function calmeses($mespago){
        // Obtener el mes actual
    $configuracion = configuraciones::orderBy('id', 'desc')->first();

    $monto = $configuracion->precio_dolar * $configuracion->precio_mensualidad;

    $mesActual = Carbon::now();

    // Obtener el mes de pago
    $mesPago = Carbon::parse($mespago);

    // Obtener la diferencia entre los dos meses
    $diferencia = $mesPago->diffInMonths($mesActual);

    // Crear un arreglo vacío
    $mesesConFecha = [];

    // Recorrer la diferencia de meses
    for ($i = 1; $i <= $diferencia; $i++) {
        // Obtener el mes actual

        // Obtener la fecha del primer día del mes
        $fecha = Carbon::parse(strtotime($mespago))->addMonths($i)->startOfMonth()->format('m/Y');

        // Agregar el mes y la fecha al arreglo
        $mesesConFecha[] = [
            'fecha' => $fecha,
            'monto' => $monto
        ];
    }



    // dd($mesesConFecha,);
    // Devolver el arreglo
    return $mesesConFecha;
    }
}
