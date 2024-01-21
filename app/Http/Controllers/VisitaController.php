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

        $mespago = $usuario->mensualidades()->latest()->value('mes_pagado');

        // dd($usuario, $mespago);

        return view ('Backend/visitaMostrar', compact('mespago', 'usuario'));
    }

    public function mostrar(){
        return ('llegamos a mostrar');
    }

    public function store(Request $request){

        $mes_inicio = mensualidades::where('titular_id', $request->input('usuario_id'))
        ->orderBy('mes_pagado', 'desc')
        ->value('mes_pagado');

        $mes_pagado = Carbon::parse($mes_inicio)->addMonths($request->input('meses_pagados'));

        // dd($request->toArray(), $request->input('mes_inicio'), $mes_inicio, $mes_pagado);

        mensualidades::create([
            'titular_id' => $request->input('usuario_id'),
            'mes_pagado' => $mes_pagado,
            'numero_de_meses' => $request->input('meses_pagados'),
            'monto' => $request->input('monto'),
            'imagen' => $request->input('soporte'),
            'numero_de_referencia' => $request->input('referencia'),
            'estado' => 'pendiente',
            'id_admin_aprob' => null,
        ]);

        return $this->main();

    }
}
