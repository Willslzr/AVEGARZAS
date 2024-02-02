@extends('Backend.Layouts.app')
@section('main-content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <x-form action="{{route('cartasdepago.store')}}" method="POST">
                    <x-card>
                        <x-slot name="header">
                            <h4 class="text-white text-capitalize ps-3">Nuevo Pago</h4>
                        </x-slot>
                        <x-slot name="body">
                            <div class="row col-12 justify-content-center big-slot">
                                <div class="d-flex justify-content-center">
                                    <x-field class="col-3 mx-1">
                                        <x-label for="categoria">Categoria</x-label>
                                        <x-select class="input-with-border" name="categoria" id="categoria">
                                            @foreach ($categorias as $item)
                                                <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                                            @endforeach
                                        </x-select>
                                    </x-field>
                                    <x-field class="col-3 mx-1">
                                        <x-label for="aprobado_por" class="responsive-font">Responsable:</x-label>
                                        <x-input type="hidden" name="aprobado_por" value="{{ auth()->user()->name }}" />
                                            <x-input type="text" name="aprobado_por_display" value="{{ auth()->user()->name }}" disabled />
                                    </x-field>

                                    <x-field class="col-2 mx-1">
                                        <x-label for="monto">Monto</x-label>
                                        <x-input type="number" name="monto" maxlength="10" step="0.01" pattern="[0-9]+(\.[0-9]{1,2})?"/>
                                    </x-field>
                                </div>
                            </div>
                            <div class="row col-12 justify-content-center big-slot my-3">
                                <div class="d-flex justify-content-center">
                                    <x-field class="col-9 mx-1">
                                        <x-label for="cedula">Observacion</x-label>
                                        <textarea class="form-control input-with-border" name="descripcion" rows="4"></textarea>
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
