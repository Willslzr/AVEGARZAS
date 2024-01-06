
@extends('Backend.Layouts.app')
@section('main-content')

<section>
    <x-card>
        <x-slot name="header">
                <h4 class="text-white text-capitalize ps-3">Configuracion</h4>
        </x-slot>
        <x-slot name="body">
            <form>
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 my-2">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Cambiar costo del dolar</label>
                            <input class="form-control col-md-4 px-2 border border-info" value="" type="text" name="PrecioDolar" maxlength="7">
                        </div>
                        <div class="col-md-4 my-2">
                            <label class="form-label">Cambiar costo de la mensualidad</label>
                            <input class="form-control col-md-4 px-2 border border-info" value="" type="text" name="PrecioMensualidad" maxlength="7">
                        </div>
                        <div class="col-md-2 my-2">
                        </div>
                        <div class="col-md-2 my-2">
                        </div>
                        <div class="col-sm-4 my-2">
                            <label for="preciodolar" class="form-label font-weight-bold fs-6">Precio Actual</label>
                            <input type="text" class="form-control form-control-lg" placeholder="36.57" style="font-size: 2rem;" readonly>
                        </div>
                        <div class="col-sm-4 my-2">
                            <label for="preciodolar" class="font-weight-bold fs-6">Precio Mensualidad Actual</label>
                            <input type="text" class="form-control form-control-lg" placeholder="1.5" style="font-size: 2rem;" readonly>
                        </div>
                        <div class="col-md-2 my-2">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-lg bg-gradient-info mt-4 mb-0">Guardar</button>
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
