@extends('layouts.app')

@section('title')
    <h1>Novo(a) {{ $tipo }}</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('empresas.index') }}?tipo={{ $tipo }}">Listagem de {{ $tipo }}</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('empresas.create') }}?tipo={{ $tipo }}">Novo(a) {{ $tipo }}</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Entre com os dados</h3>
                        <div class="card-tools">
                            <a href="{{ route('empresas.index') }}?tipo={{ $tipo }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('empresas.store') }}" method="POST">
                            <input type="hidden" name="tipo" value="{{ $tipo }}">
                            
                            @include('empresa._form')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
