<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>CARTA DE RECIBO AVEGARZAS</title>
    <style>
        .firmas-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
        }
        .bold {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h3 class="mt-5" style="text-align: center;">CARTA DE RECIBO AVEGARZAS</h3>
    <p>Esta carta sirve para confirmar y autorizar el retiro de fondos para el pago por el rubro de <span class="bold">{{ $pago->categoria }}</span>, por un monto de <span class="bold">{{ $pago->monto }}</span>, gestionado por <span class="bold">{{ $pago->aprobado_por }}</span>, dejando un saldo activo en caja de <span class="bold">{{ $pago->caja_act }}</span> el día <span class="bold">{{ $pago->created_at }}</span>.</p>
    <h4>Observaciones:</h4>
    <p><span class="bold">{{ $pago->descripcion }}</span></p>
    <br><br><br>
    <div class="firmas-container">
        <p style="float: left; margin-right: 20px; margin-left: 150px;">_______________                      </p>
        <p style="float: left; margin-right: 20px; margin-left: 150px;">_______________</p>
        <br><br/>
        <p style="margin-left: 150px;">firma de presidente</p>
        <p style="float: right; margin-right: 100px;">firma de coordinador de tesorería</p>
    </div>
</body>
</html>
