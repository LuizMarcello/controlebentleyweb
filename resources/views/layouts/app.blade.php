<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div id="app" class="wrapper">

        @include('layouts.menu-lateral');

        <div class="content-wrapper">

            <div class="col-sm-12">
                @yield('navbar')
            </div>

            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">

                            @yield('title')
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('home') }}">Dashboard</a>
                                </li>

                                @yield('breadcrumb')
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            @yield('content')
        </div>

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Satellite Broadband Networks</b> 1.0-rc
            </div>
            <strong>Copyright &copy; 2021 <a href="https://adminlte.io"> Bentley Brasil - Sistema
                    Administrativo</a>.</strong> Todos
            os direitos reservados
        </footer>

    </div>
</body>

</html>






