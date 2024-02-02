<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>AVEGARZAS</title>
</head>
<body>
    <h3 class="mt-5" style="text-align: center;">Reporte de titulares <span>AVEGARZAS</span></h3>
    <h4 class="mt-5" style="text-align: center;">Datos personales</h4>
    <table style="font-size: 0.8em; margin: 40px auto; border-collapse: collapse; border: 1px solid black;">
        <thead style="background-color: #eee;">
            <tr>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Nombres</th>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Apellidos</th>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Manzana</th>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Casa</th>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Correo</th>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Telefono</th>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Fecha de Nacimiento</th>
                <th style="text-align: center; padding: 5px; border: 2px solid black;">Registrado</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
            <tr>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">{{ $usuario->nombres }}</td>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">{{ $usuario->apellidos }}</td>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">{{ $usuario->manzana }}</td>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">{{ $usuario->casa }}</td>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">{{ $usuario->email ?? " "}}</td>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">
                    @if (isset($usuario->telefono))
                        0{{ substr($usuario->telefono, 0, 3) . '-' . substr($usuario->telefono, 3) }}
                    @else
                        &nbsp;
                    @endif
                </td>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">{{ $usuario->fecha_de_nacimiento }}</td>
                <td style="text-align: center; padding: 5px; border: 1px solid black;">
                    @if (isset($usuario->usuario_id))
                        SI
                    @else
                        NO
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
