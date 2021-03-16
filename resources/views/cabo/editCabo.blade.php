@extends('layouts.app')

@section('title')
    <h1>Editando o cabo {{ $cabo->tipodecabo }} marca {{ $cabo->marca }}</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('cabos.index', $cabo) }}">Listagem de Cabos</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('cabos.edit', $cabo) }}">Editar</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Altere os dados necessários</h3>
                        <div class="card-tools">
                            <a href="{{ route('cabos.index', $cabo) }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('cabos.update', $cabo) }}" method="POST">
                            @include('cabo._formCabo')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
