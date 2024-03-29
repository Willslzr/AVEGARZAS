<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        AVEGARZAS
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Material Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <!-- CSS Files -->
    <link id="pagestyle" href="../assets/css/material-dashboard.css?v=3.1.0" rel="stylesheet" />
    <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
    <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
    <style>
        body {
            background-image: url('../assets/img/fondo.jpg');
            background-size: cover;
        }
    </style>
</head>

<body class="">
    <main class="main-content mt-0">
        <section>
            <div class="container my-5">
                <div class="bg-white col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto border box-shadow rounded">
                <img src="../assets/img/avegarza_logo.png" class="rounded-circle mx-auto mt-3 item-align-center" alt="Imagen de perfil" style="width: 100px; height: 100px;">
                <div class="card card-plain">
                    <div class="card-header">
                        @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                        @endif
                    <h4 class="font-weight-bolder text-center">AVEGARZAS</h4>
                    <p class="mb-0 text-center">Ingrese su numero de manzana y casa</p>
                    </div>
                    <div class="card-body">
                    <form action="{{route('visita.buscar')}}" method="GET">
                        <div class="d-flex">
                            <div class="mx-2 input-group input-group-outline mb-3">
                            <label class="form-label">Manzana</label>
                            <input name="manzana" type="number" class="form-control">
                            </div>
                            <div class="mx-2 input-group input-group-outline mb-3">
                            <label class="form-label">Casa</label>
                            <input name="casa" type="number" class="form-control">
                            </div>
                        </div>

                        @if (session('error'))
                            <div class="alert alert-danger mx-2 p-1 text-center text-white">
                                <p>{{ session('error') }}</p>
                            </div>
                        @endif

                        <div class="text-center">
                        <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100  mt-4 mb-0">Buscar</button>
                        </div>
                    </form>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-2 text-sm mx-auto">
                        No tienes una cuenta?
                        <a href="{{ route('register') }}" class="text-primary text-gradient font-weight-bold">Registrate</a>
                    </p>
                    </div>
                    <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-2 text-sm mx-auto">
                        Ya tienes una cuenta?
                        <a href="{{ route('login') }}" class="text-primary text-gradient font-weight-bold">Inicia Sesion</a>
                    </p>
                    </div>
                </div>
                </div>
            </div>

        </section>
    </main>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap.min.js"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Github buttons -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.min.js?v=3.1.0"></script>
</body>

</html>
