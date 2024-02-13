<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AVEGARZAS</title>
</head>
<body>
    <h3 class="mt-5" style="text-align: center;">{{ $titulo }} <span>AVEGARZAS</span></h3>
    <h4 class="mt-5" style="text-align: center;">Mes: {{$mes}} Año: {{$ano}} </h4>
    <table style="font-size: 0.8em; margin: 40px auto; border-collapse: collapse; border: 1px solid black;">
        <thead style="background-color: #eee;">
            <tr>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Nombres</th>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Apellidos</th>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Manz</th>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Casa</th>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Estado</th>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Monto</th>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Ref°</th>
                <th style="text-align: center; padding: 7px; border: 2px solid black;">Fecha de pago</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($registros as $item)
            <tr>
                <td style="text-align: center; padding: 7px; border: 1px solid black;">{{ $item['nombre'] }}</td>
                <td style="text-align: center; padding: 7px; border: 1px solid black;">{{ $item['apellidos'] }}</td>
                <td style="text-align: center; padding: 7px; border: 1px solid black;">{{ $item['manzana'] }}</td>
                <td style="text-align: center; padding: 7px; border: 1px solid black;">{{ $item['casa'] }}</td>
                <td style="text-align: center; padding: 7px; border: 1px solid black; {{ $item['estado'] === 'Pagado' ? 'background-color: #77dd77;' : 'background-color: #ff6666;' }}">{{ $item['estado'] }}</td>
                <td style="text-align: center; padding: 7px; border: 1px solid black;">{{ $item['monto'] }}</td>
                <td style="text-align: center; padding: 7px; border: 1px solid black;">{{ $item['numero_de_referencia'] }}</td>
                <td style="text-align: center; padding: 7px; border: 1px solid black;">{{ $item['fecha'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

