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
        <th wire:click="sortBy('nombres')">Nombres
            <span class="sort-arrow">
                @if ($sortField === 'nombres')
                    @if ($sortDirection === 'asc')
                        <i class="fas fa-sort-up"></i>
                    @else
                        <i class="fas fa-sort-down"></i>
                    @endif
                @endif
            </span>
        </th>
        <th wire:click="sortBy('apellidos')">Apellidos
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
        <th>Casa</th>
        <th>Meses Vencidos</th>
        <th>Ultimo Pago</th>
        <th>Acciones</th>
        </tr>
    </x-slot>
    <x-slot name="tbody">
        @if ($usuarios->isEmpty())
            <tr>
                <td colspan="7" class="text-center py-4">No hay registros</td>
            </tr>
        @else
        @foreach ($usuarios as $usuario)
            <tr>
            <td>
                <h6 class="mb-0 text-sm">{{ $usuario->nombres }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $usuario->apellidos }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $usuario->manzana }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $usuario->casa }}</h6>
            </td>

            @if($usuario->mensualidades()->latest()->first() && $fechaActual)
            @php
                $ultimaMensualidad = \Carbon\Carbon::parse($usuario->mensualidades()->latest()->first()->mes_pagado);
                $diferenciaMeses = $ultimaMensualidad->diffInMonths($fechaActual);
            @endphp
            <td>
                <h6 class="mb-0 text-sm">
                @if($diferenciaMeses > 1)
                    <span class="badge badge-sm bg-gradient-secondary">{{ $diferenciaMeses - 1 }} meses</span>
                @else
                    <span class="badge badge-sm bg-gradient-success">Solvente</span>
                @endif
                </h6>
            </td>
            @else
                <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-secondary">Sin información</span>
                </td>
            @endif

            <td>
                @if($usuario->mensualidades()->latest()->first() && $fechaActual)
                <h6 class="mb-0 text-sm">{{ \Carbon\Carbon::parse($usuario->mensualidades()->latest()->first()->mes_pagado)->format('m/Y') }}</h6>
                @else
                <h6 class="mb-0 text-sm">Sin información</h6>
                @endif
            </td>

            <td>
                <div class="btn-group">
                    <a href="#" class="btn btn-sm btn-info" style="margin-bottom: 0" data-toggle="tooltip" data-original-title="Ver información">
                        <i class="material-icons text-sm">visibility</i>
                    </a>
                    <a href="#" class="btn btn-sm btn-primary" style="margin-bottom: 0" data-toggle="tooltip" data-original-title="Editar">
                        <i class="material-icons text-sm">edit</i>
                    </a>
                </div>
            </td>
            </tr>
        @endforeach
        @endif
    </x-slot>
</x-table>

{{ $usuarios->links() }}

</div>
