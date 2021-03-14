@extends('layouts.app')

@section('title')
    <h1>Editar {{ $empresa->nome }}</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('empresas.edit', $empresa) }}">Editar</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Altere os dados necessários</h3>
                       {{--  <div class="card-tools">
                            <a href="{{ route('empresas.index') }}"
                                class="btn btn-success">Voltar</a>
                        </div> --}}
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('empresas.update', $empresa) }}" method="POST">
                            @include('empresa._form')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
