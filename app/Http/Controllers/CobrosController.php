<?php

namespace App\Http\Controllers;

use App\Models\cajas;
use Illuminate\Http\Request;
use App\Models\mensualidades;

class CobrosController extends Controller
{
    public function index(){
        return view('Backend.cobros.indice');
    }

    public function aprobar(Request $request){

        $id = $request->route('id');
        $mes = mensualidades::find($id);
        $mes->estado = 'aprobado';
        $mes->save();


        $caja = cajas::first();
        $dineroencaja = $caja->dinero_en_caja;
        $dineroentrante = $mes->monto;
        $total = $dineroencaja + $dineroentrante;

        cajas::where('id', 2)
        ->update([
            'dinero_en_caja' => $total,
        ]);


        return view('Backend.cobros.indice');
    }
}
