@extends('Backend.Layouts.app')
@section('main-content')

<section>
    <x-card>
        <x-slot name="header">
                <h4 class="text-white text-capitalize ps-3"><i class="material-icons opacity-10">settings</i> Configurar categorias</h4>
        </x-slot>
        <x-slot name="body">
            <form action="{{route('config.guardar')}}" method="POST" >
                @csrf
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 my-2">
                        </div>
                        <div class="col-md-3 my-2">
                            <label class="form-label">Nombre</label>
                            <input class="form-control col-md-4 px-2 border border-info" value="" type="text" name="nombre">
                        </div>
                        <div class="col-md-5 my-2">
                            <label class="form-label">Descripcion</label>
                            <input class="form-control col-md-4 px-2 border border-info" value="" type="text" name="descripcion">
                        </div>
                        <div class="col-md-2 my-2">
                        </div>
                        <div class="col-md-2 my-2">
                        </div>

                        @if ($errors->any())
                        <div class="d-flex justify-content-center align-items-center h-100">
                            <div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="material-icons opacity-10">close</i></button>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        @endif

                        <div class="text-center my-5">
                            <button type="submit" class="btn btn-lg bg-gradient-info mt-4 mb-0">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
            <x-table>
                <x-slot name="thead">
                    <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                    </tr>
                </x-slot>
                <x-slot name="tbody">
                    @if ($categorias->isEmpty())
                        <tr>
                            <td colspan="8" class="text-center py-4">No hay registros</td>
                        </tr>
                    @else
                    @foreach ($categorias as $item)
                        <tr>
                        <td>
                            <h6 class="mb-0 text-sm">{{ $item->nombre }}</h6>
                        </td>
                        <td>
                            <h6 class="mb-0 text-sm">{{ $item->descripcion }}</h6>
                        </td>

                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-sm btn-primary" title="Editar" style="margin-bottom: 0">
                                    <i class="material-icons text-sm">edit</i>
                                </a>
                                <a href="{{route('configurar.eliminar', $item->id)}}" class="btn btn-sm btn-danger" title="Eliminar" style="margin-bottom: 0">
                                    <i class="material-icons text-sm">delete</i>
                                </a>
                            </div>
                        </td>
                        </tr>

                    @endforeach
                    @endif
                </x-slot>
            </x-table>
        </x-slot>
    </x-card>

</section>
@endsection
@push('custom-scripts')
@endpush
