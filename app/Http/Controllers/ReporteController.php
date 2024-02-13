<?php

namespace App\Http\Controllers;

use App\Models\configuraciones;
use App\Models\Titulares;
use Illuminate\Http\Request;
use App\Models\mensualidades;
use Illuminate\Support\Carbon;
use Barryvdh\DomPDF\Facade\Pdf;

class ReporteController extends Controller
{
    public function main(){
        return view ('Backend.reportemain');
    }

    public function reporte(request $request){

        $vecino = $request->input('vecinos');
        $manzana = $request->input('manzana');
        $mes = $request->input('Mes');
        $ano = $request->input('Ano');
        $configuracion = configuraciones::orderBy('id', 'desc')->first();
        $monto = $configuracion->precio_dolar * $configuracion->precio_mensualidad;


        switch($vecino){
            case 1:

                if($manzana != 99){

                        $registros = [];

                        $usuarios = Titulares::where('manzana', $manzana)
                        ->orderBy('casa', 'asc')
                        ->get();

                            foreach($usuarios as $usuario){
                                $mensualidadp = null;
                                $mensualidadp = mensualidades::where('titular_id', $usuario->id)
                                ->whereBetween('mes_pagado', [
                                    Carbon::createFromDate($ano, $mes, 1),
                                    Carbon::createFromDate($ano, $mes, 28)
                                ])
                                ->first();

                                if($mensualidadp == null){
                                    $registros[] = [
                                        'registro' => 'no pago',
                                        'titular_id' => $usuario->id,
                                        'nombre' => $usuario->nombres,
                                        'apellidos' => $usuario->apellidos,
                                        'manzana' => $usuario->manzana,
                                        'casa' => $usuario->casa,
                                        'monto' => $monto,
                                        'estado' => 'Vencido',
                                        'numero_de_referencia' => 'N/A',
                                        'id_admin_aprob' => 'N/A',
                                        'fecha' => 'N/A'
                                ];
                                }else{
                                    $registros[] = [
                                        'registro' => 'pago',
                                        'titular_id' => $usuario->id,
                                        'nombre' => $usuario->nombres,
                                        'apellidos' => $usuario->apellidos,
                                        'manzana' => $usuario->manzana,
                                        'casa' => $usuario->casa,
                                        'monto' => $mensualidadp->monto,
                                        'estado' => 'Pagado',
                                        'numero_de_referencia' => $mensualidadp->numero_de_referencia,
                                        'id_admin_aprob' => $mensualidadp->id_admin_aprob,
                                        'fecha' => $mensualidadp->updated_at
                                ];
                                }
                            }

                            $titulo = 'Reporte de todos los vecinos en la manzana ' . $manzana;

                            $pdf = Pdf::loadView('Backend.reporte', compact('registros', 'mes', 'ano', 'titulo'));

                            return $pdf->stream('reporte.pdf');


                }else{

                    $registros = [];

                    $usuarios = Titulares::orderBy('manzana', 'asc')
                    ->orderBy('casa', 'asc')
                    ->get();

                        foreach($usuarios as $usuario){
                            $mensualidadp = null;
                            $mensualidadp = mensualidades::where('titular_id', $usuario->id)
                            ->whereBetween('mes_pagado', [
                                Carbon::createFromDate($ano, $mes, 1),
                                Carbon::createFromDate($ano, $mes, 28)
                            ])
                            ->first();

                            if($mensualidadp == null){
                                $registros[] = [
                                    'registro' => 'no pago',
                                    'titular_id' => $usuario->id,
                                    'nombre' => $usuario->nombres,
                                    'apellidos' => $usuario->apellidos,
                                    'manzana' => $usuario->manzana,
                                    'casa' => $usuario->casa,
                                    'monto' => $monto,
                                    'estado' => 'Vencido',
                                    'numero_de_referencia' => 'N/A',
                                    'id_admin_aprob' => 'N/A',
                                    'fecha' => 'N/A'
                            ];
                            }else{
                                $registros[] = [
                                    'registro' => 'pago',
                                    'titular_id' => $usuario->id,
                                    'nombre' => $usuario->nombres,
                                    'apellidos' => $usuario->apellidos,
                                    'manzana' => $usuario->manzana,
                                    'casa' => $usuario->casa,
                                    'monto' => $mensualidadp->monto,
                                    'estado' => 'Pagado',
                                    'numero_de_referencia' => $mensualidadp->numero_de_referencia,
                                    'id_admin_aprob' => $mensualidadp->id_admin_aprob,
                                    'fecha' => $mensualidadp->updated_at
                            ];
                            }
                        }

                        $titulo = 'Reporte de todos los vecinos de la urbanizacion';

                        $pdf = Pdf::loadView('Backend.reporte', compact('registros', 'mes', 'ano', 'titulo'));

                        return $pdf->stream('reporte.pdf');


                }

                break;

            case 2:

                if($manzana != 99){

                    $registros = [];

                    $usuarios = Titulares::where('manzana', $manzana)
                    ->orderBy('casa', 'asc')
                    ->get();

                        foreach($usuarios as $usuario){
                            $mensualidadp = null;
                            $mensualidadp = mensualidades::where('titular_id', $usuario->id)
                            ->whereBetween('mes_pagado', [
                                Carbon::createFromDate($ano, $mes, 1),
                                Carbon::createFromDate($ano, $mes, 28)
                            ])
                            ->first();

                            if($mensualidadp == null){
                            //     $registros[] = [
                            //         'registro' => 'no pago',
                            //         'titular_id' => $usuario->id,
                            //         'nombre' => $usuario->nombres,
                            //         'apellidos' => $usuario->apellidos,
                            //         'manzana' => $usuario->manzana,
                            //         'casa' => $usuario->casa,
                            //         'monto' => $monto,
                            //         'estado' => 'Vencido',
                            //         'numero_de_referencia' => 'N/A',
                            //         'id_admin_aprob' => 'N/A',
                            //         'fecha' => 'N/A'
                            // ];
                            }else{
                                $registros[] = [
                                    'registro' => 'pago',
                                    'titular_id' => $usuario->id,
                                    'nombre' => $usuario->nombres,
                                    'apellidos' => $usuario->apellidos,
                                    'manzana' => $usuario->manzana,
                                    'casa' => $usuario->casa,
                                    'monto' => $mensualidadp->monto,
                                    'estado' => 'Pagado',
                                    'numero_de_referencia' => $mensualidadp->numero_de_referencia,
                                    'id_admin_aprob' => $mensualidadp->id_admin_aprob,
                                    'fecha' => $mensualidadp->updated_at
                            ];
                            }
                        }

                        $titulo = 'Reporte de todos los vecinos pagos de la manzana ' . $manzana;

                        $pdf = Pdf::loadView('Backend.reporte', compact('registros', 'mes', 'ano', 'titulo'));

                        return $pdf->stream('reporte.pdf');


            }else{

                $registros = [];

                $usuarios = Titulares::orderBy('manzana', 'asc')
                ->orderBy('casa', 'asc')
                ->get();

                    foreach($usuarios as $usuario){
                        $mensualidadp = null;
                        $mensualidadp = mensualidades::where('titular_id', $usuario->id)
                        ->whereBetween('mes_pagado', [
                            Carbon::createFromDate($ano, $mes, 1),
                            Carbon::createFromDate($ano, $mes, 28)
                        ])
                        ->first();

                        if($mensualidadp == null){
                        //     $registros[] = [
                        //         'registro' => 'no pago',
                        //         'titular_id' => $usuario->id,
                        //         'nombre' => $usuario->nombres,
                        //         'apellidos' => $usuario->apellidos,
                        //         'manzana' => $usuario->manzana,
                        //         'casa' => $usuario->casa,
                        //         'monto' => $monto,
                        //         'estado' => 'Vencido',
                        //         'numero_de_referencia' => 'N/A',
                        //         'id_admin_aprob' => 'N/A',
                        //         'fecha' => 'N/A'
                        // ];
                        }else{
                            $registros[] = [
                                'registro' => 'pago',
                                'titular_id' => $usuario->id,
                                'nombre' => $usuario->nombres,
                                'apellidos' => $usuario->apellidos,
                                'manzana' => $usuario->manzana,
                                'casa' => $usuario->casa,
                                'monto' => $mensualidadp->monto,
                                'estado' => 'Pagado',
                                'numero_de_referencia' => $mensualidadp->numero_de_referencia,
                                'id_admin_aprob' => $mensualidadp->id_admin_aprob,
                                'fecha' => $mensualidadp->updated_at
                        ];
                        }
                    }

                    $titulo = 'Reporte de todos los vecinos pagos de la urbanizacion';

                    $pdf = Pdf::loadView('Backend.reporte', compact('registros', 'mes', 'ano', 'titulo'));

                    return $pdf->stream('reporte.pdf');


            }
            break;

            case 3:

                if($manzana != 99){

                    $registros = [];

                    $usuarios = Titulares::where('manzana', $manzana)
                    ->orderBy('casa', 'asc')
                    ->get();

                        foreach($usuarios as $usuario){
                            $mensualidadp = null;
                            $mensualidadp = mensualidades::where('titular_id', $usuario->id)
                            ->whereBetween('mes_pagado', [
                                Carbon::createFromDate($ano, $mes, 1),
                                Carbon::createFromDate($ano, $mes, 28)
                            ])
                            ->first();

                            if($mensualidadp == null){
                                $registros[] = [
                                    'registro' => 'no pago',
                                    'titular_id' => $usuario->id,
                                    'nombre' => $usuario->nombres,
                                    'apellidos' => $usuario->apellidos,
                                    'manzana' => $usuario->manzana,
                                    'casa' => $usuario->casa,
                                    'monto' => $monto,
                                    'estado' => 'Vencido',
                                    'numero_de_referencia' => 'N/A',
                                    'id_admin_aprob' => 'N/A',
                                    'fecha' => 'N/A'
                            ];
                            }else{
                            //     $registros[] = [
                            //         'registro' => 'pago',
                            //         'titular_id' => $usuario->id,
                            //         'nombre' => $usuario->nombres,
                            //         'apellidos' => $usuario->apellidos,
                            //         'manzana' => $usuario->manzana,
                            //         'casa' => $usuario->casa,
                            //         'monto' => $mensualidadp->monto,
                            //         'estado' => 'Pagado',
                            //         'numero_de_referencia' => $mensualidadp->numero_de_referencia,
                            //         'id_admin_aprob' => $mensualidadp->id_admin_aprob,
                            //         'fecha' => $mensualidadp->updated_at
                            // ];
                            }
                        }

                        $titulo = 'Reporte de todos los vecinos morosos en la manzana ' . $manzana;

                        $pdf = Pdf::loadView('Backend.reporte', compact('registros', 'mes', 'ano', 'titulo'));

                        return $pdf->stream('reporte.pdf');


            }else{

                $registros = [];

                $usuarios = Titulares::orderBy('manzana', 'asc')
                ->orderBy('casa', 'asc')
                ->get();

                    foreach($usuarios as $usuario){
                        $mensualidadp = null;
                        $mensualidadp = mensualidades::where('titular_id', $usuario->id)
                        ->whereBetween('mes_pagado', [
                            Carbon::createFromDate($ano, $mes, 1),
                            Carbon::createFromDate($ano, $mes, 28)
                        ])
                        ->first();

                        if($mensualidadp == null){
                            $registros[] = [
                                'registro' => 'no pago',
                                'titular_id' => $usuario->id,
                                'nombre' => $usuario->nombres,
                                'apellidos' => $usuario->apellidos,
                                'manzana' => $usuario->manzana,
                                'casa' => $usuario->casa,
                                'monto' => $monto,
                                'estado' => 'Vencido',
                                'numero_de_referencia' => 'N/A',
                                'id_admin_aprob' => 'N/A',
                                'fecha' => 'N/A'
                        ];
                        }else{
                        //     $registros[] = [
                        //         'registro' => 'pago',
                        //         'titular_id' => $usuario->id,
                        //         'nombre' => $usuario->nombres,
                        //         'apellidos' => $usuario->apellidos,
                        //         'manzana' => $usuario->manzana,
                        //         'casa' => $usuario->casa,
                        //         'monto' => $mensualidadp->monto,
                        //         'estado' => 'Pagado',
                        //         'numero_de_referencia' => $mensualidadp->numero_de_referencia,
                        //         'id_admin_aprob' => $mensualidadp->id_admin_aprob,
                        //         'fecha' => $mensualidadp->updated_at
                        // ];
                        }
                    }

                    $titulo = 'Reporte de todos los vecinos morosos de la urbanizacion';

                    $pdf = Pdf::loadView('Backend.reporte', compact('registros', 'mes', 'ano', 'titulo'));

                    return $pdf->stream('reporte.pdf');


            }

                break;

            default:

                dd('error');

                break;
        };

    }
}
