@extends('layouts.app')

@section('title')
    <h1>Nova Designação</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('designacao.index') }}">Listagem de Designações</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('designacao.create') }}">Nova Designação</a>
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
                            <a href="{{ route('designacao.index') }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('designacao.store') }}" method="POST">
                            @include('designacao._formDesignacao')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection