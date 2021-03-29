@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">Equipamento id: {{ $equipamento->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/equipamentos') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/equipamentos/' . $equipamento->id . '/edit') }}"
                            title="Edit Equipamento"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o"
                                    aria-hidden="true"></i> Editar</button></a>

                        <form method="POST" action="{{ url('equipamentos' . '/' . $equipamento->id) }}"
                            accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Equipamento"
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
                                        <td>{{ $equipamento->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Tipo de equipamento </th>
                                        <td> {{ $equipamento->tipodeequipamento }} </td>
                                    </tr>
                                    <tr>
                                        <th> User Id </th>
                                        <td> {{ $equipamento->user_id }} </td>
                                    </tr>
                                    <tr>
                                        <th> Notafiscal </th>
                                        <td> {{ $equipamento->notafiscal }} </td>
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
