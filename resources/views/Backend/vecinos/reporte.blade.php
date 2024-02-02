<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Recibo de Pago - Avegarzas</title>
  <style>
    .container {
      width: 80%;
      margin: 0 auto;
      text-align: center;
    }
    .title {
      font-size: 24px;
      font-weight: bold;
    }
    .content {
      font-size: 16px;
      line-height: 1.5;
    }
    .signature {
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="title">RECIBO DE PAGO</h1>
    <p class="content">La presente hace constar que <strong>{{ $titular->nombres . " " . $titular->apellidos }}</strong>, canceló la mensualidad N° {{$mensualidad->id}}, que corresponde al mes de <strong>{{ \Carbon\Carbon::parse($mensualidad->mes_pagado)->format('m/Y') }}</strong>, por un monto de <strong>{{ $mensualidad->monto }} Bs</strong>.</p>
    <p class="content">El pago fue recibido y aprobado por <strong>William Salazar</strong>.</p>
    <br>
    <br>
    <div class="signature">
      <p>____________________________</p>
      <p>Firma de William Salazar</p>
    </div>
  </div>
</body>
</html>
