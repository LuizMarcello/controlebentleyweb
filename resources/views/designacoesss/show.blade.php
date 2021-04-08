@extends('layouts.app')

@section('title');
    <h1>Detalhes Designacoesss</h1>
@endsection

section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/designacoesss') }}">Listagem Designacoesss</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ url('/designacoesss/' . $designacoesss->id) }}">Detalhes Designacoesss</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Designacoesss {{ $designacoesss->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/designacoesss') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/designacoesss/' . $designacoesss->id . '/edit') }}" title="Edit Designacoesss"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('designacoesss' . '/' . $designacoesss->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Designacoesss" onclick="return confirm(&quot;Tem certeza que deseja apagar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $designacoesss->id }}</td>
                                    </tr>
                                    <tr><th> Name </th><td> {{ $designacoesss->name }} </td></tr><tr><th> Email </th><td> {{ $designacoesss->email }} </td></tr><tr><th> Password </th><td> {{ $designacoesss->password }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
