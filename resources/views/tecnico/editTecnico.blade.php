@extends('layouts.app')

@section('title')
    <h3>Editando o técnico: {{ $tecnico->nome }}</h3>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('tecnicos.index', $tecnico) }}">Listagem de Técnicos</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('tecnicos.edit', $tecnico) }}">Editar</a>
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
                            <a href="{{ route('tecnicos.index', $tecnico) }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('tecnicos.update', $tecnico) }}" method="POST">
                            @include('tecnico._formTecnico')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
