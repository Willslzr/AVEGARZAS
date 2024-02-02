<!DOCTYPE html>
<html lang="en">

    <head>
        @include('Backend.Layouts.common-head')
    </head>

<body class="g-sidenav-show  bg-gray-400">

    <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
        <div class="container-fluid py-4">
            @livewire('visita.mostrar', ['usuario' => $usuario, 'mespago' => $mespago])
            <footer class="footer py-4  ">
                <div class="container-fluid">
                    <div class="row align-items-center justify-content-lg-between">
                        <div class="col-lg-6 mb-lg-0 mb-4">
                            <div class="copyright text-center text-sm text-muted text-lg-start">
                                © <script>
                                document.write(new Date().getFullYear())
                                </script>,
                                Hecho con <i class="fa fa-heart"></i> Por
                                <a href="#" class="font-weight-bold">William Salazar</a>
                                Para AVEGARZAS.
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </main>

    @include('Backend.Layouts.common-end')
    @stack('custom-scripts')

    </body>

</html>
