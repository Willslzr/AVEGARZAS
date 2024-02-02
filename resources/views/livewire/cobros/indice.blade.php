<div>
    <div class="d-flex flex-row py-2">
        <div class="">
            <input wire:model="search" wire:change="updateSearch" type="search" placeholder="Buscar" wire:keydown.enter="updateSearch"
            @blur="updateSearch">
        </div>
        <div class="">
            <select wire:model="perPage" wire:change="updatePage" class="align-self-stretch h-100">
                <option value="10">10</option>
                <option value="20">20</option>
                <option value="50">50</option>
            </select>
        </div>
        <div class="" wire:loading>
            <span class="spinner-border spinner-border-sm ms-2" role="status" aria-hidden="true"></span>
        </div>
    </div>
<x-table>
    <x-slot name="thead">
        <tr>
        <th wire:click="sortBy('id')">Nombre
            <span class="sort-arrow">
                @if ($sortField === 'id')
                    @if ($sortDirection === 'asc')
                        <i class="fas fa-sort-up"></i>
                    @else
                        <i class="fas fa-sort-down"></i>
                    @endif
                @endif
            </span>
        </th>
        <th wire:click="sortBy('manzana')">Manzana
            <span class="sort-arrow">
                @if ($sortField === 'manzana')
                    @if ($sortDirection === 'asc')
                        <i class="fas fa-sort-up"></i>
                    @else
                        <i class="fas fa-sort-down"></i>
                    @endif
                @endif
            </span>
        </th>
        <th wire:click="sortBy('casa')">Casa
            <span class="sort-arrow">
                @if ($sortField === 'casa')
                    @if ($sortDirection === 'asc')
                        <i class="fas fa-sort-up"></i>
                    @else
                        <i class="fas fa-sort-down"></i>
                    @endif
                @endif
            </span>
        </th>
        <th wire:click="sortBy('apellidos')">Mes
            <span class="sort-arrow">
                @if ($sortField === 'apellidos')
                    @if ($sortDirection === 'asc')
                        <i class="fas fa-sort-up"></i>
                    @else
                        <i class="fas fa-sort-down"></i>
                    @endif
                @endif
            </span>
        </th>
        <th wire:click="sortBy('manzana')">Monto
            <span class="sort-arrow">
                @if ($sortField === 'manzana')
                    @if ($sortDirection === 'asc')
                        <i class="fas fa-sort-up"></i>
                    @else
                        <i class="fas fa-sort-down"></i>
                    @endif
                @endif
            </span>
        </th>
        <th>Ref°</th>
        <th>Telefono</th>
        <th>Acciones</th>
        </tr>
    </x-slot>
    <x-slot name="tbody">
        {{-- @dd($mensualidades) --}}
        @if ($mensualidades->isEmpty())
            <tr>
                <td colspan="8" class="text-center py-4">No hay registros</td>
            </tr>
        @else
        @foreach ($mensualidades as $mes)
            <tr>
            <td>
                <h6 class="mb-0 text-sm">{{ explode(" ", $mes->titular()->first()->nombres)[0] . " " . explode(" ", $mes->titular()->first()->apellidos)[0] }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $mes->titular()->first()->manzana }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $mes->titular()->first()->casa }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ \Carbon\Carbon::parse($mes->mes_pagado)->format('m/Y') }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $mes->monto }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $mes->numero_de_referencia }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">0{{ substr($mes->titular->telefono, 0, 3) . '-' . substr($mes->titular->telefono, 3) }}</h6>
            </td>

            <td>
                <div class="btn-group">

                    <a href="{{route('cobros.soporte', $mes->id)}}" target="_blank" class="btn btn-sm btn-info" title="Soporte" style="margin-bottom: 0" data-toggle="tooltip" data-original-title="Ver información">
                        <i class="material-icons text-sm">visibility</i>
                    </a>

                    <a href="{{route('cobros.rechazar', $mes->id)}}" class="btn btn-sm btn-primary" title="Rechazar" style="margin-bottom: 0" data-toggle="tooltip" data-original-title="Rechazar">
                        <i class="material-icons text-sm">close</i>
                    </a>
                    <a href="{{route('cobros.aprobar', $mes->id)}}" class="btn btn-sm btn-success" title="Aprobar" style="margin-bottom: 0" data-toggle="tooltip" data-original-title="Aprobar">
                        <i class="material-icons text-sm">check</i>
                    </a>
                </div>
            </td>
            </tr>

        @endforeach
        @endif
    </x-slot>
</x-table>

{{ $mensualidades->links() }}

</div>
