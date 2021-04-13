@extends('layouts.app')

@section('title')
    <h3>Editando o técnico: {{ $tecnico->nome }}</h3>
    <a href="{{ url('/tecnicos') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left"
                aria-hidden="true"></i> Voltar</button></a>
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
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('tecnicos.update', $tecnico) }}" method="POST">
                            {{-- {{ csrf_field() }} --}}
                            @method('PUT')
                            {{-- ou assim --}}
                            {{-- <input type="hidden" name="_method" value="put"> --}}
                            @include('tecnico._formTecnico')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
