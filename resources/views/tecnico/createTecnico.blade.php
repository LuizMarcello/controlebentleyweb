@extends('layouts.app')

@section('title')
    <h1>Novo Técnico</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('tecnicos.index') }}">Listagem de Técnicos</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('tecnicos.create') }}">Novo Técnico</a>
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
                            <a href="{{ route('tecnicos.index') }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('tecnicos.store') }}" method="POST">
                            @include('tecnico._formTecnico')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
