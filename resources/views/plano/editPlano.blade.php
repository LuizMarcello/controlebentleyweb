@extends('layouts.app')

@section('title')
    <h1>Editando o plano: {{ $plano->nome }}</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('planos.index') }}">Listagem de Planos</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('planos.edit', $plano) }}">Editar</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Altere os dados necessarios</h3>
                        <div class="card-tools">
                            <a href="{{ route('planos.index', $plano) }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('planos.update', $plano) }}" method="POST">
                            @include('plano._formPlano')
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>
@endsection
