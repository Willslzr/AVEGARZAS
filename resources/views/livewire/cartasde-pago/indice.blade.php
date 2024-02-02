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
        <div class="ms-auto">
            <div class="">
                <a href="{{route('cartasdepago.create')}}" class="btn btn-sm bg-gradient-success mb-0">Nuevo</a>
                <a href="{{route('cartasdepago.reporte')}}" target="_blank" class="btn btn-sm bg-gradient-info mb-0">Reporte</a>
            </div>
        </div>
    </div>

<x-table>
    <x-slot name="thead">
        <tr>
        <th wire:click="sortBy('categoria')">Categoria
            <span class="sort-arrow">
                @if ($sortField === 'categoria')
                    @if ($sortDirection === 'asc')
                        <i class="fas fa-sort-up"></i>
                    @else
                        <i class="fas fa-sort-down"></i>
                    @endif
                @endif
            </span>
        </th>
        <th wire:click="sortBy('aprobado_por')">aprobado por
            <span class="sort-arrow">
                @if ($sortField === 'aprobado_por')
                    @if ($sortDirection === 'asc')
                        <i class="fas fa-sort-up"></i>
                    @else
                        <i class="fas fa-sort-down"></i>
                    @endif
                @endif
            </span>
        </th>
        <th>Monto</th>
        <th>Observacion</th>
        <th>Acciones</th>
        </tr>
    </x-slot>
    <x-slot name="tbody">
        @if ($pagos->isEmpty())
            <tr>
                <td colspan="7" class="text-center py-4">No hay registros</td>
            </tr>
        @else
        @foreach ($pagos as $pago)
            <tr>
            <td>
                <h6 class="mb-0 text-sm">{{ $pago->categoria }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $pago->aprobado_por }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $pago->monto }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $pago->descripcion}}</h6>
            </td>

            <td>
                <div class="btn-group">
                    <a href=" {{route('cartasdepago.edit', $pago->id) }}" class="btn btn-sm btn-primary" style="margin-bottom: 0" data-toggle="tooltip" data-original-title="Editar">
                        <i class="material-icons text-sm">edit</i>
                    </a>
                    <a href="{{route('cartasdepago.recibo', $pago->id) }}" target="_blank" class="btn btn-sm btn-warning" style="margin-bottom: 0" data-toggle="tooltip" data-original-title="Recibo">
                        <i class="material-icons text-sm">description</i>
                    </a>

                </div>
            </td>
            </tr>
        @endforeach
        @endif
    </x-slot>
</x-table>

{{ $pagos->links() }}

</div>

