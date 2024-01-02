
@extends('Backend.Layouts.app')
@section('main-content')

<section>
    <x-card>
        <x-slot name="header">
                <h4 class="text-white text-capitalize ps-3">Titulares de hogar</h4>
        </x-slot>
        <x-slot name="body">
            <x-table>
                <x-slot name="thead">
                    <tr>
                    <th>Nombre</th>
                    <th>Manzana</th>
                    <th>Casa</th>
                    <th>Meses Vencidos</th>
                    <th>Telefono</th>
                    <th>Acciones</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    <tr>
                    <td>
                        <h6 class="mb-0 text-sm">John Michael</h6>
                    </td>
                    <td>
                        <h6 class="mb-0 text-sm">8</h6>
                    </td>
                    <td>
                        <h6 class="mb-0 text-sm">21</h6>
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
                        <h6 class="mb-0 text-sm">0412-1858742</h6>
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
                </x-slot>
            </x-table>
        </x-slot>
    </x-card>

</section>
@endsection
@push('custom-scripts')
@endpush
