<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AVEGARZAS</title>
</head>
<body>
    <h3 class="mt-5" style="text-align: center;">Reporte de pagos <span>AVEGARZAS</span></h3>
    <h4 class="mt-5" style="text-align: center;">Cartas de pagos</h4>
    <table style="font-size: 0.8em; margin: 40px auto; border-collapse: collapse; border: 1px solid black;">
        <thead style="background-color: #eee;">
            <tr>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Categoria</th>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Aprobado por</th>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Monto</th>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Observacion</th>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Monto en caja</th>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Fecha</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pagos as $item)
            <tr>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">{{ $item->categoria }}</td>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">{{ $item->aprobado_por }}</td>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">{{ $item->monto }}</td>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">{{ $item->descripcion }}</td>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">{{ $item->caja_act }}</td>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">{{ $item->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
