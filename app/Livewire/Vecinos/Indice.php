<?php

namespace App\Livewire\Vecinos;

use Livewire\Component;
use App\Models\Titulares;
use Livewire\WithPagination;
use App\Models\mensualidades;
use Illuminate\Support\Carbon;
use App\Models\configuraciones;
use Illuminate\Support\Facades\Auth;

class Indice extends Component
{
    public $fechaActual;
    public $usuario;

    public $mensualidades;

    public $mesespendientes;

    public function mount()
    {

        $this->fechaActual = Carbon::now();

        $this->usuario = Titulares::where('usuario_id', Auth::user()->id)
        ->first();

        $this->mensualidades = mensualidades::where('titular_id', $this->usuario->id)
        ->get();


        $ultimaMensualidad = mensualidades::where('titular_id', $this->usuario->id)
        ->orderBy('mes_pagado', 'desc')
        ->first();

        $this->mesespendientes = $this->calmeses($ultimaMensualidad->mes_pagado);

    }

    public function render()
    {
        return view('livewire.vecinos.indice');
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
