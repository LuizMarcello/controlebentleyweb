<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    {{-- <iframe src="https://beta.simet.nic.br/widget.html" height="320" width="780" style="border:none" ></iframe> --}}

    {{-- <iframe src="https://beta.simet.nic.br/widget.html" height="780" width="430" style="border:none" ></iframe> --}}

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script> --}}
    {{-- javascript --}}
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    {{-- jquery --}}
    {{-- <script src="{{ asset('jq/JQuery.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <style></style>
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

            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/cep-api.js') }}" defer></script>

</body>

</html>
