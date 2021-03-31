@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4> Clientes</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/clientes/create') }}" class="btn btn-success btn-sm" title="Add New Cliente">
                            <i class="fa fa-plus" aria-hidden="true"></i> Novo cliente
                        </a>

                        <form method="GET" action="{{ url('/clientes') }}" accept-charset="UTF-8"
                            class="form-inline my-2 my-lg-0 float-right" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="search" placeholder="Pesquisar..."
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

                                        <th>Id</th>
                                        <th>Nome/Razão social</th>
                                        <th>Cidade</th>
                                        <th>Estado</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($clientes as $item)
                                        <tr>
                                           {{--  <td>{{ $loop->iteration }}</td> --}}
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->nome_razaosocial }}</td>
                                            <td>{{ $item->cidade1 }}</td>
                                            <td>{{ $item->estado1 }}</td>
                                            <td>
                                                <a href="{{ url('/clientes/' . $item->id) }}" title="View Cliente">
                                                    <button class="btn btn-info btn-sm">
                                                        <i class="fa fa-eye"
                                                            aria-hidden="true"></i> Detalhes
                                                    </button></a>
                                                <a href="{{ url('/clientes/' . $item->id . '/edit') }}" title="Edit Cliente">
                                                    <button class="btn btn-primary btn-sm">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i>Editar
                                                    </button></a>

                                                <form method="POST" action="{{ url('/clientes' . '/' . $item->id) }}"
                                                    accept-charset="UTF-8" style="display:inline">
                                                    {{ method_field('DELETE') }}
                                                    {{ csrf_field() }}
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        title="Delete Cliente"
                                                        onclick="return confirm(&quot;Confirm delete?&quot;)"><i
                                                            class="fa fa-trash-o" aria-hidden="true"></i> Deletar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $clientes->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
