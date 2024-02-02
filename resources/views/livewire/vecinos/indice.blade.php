<div>

<x-table>
    <x-slot name="thead">
        <tr>
        <th>Mes</th>
        <th>Estado</th>
        <th>Monto</th>
        <th>Aprobado por</th>
        <th>Fecha de aprobacion</th>
        <th>Acciones</th>
        </tr>
    </x-slot>
    <x-slot name="tbody">
        @if ($mensualidades->isEmpty())
        @foreach ($mesespendientes as $mes)
        <tr>
            <td>
                <h6 class="mb-0 text-sm">{{ $mes['fecha'] }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">Vencido</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $mes['monto'] }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">N/A</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">N/A</h6>
            </td>
            <td>
                <div class="btn-group">
                    <a href="#" target="_blank" class="btn btn-sm btn-info" style="margin-bottom: 0" data-toggle="tooltip" data-original-title="Editar">
                        <i class="material-icons text-sm">description</i>
                    </a>
                </div>
            </td>
            </tr>
            @endforeach
        @else

        @foreach ($mensualidades as $mes)
            <tr>
            <td>
                <h6 class="mb-0 text-sm">{{ \Carbon\Carbon::parse($mes->mes_pagado)->format('m/Y') }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $mes->estado }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $mes->monto }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $mes->id_admin_aprob === 1 ? "william salazar" : $mes->id_admin_aprob }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $mes->updated_at }}</h6>
            </td>
            <td>
                <div class="btn-group">
                    <a href="{{route('vecino.reporte', $mes->id)}}" target="_blank" class="btn btn-sm btn-info" style="margin-bottom: 0" data-toggle="tooltip" data-original-title="Editar">
                        <i class="material-icons text-sm">description</i>
                    </a>

                </div>
            </td>
            </tr>
        @endforeach
        @foreach ($mesespendientes as $mes)
        <tr>
            <td>
                <h6 class="mb-0 text-sm">{{ $mes['fecha'] }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">Vencido</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $mes['monto'] }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">N/A</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">N/A</h6>
            </td>
            <td>
                <div class="btn-group">
                <form action="{{route('visita.buscar')}}" method="GET">
                    <input name="manzana" type="number" class="form-control" value="{{$usuario->manzana}}" hidden>
                    <input name="casa" type="number" class="form-control" value="{{$usuario->casa}}" hidden>
                    <button type="submit" class="btn btn-sm btn-danger" style="margin-bottom: 0"><i class="material-icons text-sm">payments</i></button>
                </form>
                </div>
            </td>
            </tr>
            @endforeach
        @endif

    </x-slot>
</x-table>

</div>
