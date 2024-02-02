<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\cajas;
use App\Models\pagos;
use App\Models\categorias;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Validator;

class CartasdePagoController extends Controller
{
    public function index(){
        return view ('Backend.CartasdePago.indice');
    }

    public function create(){
        $categorias = categorias::all();

        return view ('Backend.CartasdePago.create', compact('categorias'));
    }

    public function edit($id){

        $pago=pagos::where('id', $id)->first();

        return view ('Backend.CartasdePago.edit', compact('pago', 'id'));
    }

    public function reporte(){

        $pagos = pagos::all();

        $pdf = Pdf::loadView('Backend.CartasdePago.reporte', compact('pagos'));

        return $pdf->stream('reporte_pagos.pdf');

    }

    public function recibo($id){

        $pago = pagos::where('id', $id)->first();

        $pdf = Pdf::loadView('Backend.CartasdePago.recibo', compact('pago'));

        return $pdf->stream('reporte_recibo.pdf');
    }

    public function store(request $request){

        try{


        $validator = Validator::make($request->all(), [
            'monto' => ['decimal:2', 'required', 'max:' . cajas::where('id', 1)->first()->value('dinero_en_caja')],
            'descripcion' => 'required'

        ]);

        $validator->setCustomMessages([
            'monto.decimal' => 'El monto debe ser un numero con 2 decimales',
            'monto.required' => 'Se requiere un monto',
            'monto.max' => 'El monto excede la cantidad en caja',
            'descripcion' => 'La observacion no puede estar vacia',
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        }catch(Exception $e){

            dd($e);

        }

        $categoria = categorias::where('id', $request->input('categoria'))
        ->first();


        $caja=cajas::where('id', 1)
        ->value('dinero_en_caja');

        $totalCaja = $caja - $request->input('monto');

        pagos::create([
            'categoria' => $categoria->nombre,
            'monto' => $request->input('monto'),
            'descripcion' => $request->input('descripcion'),
            'aprobado_por' => $request->input('aprobado_por'),
            'caja_act' => $totalCaja
        ]);

        cajas::where('id', 1)->update([
            'dinero_en_caja' => $totalCaja
        ]);

        return to_route('cartasdepago')->with('status', 'Pago cargado');
    }



    public function guardar(Request $request){

        $validator = Validator::make($request->all(), [
            'descripcion' => 'required'
        ]);

        $validator->setCustomMessages([
            'descripcion' => 'La observacion no puede estar vacia',
        ]);

        if ($validator->fails()) {
            // dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        pagos::where('id', $request->input('id'))->update([
            'descripcion' => $request->input('descripcion'),
        ]);

        return to_route('cartasdepago')->with('status', 'Observacion guardada');
    }
}
