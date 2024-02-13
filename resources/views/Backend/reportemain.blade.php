
@extends('Backend.Layouts.app')
@section('main-content')

<section>
    <x-card>
        <x-slot name="header">
                <h4 class="text-white text-capitalize ps-3"><i class="material-icons opacity-10">file_open</i> Reportes</h4>
        </x-slot>
        <x-slot name="body">
            <form action="{{route('reporte.generar')}}" method="POST" target="_blank">
                @csrf
                <div class="container d-flex justify-content-center">
                    <div class="row">

                        <x-field class="col-3 mx-1 text-center">
                            <x-label for="Manzana" class="mx-0">Manzana</x-label>
                                <div class="d-flex">
                                <x-select name="manzana" class="input-with-border text-center">
                                    <option value="99">Todas</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                </x-select>
                                </div>
                        </x-field>

                        <x-field class="col-2 mx-1 text-center">
                            <x-label for="Mes" class="mx-0">Mes</x-label>
                                <div class="d-flex">
                                <x-select name="Mes" class="input-with-border text-center">
                                    <option value="1">Enero</option>
                                    <option value="2">Febrero</option>
                                    <option value="3">Marzo</option>
                                    <option value="4">Abril</option>
                                    <option value="5">Mayo</option>
                                    <option value="6">Junio</option>
                                    <option value="7">Julio</option>
                                    <option value="8">Agosto</option>
                                    <option value="9">Septiembre</option>
                                    <option value="10">Octubre</option>
                                    <option value="11">Noviembre</option>
                                    <option value="12">Diciembre</option>
                                </x-select>
                                </div>
                        </x-field>

                        <x-field class="col-2 mx-1 text-center">
                            <x-label for="Ano" class="mx-0">Año</x-label>
                                <div class="d-flex">
                                <x-select name="Ano" class="input-with-border text-center">
                                    <option value="2021">2021</option>
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </x-select>
                                </div>
                        </x-field>

                        <x-field class="col-3 mx-1 text-center">
                            <x-label for="vecinos" class="mx-0">Vecinos</x-label>
                                <div class="d-flex">
                                <x-select name="vecinos" class="input-with-border text-center">
                                    <option value="1">Todos</option>
                                    <option value="2">Pagos</option>
                                    <option value="3">Morosos</option>
                                </x-select>
                                </div>
                        </x-field>

                        <div class="text-center my-5">
                            <button type="submit" class="btn btn-lg bg-gradient-info mt-4 mb-0">Generar Reporte</button>
                        </div>
                    </div>
                </div>
            </form>

        </x-slot>
    </x-card>

</section>
@endsection
@push('custom-scripts')
@endpush
