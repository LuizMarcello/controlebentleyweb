@extends('layouts.app')

@section('title');
    <h1>Detalhes Testetestis</h1>
@endsection

section('breadcrumb')
    <li class="breadcrumb-item">
        <a href="{{ url('/testetestes') }}">Listagem Testetestis</a>
    </li>

    <li class="breadcrumb-item">
        <a href="{{ url('/testetestes/' . $testetestis->id) }}">Detalhes Testetestis</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Testetestis {{ $testetestis->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/testetestes') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/testetestes/' . $testetestis->id . '/edit') }}" title="Edit Testetestis"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('testetestes' . '/' . $testetestis->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Testetestis" onclick="return confirm(&quot;Tem certeza que deseja apagar?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                        </form>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $testetestis->id }}</td>
                                    </tr>
                                    <tr><th> User Id </th><td> {{ $testetestis->user_id }} </td></tr><tr><th> Nome Razaosocial </th><td> {{ $testetestis->nome_razaosocial }} </td></tr><tr><th> Ie Rg </th><td> {{ $testetestis->ie_rg }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
