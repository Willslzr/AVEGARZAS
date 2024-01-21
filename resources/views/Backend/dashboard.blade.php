@extends('Backend.Layouts.app')
@section('main-content')

    <!-- Cartelera Hecho por William salazar -->

    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-dark shadow-dark text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">payments</i>
                    </div>
                    <div class="text-end pt-1">
                    <p class="text-sm mb-0">Dinero en Caja</p>
                    <h4 class="mb-0">${{$caja}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+55% </span>desde ultima semana</p>
                </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-primary shadow-primary text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">person</i>
                    </div>
                    <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Usuarios activos</p>
                    <h4 class="mb-0">{{$nUsuarios}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+100% </span>desde el ultimo mes</p>
                </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-success shadow-success text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">savings</i>
                    </div>
                    <div class="text-end pt-1">
                    <p class="text-sm mb-0">Cobros por validar</p>
                    <h4 class="mb-0">{{$pCobros}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+33%</span> desde ayer</p>
                </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card">
                <div class="card-header p-3 pt-2">
                    <div class="icon icon-lg icon-shape bg-gradient-info shadow-info text-center border-radius-xl mt-n4 position-absolute">
                    <i class="material-icons opacity-10">paid</i>
                    </div>
                    <div class="text-end pt-1">
                    <p class="text-sm mb-0 text-capitalize">Precio Dolar</p>
                    <h4 class="mb-0">Bs. {{$pDolar}}</h4>
                    </div>
                </div>
                <hr class="dark horizontal my-0">
                <div class="card-footer p-3">
                    <p class="mb-0"><span class="text-success text-sm font-weight-bolder">+1.37% </span>desde ayer</p>
                </div>
                </div>
            </div>
            </div>

            <div class="row mt-4">
            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                    <div class="chart">
                        <canvas id="chart-bars" class="chart-canvas" height="170"></canvas>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">Mensualidades cobradas</h6>
                    <p class="text-sm ">N° de cobros aprobados la ultima semana</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm"> Actualizado hace 3 dias </p>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-4 mb-4">
                <div class="card z-index-2  ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-success shadow-success border-radius-lg py-3 pe-1">
                    <div class="chart">
                        <canvas id="chart-line" class="chart-canvas" height="170"></canvas>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 "> Dinero en caja </h6>
                    <p class="text-sm "> (<span class="font-weight-bolder">+15%</span>) de aumento este mes </p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm">Actualizado hace 4 minutos </p>
                    </div>
                </div>
                </div>
            </div>

            <div class="col-lg-4 mt-4 mb-3">
                <div class="card z-index-2 ">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg py-3 pe-1">
                    <div class="chart">
                        <canvas id="chart-line-tasks" class="chart-canvas" height="170"></canvas>
                    </div>
                    </div>
                </div>
                <div class="card-body">
                    <h6 class="mb-0 ">Precio de dolar</h6>
                    <p class="text-sm ">(<span class="font-weight-bolder">+1.37%</span>) Aumento</p>
                    <hr class="dark horizontal">
                    <div class="d-flex ">
                    <i class="material-icons text-sm my-auto me-1">schedule</i>
                    <p class="mb-0 text-sm"> Actualizado hace 1 dia </p>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <div class="row mb-4">
            <div class="col-lg-8 col-md-6 mb-md-0 mb-4">
                <div class="card">
                <div class="card-header pb-0">
                    <div class="row">
                    <div class="col-lg-6 col-7">
                        <h6>Encuestas</h6>
                        <p class="text-sm mb-0">
                        <i class="fa fa-check text-info" aria-hidden="true"></i>
                        <span class="font-weight-bold ms-1">3 encuestas</span> realizadas este mes
                        </p>
                    </div>
                    <div class="col-lg-6 col-5 my-auto text-end">
                        <div class="dropdown float-lg-end pe-4">
                        <a class="cursor-pointer" id="dropdownTable" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-ellipsis-v text-secondary"></i>
                        </a>
                        <ul class="dropdown-menu px-2 py-3 ms-sm-n4 ms-n5" aria-labelledby="dropdownTable">
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Another action</a></li>
                            <li><a class="dropdown-item border-radius-md" href="javascript:;">Something else here</a></li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="card-body px-0 pb-2">
                    <div class="table-responsive">
                    <table class="table align-items-center mb-0">
                        <thead>
                        <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Titulo</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Participantes</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Estatus</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">% de Participacion</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Propuestas de asfaltado</h6>
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="avatar-group mt-2">
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                <img src="../assets/img/perfil/perfil1.png" alt="team1">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                <img src="../assets/img/perfil/perfil2.jpeg" alt="team2">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Alexander Smith">
                                <img src="../assets/img/perfil/perfil3.jpeg" alt="team3">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Jessica Doe">
                                <img src="../assets/img/perfil/perfil4.jpeg" alt="team4">
                                </a>
                            </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Activo </span>
                            </td>
                            <td class="align-middle">
                            <div class="progress-wrapper w-75 mx-auto">
                                <div class="progress-info">
                                <div class="progress-percentage">
                                    <span class="text-xs font-weight-bold">37%</span>
                                </div>
                                </div>
                                <div class="progress">
                                <div class="progress-bar bg-gradient-info w-35" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Calidad de la vigilancia</h6>
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="avatar-group mt-2">
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                <img src="../assets/img/perfil/perfil1.png" alt="team1">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                <img src="../assets/img/perfil/perfil6.jpeg" alt="team2">
                                </a>
                            </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Culminado </span>
                            </td>
                            <td class="align-middle">
                            <div class="progress-wrapper w-75 mx-auto">
                                <div class="progress-info">
                                <div class="progress-percentage">
                                    <span class="text-xs font-weight-bold">60%</span>
                                </div>
                                </div>
                                <div class="progress">
                                <div class="progress-bar bg-gradient-info w-60" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            <div class="d-flex px-2 py-1">
                                <div>
                                <img src="../assets/img/small-logos/logo-xd.svg" class="avatar avatar-sm me-3" alt="xd">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                <h6 class="mb-0 text-sm">Limpieza de areas comunes</h6>
                                </div>
                            </div>
                            </td>
                            <td>
                            <div class="avatar-group mt-2">
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                    <img src="../assets/img/perfil/perfil5.jpeg" alt="team2">
                                    </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Ryan Tompson">
                                <img src="../assets/img/perfil/perfil1.png" alt="team1">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                <img src="../assets/img/perfil/perfil4.jpeg" alt="team2">
                                </a>
                                <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Romina Hadid">
                                    <img src="../assets/img/perfil/perfil3.jpeg" alt="team2">
                                    </a>
                            </div>
                            </td>
                            <td class="align-middle text-center text-sm">
                            <span class="text-xs font-weight-bold"> Culminado </span>
                            </td>
                            <td class="align-middle">
                            <div class="progress-wrapper w-75 mx-auto">
                                <div class="progress-info">
                                <div class="progress-percentage">
                                    <span class="text-xs font-weight-bold">40%</span>
                                </div>
                                </div>
                                <div class="progress">
                                <div class="progress-bar bg-gradient-info w-40" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card h-100">
                <div class="card-header pb-0">
                    <h6>Historial de acciones</h6>
                    <p class="text-sm">
                    <i class="fa fa-arrow-up text-success" aria-hidden="true"></i>
                    <span class="font-weight-bold">24%</span> de actividad este mes
                    </p>
                </div>
                <div class="card-body p-3">
                    <div class="timeline timeline-one-side">
                    <div class="timeline-block mb-3">
                        <span class="timeline-step">
                        <i class="material-icons text-success text-gradient">notifications</i>
                        </span>
                        <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">Generar Encuesta</h6>
                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 Enero 7:20 PM</p>
                        </div>
                    </div>
                    <div class="timeline-block mb-3">
                        <span class="timeline-step">
                        <i class="material-icons text-danger text-gradient">code</i>
                        </span>
                        <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">New order #1832412</h6>
                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 11 PM</p>
                        </div>
                    </div>
                    <div class="timeline-block mb-3">
                        <span class="timeline-step">
                        <i class="material-icons text-info text-gradient">shopping_cart</i>
                        </span>
                        <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">Server payments for April</h6>
                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">21 DEC 9:34 PM</p>
                        </div>
                    </div>
                    <div class="timeline-block mb-3">
                        <span class="timeline-step">
                        <i class="material-icons text-warning text-gradient">credit_card</i>
                        </span>
                        <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">New card added for order #4395133</h6>
                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">20 DEC 2:20 AM</p>
                        </div>
                    </div>
                    <div class="timeline-block mb-3">
                        <span class="timeline-step">
                        <i class="material-icons text-primary text-gradient">key</i>
                        </span>
                        <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">Unlock packages for development</h6>
                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">18 DEC 4:54 AM</p>
                        </div>
                    </div>
                    <div class="timeline-block">
                        <span class="timeline-step">
                        <i class="material-icons text-dark text-gradient">payments</i>
                        </span>
                        <div class="timeline-content">
                        <h6 class="text-dark text-sm font-weight-bold mb-0">New order #9583120</h6>
                        <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">17 DEC</p>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>

            <footer class="footer py-4  ">
            <div class="container-fluid">
                <div class="row align-items-center justify-content-lg-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <div class="copyright text-center text-sm text-muted text-lg-start">
                    © <script>
                        document.write(new Date().getFullYear())
                    </script>,
                    Hecho con <i class="fa fa-heart"></i> por
                    <a href="#" class="font-weight-bold" target="_blank">William Salazar</a>
                    para AVEGARZAS.
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted" target="_blank">Curriculum</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-muted" target="_blank">Prueba</a>
                    </li>
                    </ul>
                </div>
                </div>
            </div>
            </footer>
        </div>
@endsection
@push('custom-scripts')
@endpush

<!--   Core JS Files   -->
