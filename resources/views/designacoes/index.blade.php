@extends('layouts.app')

{{-- @section('title');
    <h1>Listagem Designaco</h1>
@endsection --}}

@section('title')
    <li class="breadcrumb-item">
        <a href="{{ url('/designacoes') }}">Listagem de designacões</a>
    </li>
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Designacoes</div>
                    <div class="card-body">
                        <a href="{{ url('/designacoes/create') }}" class="btn btn-success btn-sm" title="Novo Designaco">
                            <i class="fa fa-plus" aria-hidden="true"></i> Novo
                        </a>

                        <form method="GET" action="{{ url('/designacoes') }}" accept-charset="UTF-8"
                            class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Buscar..."
                                    value="{{ request('search') }}">
                                <span class="input-group-append">
                                    <button class="btn btn-secondary" type="submit">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form>

                        <br />
                        <br />
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Banda</th>
                                        <th>Modem</th>
                                        <th>Antena</th>
                                        <th>Ações</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($designacoes as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->banda }}</td>
                                            <td>{{ $item->modem }}</td>
                                            <td>{{ $item->antena }}</td>
                                            <td>
                                                <a href="{{ url('/designacoes/' . $item->id) }}"
                                                    title="View Designaco"><button class="btn btn-info btn-sm"><i
                                                            class="fa fa-eye" aria-hidden="true"></i> Detalhes</button></a>
                                                <a href="{{ url('/designacoes/' . $item->id . '/edit') }}"
                                                    title="Edit Designaco"><button class="btn btn-primary btn-sm"><i
                                                            class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        Atualizar</button></a>

                                                <form method="POST" action="{{ url('/designacoes' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Designaco"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Excluir</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $designacoes->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
