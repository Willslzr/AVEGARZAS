<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\cajas;
use Illuminate\Http\Request;
use App\Models\mensualidades;
use App\Models\configuraciones;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){

        $usuario = Auth::user();

        $caja = cajas::first();
        $dinerocaja = $caja ? $caja->dinero_en_caja : 0;

        // $dinerocaja = cajas::first()
        // ->value('dinero_en_caja' ?? 0);

        $pDolar = configuraciones::first()
        ->value('precio_dolar') ?? 0;

        $caja = round($dinerocaja / $pDolar, 2);

        $nUsuarios = User::count();

        $pCobros = mensualidades::where('estado', 'pendiente')
        ->count();


        //aqui ira mi logica para extraer la informacion que necesito de la base de datos
        //y dibujarla en el dashboard del usuario

        return view('Backend.dashboard', compact('usuario', 'caja', 'nUsuarios', 'pCobros', 'pDolar', 'dinerocaja'));
    }
}
