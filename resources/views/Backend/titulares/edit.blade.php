@extends('Backend.Layouts.app')
@section('main-content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <x-form action="{{route('titulares.update')}}" method="POST">
                    <x-card>
                        <x-slot name="header">
                            <h4 class="text-white text-capitalize ps-3">Editar informacion de Titular</h4>
                        </x-slot>
                        <x-slot name="body">
                            <div class="row col-12 justify-content-center big-slot">
                                <div class="d-flex justify-content-center">
                                    <x-field class="col-3 mx-1">
                                        <x-label for="nombres" class="responsive-font">Nombres *</x-label>
                                        <x-input type="text" name="nombres" value="{{$usuario->nombres}}"/>
                                    </x-field>

                                    <x-field class="col-3 mx-1">
                                        <x-label for="apellidos">Apellidos *</x-label>
                                        <x-input type="text" name="apellidos" value="{{$usuario->apellidos}}"/>
                                    </x-field>

                                </div>
                            </div>
                            <div class="row col-12 justify-content-center big-slot mt-3">
                                <div class="d-flex justify-content-center">

                                    <x-field class="col-2 mx-1">
                                        <x-label for="cedula">Cedula</x-label>
                                        <x-input type="text" name="cedula" maxlength="8" value="{{$usuario->cedula}}" />
                                    </x-field>

                                    <x-field class="col-1 mx-0 text-center">
                                        <x-label for="manzana" class="mx-0">Manzana</x-label>
                                        <x-input type="text" name="manzana" maxlength="2" value="{{$usuario->manzana}}" class="w-75 text-center mx-auto d-block" disabled/>
                                    </x-field>

                                    <x-field class="col-1 mx-0 text-center">
                                        <x-label for="casa" class="mx-0">Casa *</x-label>
                                        <x-input type="text" name="casa" maxlength="2" value="{{$usuario->casa}}" class="w-75 text-center mx-auto d-block" disabled/>
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
                                            <x-input type="text" name="telefono_numero" value="{{substr($usuario->telefono, 3)}}" maxlength="7"/>
                                            </div>
                                    </x-field>
                                </div>
                            </div>
                            <div class="row col-12 justify-content-center big-slot mt-3">
                                <div class="d-flex justify-content-center">
                                    <x-field class="col-3 mx-1">
                                        <x-label for="email">Correo <span class="disapear">Electronico</span></x-label>
                                        <x-input type="email" name="email" value="{{$usuario->email}}"/>
                                    </x-field>
                                    <x-field class="col-3 mx-1 text-center">
                                        @if($usuario->fecha_de_nacimiento)
                                            @php
                                            $fechaNacimiento = explode('-', $usuario->fecha_de_nacimiento);
                                            $ano = $fechaNacimiento[0];
                                            $mes = $fechaNacimiento[1];
                                            $dia = $fechaNacimiento[2];
                                            @endphp
                                        @endif
                                        <x-label for="fech" class="mx-0">Fecha de Nacimiento</x-label>
                                            <div class="d-flex">
                                            <x-input type="number" name="dia" value="{{$dia ?? ' '}}" maxlength="2" class="w-50 mx-1" placeholder="dia"/>
                                            <x-input type="number" name="mes" value="{{$mes ?? ' '}}" maxlength="2" class="w-50 mx-1" placeholder="mes"/>
                                            <x-input type="number" name="ano" value="{{$ano ?? ' '}}" maxlength="4" class="mx-1" placeholder="año"/>
                                            </div>
                                    </x-field>
                                </div>
                            </div>
                            @if ($errors->any())
                            <div class="alert alert-danger text-dark mt-4">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                            @endif
                            <input type="text" name="id" value="{{$id}}" hidden/>
                        </x-slot>
                        <x-slot name="footer">
                            <div class="text-center">
                                <a href="{{route('titulares')}}" name="cancelar" class="btn btn-secondary btn-sm text-bold float-sm-right" type="button">Cancelar</a>
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
