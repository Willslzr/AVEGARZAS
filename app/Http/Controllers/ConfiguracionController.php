<?php

namespace App\Http\Controllers;

use App\Models\categorias;
use Illuminate\Http\Request;
use App\Models\configuraciones;
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

    public function configurar(){

        $categorias = categorias::all();

        return view ('Backend.categorias', compact('categorias'));
    }

    public function guardar(Request $request){

        $validator = Validator::make($request->all(), [
            'nombre' => ['required', 'unique:categorias'],
            'descripcion' => ['required'],
        ]);
        $validator->setCustomMessages([
            'nombre' => 'Nombre vacio o duplicado',
            'descripcion' => 'Descripcion Vacia'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        categorias::create([
            'nombre' => $request->nombre,
            'descripcion' => $request->descripcion,
        ]);

        return to_route('configurar')->with('status', 'se registrado categoria');
    }

    public function eliminar($id){

        categorias::where('id', $id)->delete();

        return to_route('configurar')->with('status', 'se ha eliminado categoria');
    }

}
