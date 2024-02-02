<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AVEGARZAS</title>
</head>
<body>
    <h3 class="mt-5" style="text-align: center;">{{$titular['nombres'] . ' ' . $titular['apellidos']}} </h3>
    <h4 class="mt-5" style="text-align: center;">Manzana: {{$titular['manzana'] . ' Casa: ' . $titular['casa']}} </h4>
    <table style="margin: 40px auto; border-collapse: collapse; border: 1px solid black;">
        <thead style="background-color: #eee;">
            <tr>
                <th style="text-align: center; border: 1px solid black;">Mes</th>
                <th style="text-align: center; border: 1px solid black;">Estado</th>
                <th style="text-align: center; border: 1px solid black;">Monto</th>
                <th style="text-align: center; border: 1px solid black;">Aprobado por</th>
                <th style="text-align: center; border: 1px solid black;">Fecha de aprobacion:</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($mensualidades as $mes)
            <tr>
                <td style="text-align: center; padding: 10px; border: 1px solid black;">{{ \Carbon\Carbon::parse($mes->mes_pagado)->format('m/Y') }}</td>
                <td style="text-align: center; padding: 10px; border: 1px solid black;">{{ $mes->estado }}</td>
                <td style="text-align: center; padding: 10px; border: 1px solid black; background-color: #c4f7c4;">{{ $mes->monto }}</td>
                <td style="text-align: center; padding: 10px; border: 1px solid black;">{{ $mes->id_admin_aprob }}</td>
                <td style="text-align: center; padding: 10px; border: 1px solid black;">{{ $mes->updated_at }}</td>
            </tr>
            @endforeach
            @foreach ($mesespendientes as $mes)
            <tr>
                <td style="text-align: center; padding: 10px; border: 1px solid black;">{{ $mes['fecha'] }}</td>
                <td style="text-align: center; padding: 10px; border: 1px solid black;">Vencido</td>
                <td style="text-align: center; padding: 10px; border: 1px solid black; background-color: #ffcccc;">{{ $mes['monto'] }}</td>
                <td style="text-align: center; padding: 10px; border: 1px solid black;">N/A</td>
                <td style="text-align: center; padding: 10px; border: 1px solid black;">N/A</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
