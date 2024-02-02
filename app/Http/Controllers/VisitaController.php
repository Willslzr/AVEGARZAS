<?php

namespace App\Http\Controllers;

use App\Models\Titulares;
use Illuminate\Http\Request;
use App\Models\mensualidades;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class VisitaController extends Controller
{
    public function main(){
        return view ('Backend/visitaMain');
    }

    public function buscar(request $request){
        $usuario = Titulares::where('manzana', $request->input('manzana'))
        ->where('casa', $request->input('casa'))
        ->first();

        if (!$usuario) {
            return redirect()->back()->with('error', 'No existe esa casa');
        }

        // dd($usuario->mensualidades()->orderBy('id', 'desc')->first());

        $mespago = $usuario->mensualidades()->orderBy('id', 'desc')->first()->mes_pagado;
        // dd($usuario->mensualidades()->orderBy('id', 'desc')->first()->mes_pagado, $mespago);

        return view ('Backend/visitaMostrar', compact('mespago', 'usuario'));
    }



    public function store(Request $request){

        if($request->hasFile('soporte')){
            $soporte = $request->file('soporte');
            $carpeta = 'assets/soportes/';
            $nombre = time() .  '-' . $soporte->getClientOriginalName();
            $carga = $request->file('soporte')->move($carpeta, $nombre);
            $soporte = $carpeta . $nombre;
        }else{
            $soporte = 'assets/soportes/default.jpeg';
        }

        $mes_inicio = mensualidades::where('titular_id', $request->input('usuario_id'))
        ->orderBy('mes_pagado', 'desc')
        ->value('mes_pagado');

        $mes_pagado = Carbon::parse($mes_inicio)->addMonths($request->input('meses_pagados'));

        // dd($request->toArray(), $request->input('mes_inicio'), $mes_inicio, $mes_pagado);


        $nMensualidades = $request->meses_pagados;
        $montoUnitario = $request->monto / $nMensualidades;
        $fechaInicio = Carbon::createFromFormat('d/m/Y', $request->mes_inicio);
        $fechaActual = $fechaInicio;

        // dd($request, $mes_pagado, $mes_inicio);

        for($i=0; $i < $nMensualidades; $i++){

        $fechaInicio = Carbon::createFromFormat('d/m/Y', $request->mes_inicio);

        $fechaActual = $fechaInicio->addMonths($i);

            mensualidades::create([
                'titular_id' => $request->input('usuario_id'),
                'mes_pagado' => $fechaActual,
                'numero_de_meses' => 1,
                'monto' => $montoUnitario,
                'imagen' => $soporte,
                'numero_de_referencia' => $request->input('referencia'),
                'estado' => 'pendiente',
                'id_admin_aprob' => null,
            ]);
        }

        return $this->main();

    }
}
