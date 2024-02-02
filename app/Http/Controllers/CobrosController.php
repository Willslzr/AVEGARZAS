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

    public function aprobar($id){

        $mes = mensualidades::find($id);
        $todosMeses = mensualidades::where('numero_de_referencia', $mes->numero_de_referencia)
        ->where('created_at', $mes->created_at)
        ->get();
        $dineroentrante = 0;
        foreach($todosMeses as $mes){
        $mes->estado = 'aprobado';
        $mes->id_admin_aprob = '1';
        $mes->save();
        $dineroentrante = $dineroentrante + $mes->monto;
        }

        // dd($dineroentrante);

        $caja = cajas::first();
        $dineroencaja = $caja->dinero_en_caja;
        $total = $dineroencaja + $dineroentrante;

        cajas::where('id', 1)
        ->update([
            'dinero_en_caja' => $total,
        ]);


        return redirect()->route('cobros');

    }

    public function soporte($id){

        $imagen=mensualidades::where('id', $id)
        ->first();

        return view('Backend.cobros.soporte', compact('imagen'));
    }

    public function rechazar($id){

        $mes = mensualidades::find($id);
        $todosMeses = mensualidades::where('numero_de_referencia', $mes->numero_de_referencia)
        ->where('created_at', $mes->created_at)
        ->get();

        // dd($todosMeses);

        foreach($todosMeses as $mes){
        $mes->estado = 'rechazado';
        $mes->delete();
        }

        // dd($dineroentrante);


        return redirect()->route('cobros');

    }
}
