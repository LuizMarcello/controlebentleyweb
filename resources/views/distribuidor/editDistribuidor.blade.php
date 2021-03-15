@extends('layouts.app')

@section('title')
    <h1>Editando o distribuidor: {{ $distribuidor->nome }}</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('distribuidors.index', $distribuidor) }}">Listagem de Distribuidores</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('distribuidors.edit', $distribuidor) }}">Editar</a>
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
                            <a href="{{ route('distribuidors.index', $distribuidor) }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('distribuidors.update', $distribuidor) }}" method="POST">
                            @include('distribuidor._formDistribuidor')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
