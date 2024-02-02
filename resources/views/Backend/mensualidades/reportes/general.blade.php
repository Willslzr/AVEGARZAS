<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AVEGARZAS</title>
</head>
<body>
    <h3 class="mt-5" style="text-align: center;">Reporte General <span>AVEGARZAS</span></h3>
    <h4 class="mt-5" style="text-align: center;">Mensualidades</h4>
    <table style="font-size: 0.8em; margin: 40px auto; border-collapse: collapse; border: 1px solid black;">
        <thead style="background-color: #eee;">
            <tr>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Nombres</th>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Apellidos</th>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Manzana</th>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Casa</th>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Meses Vencidos</th>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Ultimo Mes Pago</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td style="text-align: center; padding: 7px; border: 1px solid black;">{{ $usuario->nombres }}</td>
                <td style="text-align: center; padding: 7px; border: 1px solid black;">{{ $usuario->apellidos }}</td>
                <td style="text-align: center; padding: 7px; border: 1px solid black;">{{ $usuario->manzana }}</td>
                <td style="text-align: center; padding: 7px; border: 1px solid black;">{{ $usuario->casa }}</td>
                @if($usuario->mensualidades()->orderBy('id', 'desc')->first() && $fechaActual)
            {{-- @dd($usuario->mensualidades()->orderBy('id', 'desc')->first()) --}}
            @php
                $ultimaMensualidad = \Carbon\Carbon::parse($usuario->mensualidades()->orderBy('id', 'desc')->first()->mes_pagado);
                $diferenciaMeses = $ultimaMensualidad->diffInMonths($fechaActual);
            @endphp
                @if($diferenciaMeses > 1)
                    <td style="text-align: center; padding: 7px; border: 1px solid black; background-color: lightpink;">
                        {{ $diferenciaMeses - 1 }} meses
                    </td>
                    @else
                    <td style="text-align: center; padding: 7px; border: 1px solid black; background-color: lightgreen;">
                        Solvente
                    </td>
                @endif
            @else
                <td style="text-align: center; padding: 7px; border: 1px solid black;">
                    Sin información
                </td>
            @endif
            <td style="text-align: center; padding: 7px; border: 1px solid black;">
                @if($usuario->mensualidades()->orderBy('id', 'desc')->first() && $fechaActual)
                {{ \Carbon\Carbon::parse($usuario->mensualidades()->orderBy('id', 'desc')->first()->mes_pagado)->format('m/Y') }}
                @else
                Sin información
                @endif
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

