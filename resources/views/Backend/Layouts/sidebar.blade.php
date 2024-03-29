<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header d-flex flex-column align-items-center">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <div class="ms-4 mt-3 d-flex align-items-center">
            <img class="w-25 me-3" src="../assets/img/avegarza_logo.png" alt="logo" style="border-radius: 50%; opacity: 0.9;">
            <h6 class="m-0 font-weight-bold text-white">AVEGARZAS</h6>
        </div>
    </div>
    <hr class="horizontal light mt-0 mb-2">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link text-white active bg-gradient-info" href="{{ route('dashboard') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">bar_chart</i>
                </div>
                <span class="nav-link-text ms-1">Pagina Principal</span>
            </a>
            </li>
            @if (Auth::user()->admin)

            <li class="nav-item">
            <a class="nav-link text-white " href="{{route('mensualidades')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">table_view</i>
                </div>
                <span class="nav-link-text ms-1">Mensualidades</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white " href="{{route('titulares')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">settings_accessibility</i>
                </div>
                <span class="nav-link-text ms-1">Titulares de Hogar</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white " href="{{route('cobros')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">paid</i>
                </div>
                <span class="nav-link-text ms-1">Validar Cobros</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white " href="{{route('cartasdepago')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">request_quote</i>
                </div>
                <span class="nav-link-text ms-1">Cartas de pago</span>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{route('reporte.main')}}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">file_open</i>
                </div>
                <span class="nav-link-text ms-1">Reportes</span>
            </a>
            </li>

            <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Configuraciones</h6>
            </li>

            <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('configurar') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">done_all</i>
                </div>
                <span class="nav-link-text ms-1">Categorias</span>
            </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white " href="{{ route('configuracion') }}">
                    <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                    <i class="material-icons opacity-10">attach_money</i>
                    </div>
                <span class="nav-link-text ms-1">Configurar costos</span>
            </a>
            </li>
            @endif
            <li class="nav-item">
            <form action="{{route('logout')}}" method="POST">
            @csrf
            <a class="nav-link text-white" onclick="this.closest('form').submit()" href="#">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">login</i>
                </div>
                <span class="nav-link-text ms-1">Cerrar Sesion</span>
            </a>
            </form>
            </li>

        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn bg-gradient-info w-100" href="#" type="button">Contactanos</a>
        </div>
    </div>
</aside>
