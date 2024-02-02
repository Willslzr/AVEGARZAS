<div>
    @inject('carbon', 'Carbon\Carbon')
    @php
        $fechaActual = $carbon->now();
        $diaActual = $fechaActual->day;
    @endphp
    <x-form action="{{route('visita.store')}}" enctype="multipart/form-data" method="POST">
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
                                        <x-select name="Banco" class="input-with-border">
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
                                        <x-input type="text" maxlength="4" name="referencia"/>
                                </x-field>
                            </div>
                            <div class="col-md-3 mb-md-0 mb-4">
                                <x-field class="col-12 mx-1 text-center">
                                    <x-label for="fech" class="mx-0">Fecha de Pago</x-label>
                                        <div class="d-flex">
                                        <x-select name="dia" class="mx-1">
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
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        </x-select>
                                        <x-select name="mes" class="mx-1">
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
                                        <x-select name="ano" class="mx-1">
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                        </x-select>
                                        </div>
                                </x-field>
                            </div>
                            <div class="col-md-3 mb-md-0 mb-4">
                                <x-field class="col-12 mx-1 text-center">
                                    <x-label for="soporte" class="mx-0">Captura de pantalla</x-label>
                                    <input type="file" class="form-control form-control-user" name="soporte" id="soporte">
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
                        </div>
                    </div>
                    </div>
                    <div class="card-body p-3 pb-0">
                    <ul class="list-group navbar-nav">
                        @foreach ($mesespendientes as $key => $mes)
                        <li class="nav-item list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                            <div class="d-flex flex-column">
                            <h6 class="mb-1 text-dark font-weight-bold text-sm rounded {{ $loop->last ? 'bg-gradient-warning' : 'bg-gradient-danger' }}">{{$mes['mes']}}</h6>
                            <span class="text-xs">$ {{$costomensual}} </span>
                            </div>
                            <div class="d-flex align-items-center text-sm">
                            {{$dolar * $costomensual}}
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
        <input type="text" name="monto" value="{{$totalPedienteBolivar}}" style="display:none;">
        <input type="text" name="meses_pagados" value="{{$check}}" style="display:none;">
        <input type="text" name="usuario_id" value="{{$usuario->id}}" style="display:none;">
        <input type="text" name="mes_inicio" value="{{$mesespendientes[0]['fecha']}}" style="display:none;">
    </x-form>
</div>


