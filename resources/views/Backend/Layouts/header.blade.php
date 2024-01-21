<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
        <div class="container-fluid py-1 px-3">

            <nav aria-label="breadcrumb">
            <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="/dashboard">Inicio</a></li>
                <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Pagina Principal</li>
            </ol>
            </nav>
            <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            </div>
            {{-- Lista de Navegador --}}
            <ul class="navbar-nav  justify-content-end">
                {{-- Boton para imprimir reportes --}}
                <li class="nav-item d-flex align-items-center">
                <a class="btn btn-outline-danger btn-sm mb-0 me-3" target="_blank" href="#">Reporte General</a>
                </li>

                {{-- Barra para ocultar el menu en dispositivos grandes --}}
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        <i class="sidenav-toggler-line"></i>
                        </div>
                    </a>
                </li>
                {{-- Boton de configuracion --}}
                <li class="nav-item px-3 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0">
                    <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
                </a>
                </li>

                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell cursor-pointer"></i>
                </a>

                <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">

                    {{-- aqui agregare un for each por cada notificacion nueva para que se muestren --}}

                    <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                            {{-- Imagen de perfil de la persona de la notificacion --}}
                        <div class="my-auto">
                            <img src="#imagen" class="avatar avatar-sm  me-3 ">
                        </div>
                        {{-- Accion de la notificacion y nombre de la persona --}}
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                            <span class="font-weight-bold">Nuevo Proyecto</span> de Maria
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                                {{-- hace cuanto se creo esta notificacion --}}
                            <i class="fa fa-clock me-1"></i>
                            Hace 15 minutos
                            </p>
                        </div>
                        </div>
                    </a>
                    </li>
                    {{-- Otra notifiacion --}}
                    <li class="mb-2">
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                        <div class="my-auto">
                            {{-- foto de perfil --}}
                            <img src="#" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                                {{-- accion --}}
                            <span class="font-weight-bold">Pago Mensualidad</span> de William Salazar
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                                {{-- tiempo en dias --}}
                            <i class="fa fa-clock me-1"></i>
                            Hace 1 dia
                            </p>
                        </div>
                        </div>
                    </a>
                    </li>
                    {{-- otra notificacion --}}
                    <li>
                    <a class="dropdown-item border-radius-md" href="javascript:;">
                        <div class="d-flex py-1">
                        <div class="my-auto">
                            <img src="#" class="avatar avatar-sm bg-gradient-dark  me-3 ">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h6 class="text-sm font-weight-normal mb-1">
                            Carta de pago a seguridad
                            </h6>
                            <p class="text-xs text-secondary mb-0">
                            <i class="fa fa-clock me-1"></i>
                            Hace 3 dias
                            </p>
                        </div>
                        </div>
                    </a>
                    </li>
                </ul>
                </li>
                {{-- datos del usuario activo: nombre y foto de perfil --}}
                <li class="nav-item d-flex align-items-center">
                <a href="#" class="nav-link text-body font-weight-bold px-0">
                    <img src="../assets/img/perfil.jpg" class="avatar avatar-sm bg-gradient-dark ">
                    <span class="d-sm-inline d-none">william salazar</span>
                </a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
