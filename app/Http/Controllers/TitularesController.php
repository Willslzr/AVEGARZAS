<?php

namespace App\Http\Controllers;

use Exception;
use DateInterval;
use App\Models\casas;
use App\Models\Titulares;
use Nette\Utils\DateTime;
use Illuminate\Http\Request;
use App\Models\mensualidades;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class TitularesController extends Controller
{
    public function index(){
        return view("Backend.titulares.indice");
    }

    public function create(){
        return view("Backend.titulares.create");
    }

    public function store(Request $request){

        try{

        $validator = Validator::make($request->all(), [
            'nombres' => ['required', 'string', 'max:255'],
            'apellidos' => ['required', 'string', 'max:255'],
            'email' => ['string', 'max:255', 'email', 'unique:titulares', 'nullable'],
            'dia' => ['integer','min:0','max:31', 'nullable'],
            'mes' => ['integer','min:0','max:12', 'nullable'],
            'ano' => ['integer', 'nullable', 'min:' . (new DateTime())->sub(new DateInterval('P100Y'))->format('Y'),'max:' . (new DateTime())->sub(new DateInterval('P18Y'))->format('Y')],
            'cedula' => ['integer','min:0','max:50000000', 'nullable'],
            'telefono_numero' => ['integer','min:0', 'digits:7', 'nullable'],
            'manzana' => ['required', 'integer','min:1','max:22'],
            'casa' => ['required', 'integer','min:0','max:50'],
            'mescancel' => ['required', 'integer', 'min:1', 'max:12'],
            'anocancel' => ['required', 'integer']
        ]);

        $validator->setCustomMessages([
            'nombres.required' => 'El campo "nombres" es obligatorio',
            'nombres.max' => 'El nombre no debe tener mas de 255 letras',
            'apellidos.required' => 'El campo "apellidos" es obligatorio',
            'apellidos.max' => 'El apellidos no debe tener mas de 255 letras',
            'email.email' => 'El campo "email" debe ser una dirección de correo electrónico válida.',
            'email.unique' => 'Este correo ya esta siendo utilizado',
            'dia' => 'Dia inválido',
            'mes' => 'Mes debe ser un numero entre 1 y 12',
            'ano' => 'Año inválido',
            'cedula' => 'Numero de cedula invalido',
            'telefono_numero' => 'Numero de telefono invalido',
            'manzana' => 'Numero de manzana invalido',
            'casa' => 'Numero de casa invalido',
            'casa.unique' => 'Esa casa ya esta registrada',
            'mescancel' => 'Ultimo mes cancelado invalido',
            'anocancel' => 'Año del ultimo mes cancelado invalido'
        ]);

        if ($validator->fails()) {
            dd($validator);
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $direccionocupa = Titulares::where('casa', $request->casa)
                            ->where('manzana', $request->manzana)
                            ->first();

        if ($direccionocupa != null){
            throw new Exception('Casa ocupada por: '. $direccionocupa->nombres . " " . $direccionocupa->apellidos);
        }

        if($request->ano || $request->mes || $request->dia == null ){
            $fecha = null;
        }else{
            $fecha = Carbon::create(
                $request->ano,
                $request->mes,
                $request->dia
            );
        }

        if ($request->telefono_numero == null){
            $telefono = null;
        } else {
            $telefono = $request->telefono_prefijo.$request->telefono_numero;
        }

        $titular = Titulares::create([
            'nombres' => strtoupper($request->nombres),
            'apellidos' => strtoupper($request->apellidos),
            'manzana' => $request->manzana,
            'email' => $request->email,
            'casa' => $request->casa,
            'telefono' => $telefono,
            'cedula' => $request->cedula,
            'fecha_de_nacimiento' => $fecha,
            'saldo_positivo' => "0",
        ]);

        mensualidades::create([
            'titular_id' => $titular->id,
            'mes_pagado' => Carbon::create($request->anocancel, $request->mescancel, 1),
            'monto' => "0",
            'imagen' => null,
            'numero_de_referencia' => "100001",
            'estado' => 'aprobado',
            'numero_de_meses' => "1",
            'id_admin_aprob' => Auth::id(),
        ]);

        return to_route('titulares')->with('status', 'El titular ha sido registrado');

        }catch(Exception $e){

            dd($e, $request->casa, $request->manzana);

        }

    }
}
