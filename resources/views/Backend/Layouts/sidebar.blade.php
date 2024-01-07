<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#" target="_blank">
            <img src="#" class="navbar-brand-img h-100" alt="ProfilePic">
            <span class="ms-1 font-weight-bold text-white">Nombre Apellido usuario</span>
        </a>
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
            <a class="nav-link text-white " href="#">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">view_in_ar</i>
                </div>
                <span class="nav-link-text ms-1">Modulo 3</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white " href="#">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">format_textdirection_r_to_l</i>
                </div>
                <span class="nav-link-text ms-1">modulo 4</span>
            </a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('configuracion') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">settings</i>
                </div>
                <span class="nav-link-text ms-1">Configuracion</span>
            </a>
            </li>

            <li class="nav-item mt-3">
            <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Datos personales</h6>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white " href="#">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">person</i>
                </div>
                <span class="nav-link-text ms-1">Perfil</span>
            </a>
            </li>
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
            <li class="nav-item">
            <a class="nav-link text-white " href="{{ route('test') }}">
                <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">assignment</i>
                </div>
                <span class="nav-link-text ms-1">modulo 3 de prueba</span>
            </a>
            </li>
        </ul>
    </div>
    <div class="sidenav-footer position-absolute w-100 bottom-0 ">
        <div class="mx-3">
            <a class="btn btn-outline-info mt-4 w-100" href="#" type="button">Configuracion</a>
            <a class="btn bg-gradient-info w-100" href="#" type="button">Contactanos</a>
        </div>
    </div>
</aside>
