@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Ferramenta id: {{ $ferramenta->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/ferramentas') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/ferramentas/' . $ferramenta->id . '/edit') }}" title="Edit Ferramenta"><button
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Editar</button></a>

                        <form method="POST" action="{{ url('ferramentas' . '/' . $ferramenta->id) }}"
                            accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Ferramenta"
                                onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o"
                                    aria-hidden="true"></i> Deletar</button>
                        </form>
                        <br />
                        <br />

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th>
                                        <td>{{ $ferramenta->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Categoria </th>
                                        <td> {{ $ferramenta->categoria }} </td>
                                    </tr>
                                    <tr>
                                        <th> Tipo de ferramenta </th>
                                        <td> {{ $ferramenta->tipoferramenta }} </td>
                                    </tr>
                                    <tr>
                                        <th> Tipo de instrumento </th>
                                        <td> {{ $ferramenta->tipoinstrumento }} </td>
                                    </tr>
                                    <tr>
                                        <th> Descrição </th>
                                        <td> {{ $ferramenta->descricao }} </td>
                                    </tr>
                                    <tr>
                                        <th> Controle </th>
                                        <td> {{ $ferramenta->controle }} </td>
                                    </tr>
                                    <tr>
                                        <th> Medida </th>
                                        <td> {{ $ferramenta->medida }} </td>
                                    </tr>
                                    <tr>
                                        <th> Unidade de medida </th>
                                        <td> {{ $ferramenta->unidademedida }} </td>
                                    </tr>
                                    <tr>
                                        <th> Situação </th>
                                        <td> {{ $ferramenta->situacao }} </td>
                                    </tr>
                                    <tr>
                                        <th> Desde </th>
                                        <td> {{ $ferramenta->desde }} </td>
                                    </tr>
                                    <tr>
                                        <th> Observação </th>
                                        <td> {{ $ferramenta->observacao }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
