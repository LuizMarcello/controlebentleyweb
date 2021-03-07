@extends('layouts.app')

@section('title')
    <h1>Novo Distribuidor</h1>
@endsection

@section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ route('distribuidors.index') }}">Listagem de Distribuidores</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ route('distribuidors.create') }}">Novo Distribuidor</a>
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
                            <a href="{{ route('distribuidors.index') }}" class="btn btn-success">Voltar</a>
                        </div>
                    </div>

                    {{-- O corpo --}}
                    <div class="card-body">
                        <form action="{{ route('distribuidors.store') }}" method="POST">
                            @include('distribuidor._formDistribuidor')
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
