<div>
    <x-form action="{{route('visita.store')}}" method="POST">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-xl-6 mb-xl-0 mb-4">
                        <div class="card bg-transparent shadow-xl">
                            <div class="overflow-hidden position-relative border-radius-xl">
                            <img src="../assets/img/illustrations/pattern-tree.svg" class="position-absolute opacity-2 start-0 top-0 w-100 z-index-1 h-100" alt="pattern-tree">
                            <span class="mask bg-gradient-info opacity-10"></span>
                                <div class="card-body position-relative z-index-1 p-3">
                                    <img class="w-60 mt-2" src="../assets/img/delsur_logo.png" alt="logo">
                                    <div class="me-4 mt-2">
                                        <p class="text-white text-sm opacity-8 mb-0">Numero de cuenta</p>
                                    </div>
                                    <h5 class="text-white mb-4 pb-0">0157&nbsp;&nbsp;0011&nbsp;&nbsp;4037&nbsp;&nbsp;1100&nbsp;&nbsp;4469</h5>

                                    <div class="d-flex">
                                        <div class="d-flex">
                                            <div class="me-4">
                                            <p class="text-white text-sm opacity-8 mb-0">Beneficiario</p>
                                            <h6 class="text-white mb-0">AVEGARZAS</h6>
                                            </div>
                                            <div>
                                            <p class="text-white text-sm opacity-8 mb-0">N° Identificacion</p>
                                            <h6 class="text-white mb-0">J-305167320</h6>
                                            </div>
                                        </div>
                                    <div class="ms-auto w-20 d-flex align-items-end justify-content-end" style="background-color: transparent;">
                                        <img class="w-60 mt-2" src="../assets/img/avegarza_logo.png" alt="logo" style="border-radius: 50%; opacity: 0.9;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6">
                    <div class="row">
                        <div class="col-md-6 col-6">
                        <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                            <div class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-lg">
                                <i class="material-icons opacity-10">person</i>
                            </div>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                            <h6 class="text-center mb-0">{{ explode(' ', $usuario->nombres)[0] . " " . explode(' ', $usuario->apellidos)[0] }}</h6>
                            <hr class="horizontal dark my-1">
                                    <div class="d-flex justify-content-center">

                                        <div class="d-flex flex-column mx-1">
                                            <i class="material-icons opacity-10">account_balance</i>
                                            <h6>Manz</h6>
                                            <h5 class="mb-0">{{$usuario->manzana}}</h5>
                                        </div>

                                        <div class="d-flex flex-column mx-1">
                                            <i class="material-icons opacity-10">home</i>
                                            <h6>Casa</h6>
                                            <h5 class="mb-0">{{$usuario->casa}}</h5>
                                        </div>
                                    </div>
                            </div>
                        </div>
                        </div>
                        <div class="col-md-6 col-6">
                        <div class="card">
                            <div class="card-header mx-4 p-3 text-center">
                            <div class="icon icon-shape icon-lg bg-gradient-info shadow text-center border-radius-lg">
                                <i class="material-icons opacity-10">account_balance_wallet</i>
                            </div>
                            </div>
                            <div class="card-body pt-0 p-3 text-center">
                            <h6 class="text-center mb-0">TOTAL PENDIENTE</h6>
                            <span class="text-xs">Monto a pagar</span>

                            <div class="d-flex justify-content-center mt-1">

                                <div class="d-flex flex-column mx-1">
                                    <h6>$ {{$totalPendienteDolar}} </h6>
                                    <h5 class="mb-0">Bs {{$totalPedienteBolivar}}</h5>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>

                    <div class="col-md-12 mb-lg-0 mb-4">

                    <div class="card mt-4">

                        <div class="card-header pb-0 p-3">
                        <div class="row">
                            <div class="col-6 d-flex align-items-center">
                            <h6 class="mb-0">Registro de Pago</h6>
                            </div>
                            <div class="col-6 text-end">
                            <button type="submit" class="btn bg-gradient-primary mb-0">Enviar</button>
                            </div>
                        </div>
                        </div>
                        <div class="card-body p-3">
                        <div class="row">
                            <div class="col-md-3 mb-md-0 mb-4">
                                    <x-field class="col-12 mx-1">
                                        <x-label for="Telefono" class="mx-0">Banco</x-label>
                                        <x-select name="telefono_prefijo" class="input-with-border">
                                            <option value="100%_Banco">100% Banco</option>
                                            <option value="Bancamiga">Bancamiga</option>
                                            <option value="BanCaribe">BanCaribe</option>
                                            <option value="Banco_Activo">Banco Activo</option>
                                            <option value="Banco_Bicentenario">Banco Bicentenario</option>
                                            <option value="Banco_Caroni">Banco Caroni</option>
                                            <option value="Banco_de_venezuela">Banco de Venezuela</option>
                                            <option value="Banco_del_Tesoro">Banco del Tesoro</option>
                                            <option value="Banco_Exterior">Banco Exterior</option>
                                            <option value="Banco_Mercantil">Banco Mercantil</option>
                                            <option value="Banco_Nacional_de_credito_BNC">Banco Nacional de credito BNC</option>
                                        </x-select>
                                    </x-field>
                            </div>
                            <div class="col-md-3 mb-md-0 mb-4">
                                <x-field class="col-12 mx-1">
                                        <x-label for="referencia">Referencia (4 digitos)</x-label>
                                        <x-input type="text" name="referencia"/>
                                </x-field>
                            </div>
                            <div class="col-md-3 mb-md-0 mb-4">
                                <x-field class="col-12 mx-1 text-center">
                                    <x-label for="fech" class="mx-0">Fecha de Pago</x-label>
                                        <div class="d-flex">
                                        <x-input type="number" name="dia" class="w-50 mx-1" placeholder="dia"/>
                                        <x-input type="number" name="mes" class="w-50 mx-1" placeholder="mes"/>
                                        <x-input type="number" name="ano" class="mx-1" placeholder="año"/>
                                        </div>
                                </x-field>
                            </div>
                            <div class="col-md-3 mb-md-0 mb-4">
                                <x-field class="col-12 mx-1 text-center">
                                    <x-label for="fech" class="mx-0">Captura de pantalla</x-label>
                                    <x-input type="file" name="soporte" class="mx-1" placeholder="Nuevo texto del placeholder"/>
                                </x-field>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-lg-4">
                <div class="card h-100">
                    <div class="card-header pb-0 p-3">
                    <div class="row">
                        <div class="col-6 d-flex align-items-center">
                        <h6 class="mb-0">Mensualidades</h6>
                        </div>
                        <div class="col-6 text-end">
                            <span class="me-2">
                                <span class="badge bg-danger">Vencidas</span>
                            </span>
                            <span>
                                <span class="badge bg-warning">Vigentes</span>
                            </span>
                        </div>
                    </div>
                    </div>
                    <div class="card-body p-3 pb-0">
                    <ul class="list-group navbar-nav">
                        @foreach ($mesespendientes as $key => $mes)
                        <li class="nav-item list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark font-weight-bold text-sm rounded {{ $loop->last ? 'bg-gradient-warning' : 'bg-gradient-danger' }}">{{$mes}}</h6>
                            <span class="text-xs">$ {{$costomensual}} </span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                            {{$dolar}}
                            @if ($key < $this->check)
                            <input type="checkbox" value="{{$key}}" class="form-check-input ms-4 input-with-border" wire:change="update({{$key}})" checked>
                            @else
                            <input type="checkbox" value="{{$key}}" class="form-check-input ms-4 input-with-border" wire:change="update({{$key+1}})">
                            @endif
                            </div>
                        </li>
                        @endforeach
                    </ul>
                    </div>
                </div>
            </div>
        </div>
    </x-form>
</div>


