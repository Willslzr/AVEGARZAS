
@extends('Backend.Layouts.app')
@section('main-content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <x-form action="#" method="GET">
                    <x-card>

                        <x-slot name="header">
                            <h4 class="text-white text-capitalize ps-3">Titulares</h4>
                        </x-slot>

                        <x-slot name="body">
                            <div class="row col-12 justify-content-center">
                                <div class="col-8">
                                    <div class="d-flex justify-content-center">

                                        <x-field class="col-2">
                                            <x-label for="idmovimientocelda">Codigo</x-label>
                                            <x-input type="text" name="idmovimientocelda" value="1" readonly/>
                                        </x-field>

                                        <x-field class="col-3">
                                            <x-label for="ano">Año</x-label>
                                            <x-select name="ano" value="Selecciona">
                                                {{-- @foreach ($cambioAnodos as $anno) --}}
                                                <option value="1">1</option>
                                                {{-- @endforeach --}}
                                                <option value="2">2</option>
                                            </x-select>
                                        </x-field>



                                        <x-field class="col-2">
                                            <x-label for="version">Version</x-label>
                                            <x-input type="text" name="version" value="1" readonly/>
                                        </x-field>

                                    </div>
                                </div>
                            </div>

                            <div class="row col-12 justify-content-center">
                                <table class="table table-striped table-hover text-nowrap table-responsive table-borderless">
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th>Linea 1</th>
                                            <th>Linea 2</th>
                                            <th>Linea 3</th>
                                            <th>Linea 4</th>
                                            <th>Linea 5</th>
                                            <th>Linea 6</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><x-label for="inc">Celdas a incorporar</x-label></td>
                                            <td><x-input type="number" name="linea1" value="0"/></td>
                                            <td><x-input type="number" name="linea2" value="0"/></td>
                                            <td><x-input type="number" name="linea3" value="0"/></td>
                                            <td><x-input type="number" name="linea4" value="0"/></td>
                                            <td><x-input type="number" name="linea5" value="0"/></td>
                                            <td><x-input type="number" name="linea6" value="0"/></td>
                                        </tr>
                                        <tr>
                                            <td><x-label for="des">Celdas a desincorporar</x-label></td>
                                            <td><x-input type="number" name="desincorporar_linea1" value="0"/></td>
                                            <td><x-input type="number" name="desincorporar_linea2" value="0"/></td>
                                            <td><x-input type="number" name="desincorporar_linea3" value="0"/></td>
                                            <td><x-input type="number" name="desincorporar_linea4" value="0"/></td>
                                            <td><x-input type="number" name="desincorporar_linea5" value="0"/></td>
                                            <td><x-input type="number" name="desincorporar_linea6" value="0"/></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </x-slot>

                        <x-slot name="footer">
                            <x-input type="submit" name="boton" class="btn btn-lg bg-gradient-info mt-4 mb-0" value="Guardar" />
                        </x-slot>
                    </x-card>
                </x-form>
            </div>
        </div>
    </div>
</section>

@endsection
@push('custom-scripts')
@endpush
