<?php

namespace App\Livewire\Visita;

use Livewire\Component;
use Illuminate\Support\Carbon;
use App\Models\configuraciones;

class Mostrar extends Component
{

    public $usuario;

    public $mespago;

    public $mesespendientes;

    public $dolar;

    public $costomensual;

    public $totalPendienteDolar;

    public $totalPedienteBolivar;

    public $check;


    public function mount(){

        $configuracion = configuraciones::orderBy('id', 'desc')->first();

        $this->dolar = $configuracion->precio_dolar;

        $this->costomensual = $configuracion->precio_mensualidad;

        $this->mesespendientes = $this->calmeses($this->mespago);

        // Calcular el número de elementos en $mesespendientes
        $numElementos = count($this->mesespendientes);

        // Calcular el total pendiente en dólares
        $this->totalPendienteDolar = ($numElementos - 1) * $this->costomensual;

        // Calcular el total pendiente en bolívares
        $this->totalPedienteBolivar = ($numElementos - 1) * $this->dolar * $this->costomensual;

        $this->check = $numElementos - 1;


    }

    public function update($valor)
    {
        // Actualiza el estado del pago
        $this->check = $valor;

        $this->totalPendienteDolar = $this->check * $this->costomensual;

        $this->totalPedienteBolivar = $this->check * $this->dolar * $this->costomensual;

    }
    public function render()
    {
        return view('livewire.visita.mostrar');
    }

    public function calmeses($mespago){
        // Obtener el mes actual
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
        $mes = Carbon::parse(strtotime($mespago))->addMonths($i)->format('F-Y');

        // Obtener la fecha del primer día del mes
        $fecha = Carbon::parse(strtotime($mespago))->addMonths($i)->startOfMonth()->format('d/m/Y');

        // Agregar el mes y la fecha al arreglo
        $mesesConFecha[] = [
        'mes' => $mes,
        'fecha' => $fecha,
        ];
    }

    $mesesEnIngles = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    $mesesEnEspanol = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];

    foreach ($mesesConFecha as &$mes) {
    $mes['mes'] = str_replace($mesesEnIngles, $mesesEnEspanol, $mes['mes']);
    }

    // dd($mesesConFecha,);
    // Devolver el arreglo
    return $mesesConFecha;
    }

}



