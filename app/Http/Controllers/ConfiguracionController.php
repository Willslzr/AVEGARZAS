<?php

namespace App\Http\Controllers;

use App\Models\configuraciones;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConfiguracionController extends Controller
{
    public function main(){

    $precios = configuraciones::select('precio_dolar', 'precio_mensualidad', 'id')
    ->orderBy('id', 'desc')
    ->first();


    return view ('Backend.configuracion', compact('precios'));

    }

    public function store(Request $request){

            $validator = Validator::make($request->all(), [
            'PrecioDolar' => ['required', 'numeric', 'min:0.00', 'max:1000.00'],
            'PrecioMensualidad' => ['required', 'numeric', 'min:0.00', 'max:1000.00'],
        ]);

        $validator->setCustomMessages([
            'PrecioDolar' => 'Dato para el precio del dolar invalido',
            'PrecioMensualidad' => 'Dato para la Mensualidad invalido'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        configuraciones::create([
            'precio_dolar' => $request->PrecioDolar,
            'precio_mensualidad' => $request->PrecioMensualidad,
        ]);

        return to_route('configuracion')->with('status', 'se han actualizado los precios');
}
}
