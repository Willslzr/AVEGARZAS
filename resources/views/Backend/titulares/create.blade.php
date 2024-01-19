@extends('Backend.Layouts.app')
@section('main-content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <x-form action="{{route('titulares.store')}}" method="POST">
                    <x-card>
                        <x-slot name="header">
                            <h4 class="text-white text-capitalize ps-3">Nuevo Registro</h4>
                        </x-slot>
                        <x-slot name="body">
                            <div class="row col-12 justify-content-center big-slot">
                                <div class="d-flex justify-content-center">
                                    <x-field class="col-3 mx-1">
                                        <x-label for="nombres" class="responsive-font">Nombres *</x-label>
                                        <x-input type="text" name="nombres"/>
                                    </x-field>

                                    <x-field class="col-3 mx-1">
                                        <x-label for="apellidos">Apellidos *</x-label>
                                        <x-input type="text" name="apellidos"/>
                                    </x-field>

                                </div>
                            </div>
                            <div class="row col-12 justify-content-center big-slot mt-3">
                                <div class="d-flex justify-content-center">

                                    <x-field class="col-2 mx-1">
                                        <x-label for="cedula">Cedula</x-label>
                                        <x-input type="text" name="cedula"/>
                                    </x-field>

                                    <x-field class="col-1 mx-0 text-center">
                                        <x-label for="manzana" class="mx-0">Manzana *</x-label>
                                        <x-input type="number" name="manzana" maxlength="2" class="w-75 text-center mx-auto d-block" />
                                    </x-field>

                                    <x-field class="col-1 mx-0 text-center">
                                        <x-label for="casa" class="mx-0">Casa *</x-label>
                                        <x-input type="number" name="casa" maxlength="2" class="w-75 text-center mx-auto d-block" />
                                    </x-field>

                                    <x-field class="col-2 mx-1 text-center">
                                        <x-label for="Telefono" class="mx-0">Telefono</x-label>
                                            <div class="d-flex">
                                            <x-select name="telefono_prefijo" class="w-50 input-with-border text-center">
                                                <option value="0412">0412</option>
                                                <option value="0414">0414</option>
                                                <option value="0424">0424</option>
                                                <option value="0416">0416</option>
                                                <option value="0426">0426</option>
                                            </x-select>
                                            <x-input type="text" name="telefono_numero" maxlength="7"/>
                                            </div>
                                    </x-field>
                                </div>
                            </div>
                            <div class="row col-12 justify-content-center big-slot mt-3">
                                <div class="d-flex justify-content-center">
                                    <x-field class="col-3 mx-1">
                                        <x-label for="email">Correo <span class="disapear">Electronico</span></x-label>
                                        <x-input type="email" name="email"/>
                                    </x-field>
                                    <x-field class="col-3 mx-1 text-center">
                                        <x-label for="fech" class="mx-0">Fecha de Nacimiento</x-label>
                                            <div class="d-flex">
                                            <x-input type="number" name="dia" class="w-50 mx-1" placeholder="dia"/>
                                            <x-input type="number" name="mes" class="w-50 mx-1" placeholder="mes"/>
                                            <x-input type="number" name="ano" class="mx-1" placeholder="año"/>
                                            </div>
                                    </x-field>
                                </div>
                            </div>
                        </x-slot>

                        <x-slot name="footer">
                            <div class="text-center">
                                <x-input name="guardar" type="submit" value="Guardar" />
                            </div>
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
