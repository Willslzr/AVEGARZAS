<div>
    <div class="d-flex flex-row py-2">
        <div class="">
            <input wire:model="search" wire:change="updateSearch" type="search" placeholder="Buscar" wire:keydown.enter="updateSearch"
            @blur="updateSearch">
        </div>
        <div class="">
            <select wire:model="perPage" wire:change="updatePage" class="align-self-stretch h-100">
                <option value="5">5</option>
                <option value="10">10</option>
                <option value="50">50</option>
            </select>
        </div>
    </div>
<x-table>
    <x-slot name="thead">
        <tr>
        <th wire:click="sortBy('nombre')">Nombre</th>
        <th wire:click="sortBy('manzana')">Manzana</th>
        <th>Casa</th>
        <th>Meses Vencidos</th>
        <th>Telefono</th>
        <th>Acciones</th>
        </tr>
    </x-slot>
    <x-slot name="tbody">
        @foreach ($usuarios as $usuario)
            <tr>
            <td>
                <h6 class="mb-0 text-sm">{{ $usuario->nombre }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $usuario->manzana }}</h6>
            </td>
            <td>
                <h6 class="mb-0 text-sm">{{ $usuario->casa }}</h6>
            </td>
            <td class="text-sm">
                <span class="badge badge-sm bg-gradient-success">Solvente</span>
            </td>
            {{-- @if($mensualidades)
            <td class="text-sm">
                <span class="badge badge-sm bg-gradient-success">Solvente</span>
            </td>
            @else
            <td class="align-middle text-center text-sm">
                <span class="badge badge-sm bg-gradient-secondary">6 Meses</span>
            </td>
            @endif --}}
            <td>
                <h6 class="mb-0 text-sm">{{ $usuario->telefono }}</h6>
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
    </x-slot>
</x-table>

{{ $usuarios->links() }}

</div>
