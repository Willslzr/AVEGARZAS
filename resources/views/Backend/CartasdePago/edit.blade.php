@extends('Backend.Layouts.app')
@section('main-content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <x-form action="{{route('cartasdepago.guardar')}}" method="POST">
                    <x-card>
                        <x-slot name="header">
                            <h4 class="text-white text-capitalize ps-3">Editar observacion</h4>
                        </x-slot>
                        <x-slot name="body">
                            <div class="row col-12 justify-content-center big-slot">
                                <div class="d-flex justify-content-center">
                                    <x-field class="col-3 mx-1">
                                        <x-label for="categoria">Categoria</x-label>
                                        <x-input name="categoria" type="text" value="{{ $pago->categoria }}" readonly/>
                                    </x-field>
                                    <x-field class="col-3 mx-1">
                                        <x-label for="aprobado_por" class="responsive-font">Responsable:</x-label>
                                        <x-input name="aprobado_por" type="text" value="{{ $pago->aprobado_por }}" readonly/>
                                    </x-field>
                                    <x-field class="col-2 mx-1">
                                        <x-label for="monto">Monto</x-label>
                                        <input type="text" name="id" value="{{$id}}" hidden>
                                        <x-input type="number" name="monto" value="{{$pago->monto}}" maxlength="10" step="0.01" pattern="[0-9]+(\.[0-9]{1,2})?" readonly/>
                                    </x-field>
                                </div>
                            </div>
                            <div class="row col-12 justify-content-center big-slot my-3">
                                <div class="d-flex justify-content-center">
                                    <x-field class="col-9 mx-1">
                                        <x-label for="cedula">Observacion</x-label>
                                        <textarea class="form-control input-with-border" value="" name="descripcion" rows="4">{{$pago->descripcion}}</textarea>
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

