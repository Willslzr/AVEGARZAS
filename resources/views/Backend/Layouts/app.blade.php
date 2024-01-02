<!DOCTYPE html>
<html lang="en">

    <head>
        @include('Backend.Layouts.common-head')
    </head>

    <body class="g-sidenav-show  bg-gray-400">

    @include('Backend.Layouts.sidebar')

        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">

            @include('Backend.Layouts.header')
            @yield('main-content')
            @include('Backend.Layouts.footer')

        </main>

    @include('Backend.Layouts.common-end')
    @stack('custom-scripts')

    </body>

</html>
