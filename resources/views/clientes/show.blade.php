@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h4> Cliente id: {{ $cliente->id }}</h4>
                    </div>
                    <div class="card-body">

                        <a href="{{ url('/clientes') }}" title="Back"><button class="btn btn-warning btn-sm"><i
                                    class="fa fa-arrow-left" aria-hidden="true"></i> Voltar</button></a>
                        <a href="{{ url('/clientes/' . $cliente->id . '/edit') }}" title="Edit Cliente"><button
                                class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                Editar</button></a>

                        <form method="POST" action="{{ url('clientes' . '/' . $cliente->id) }}" accept-charset="UTF-8"
                            style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete Cliente"
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
                                        <td>{{ $cliente->id }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <th> User Id </th>
                                        <td> {{ $cliente->user_id }} </td>
                                    </tr> --}}
                                    <tr>
                                        <th> Nome/Razão social </th>
                                        <td> {{ $cliente->nome_razaosocial }} </td>
                                    </tr>
                                    <tr>
                                        <th> Ie Rg </th>
                                        <td> {{ $cliente->ie_rg }} </td>
                                    </tr>
                                    <tr>
                                        <th> CPF/CNPJ </th>
                                        <td> {{ $cliente->documento }} </td>
                                    </tr>
                                    <tr>
                                        <th> Banda </th>
                                        <td> {{ $cliente->banda }} </td>
                                    </tr>
                                    <tr>
                                        <th> Plano </th>
                                        <td> {{ $cliente->plano }} </td>
                                    </tr>
                                    <tr>
                                        <th> Data de adesão </th>
                                        <td> {{ $cliente->dataadesao }} </td>
                                    </tr>
                                    <tr>
                                        <th> Inscrição municipal </th>
                                        <td> {{ $cliente->inscricaomunicipal }} </td>
                                    </tr>
                                    <tr>
                                        <th> Data de nascimento </th>
                                        <td> {{ $cliente->datanascimento }} </td>
                                    </tr>
                                    <tr>
                                        <th> Nome do contato </th>
                                        <td> {{ $cliente->nome_contato }} </td>
                                    </tr>
                                    <tr>
                                        <th> Telefone 1 </th>
                                        <td> {{ $cliente->telefone1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Telefone 2 </th>
                                        <td> {{ $cliente->telefone2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Celular 1 </th>
                                        <td> {{ $cliente->celular1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Celular 2 </th>
                                        <td> {{ $cliente->telefone2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Email </th>
                                        <td> {{ $cliente->email }} </td>
                                    </tr>
                                    <tr>
                                        <th> Chave </th>
                                        <td> {{ $cliente->chave }} </td>
                                    </tr>
                                    <tr>
                                        <th> Equipamento </th>
                                        <td> {{ $cliente->equipamento }} </td>
                                    </tr>
                                    <tr>
                                        <th> Data de cadastro </th>
                                        <td> {{ $cliente->created_at }} </td>
                                    </tr>
                                    <tr>
                                        <th> Status </th>
                                        <td> {{ $cliente->status }} </td>
                                    </tr>
                                    <tr>
                                        <th> Forma de pagamento </th>
                                        <td> {{ $cliente->formapagamento }} </td>
                                    </tr>
                                    <tr>
                                        <th> Instalador </th>
                                        <td> {{ $cliente->instalador }} </td>
                                    </tr>
                                    <tr>
                                        <th> Distribuidor </th>
                                        <td> {{ $cliente->distribuidor }} </td>
                                    </tr>
                                    <tr>
                                        <th> Representante </th>
                                        <td> {{ $cliente->representante }} </td>
                                    </tr>
                                    <tr>
                                        <th> Observação </th>
                                        <td> {{ $cliente->observacao }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div>
                                <h4>Endereço do contratante</h4>
                            </div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th> Cep </th>
                                        <td> {{ $cliente->cep1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Rua </th>
                                        <td> {{ $cliente->rua1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Numero </th>
                                        <td> {{ $cliente->numero1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Bairro</th>
                                        <td> {{ $cliente->bairro1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Cidade </th>
                                        <td> {{ $cliente->cidade1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Estado </th>
                                        <td> {{ $cliente->estado1 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Celular </th>
                                        <td> {{ $cliente->celular11 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Telefone </th>
                                        <td> {{ $cliente->telefone11 }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div>
                                <h4>Endereço de instalação</h4>
                            </div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th> Cep </th>
                                        <td> {{ $cliente->cep2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Rua </th>
                                        <td> {{ $cliente->rua2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Numero </th>
                                        <td> {{ $cliente->numero2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Bairro</th>
                                        <td> {{ $cliente->bairro2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Cidade </th>
                                        <td> {{ $cliente->cidade2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Estado </th>
                                        <td> {{ $cliente->estado2 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Celular </th>
                                        <td> {{ $cliente->celular21 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Telefone </th>
                                        <td> {{ $cliente->telefone21 }} </td>
                                    </tr>
                                </tbody>
                            </table>
                            <br>
                            <div>
                                <h4>Endereço de cobrança</h4>
                            </div>
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th> Cep </th>
                                        <td> {{ $cliente->cep3 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Rua </th>
                                        <td> {{ $cliente->rua3 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Numero </th>
                                        <td> {{ $cliente->numero3 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Bairro</th>
                                        <td> {{ $cliente->bairro3 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Cidade </th>
                                        <td> {{ $cliente->cidade3 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Estado </th>
                                        <td> {{ $cliente->estado3 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Celular </th>
                                        <td> {{ $cliente->celular31 }} </td>
                                    </tr>
                                    <tr>
                                        <th> Telefone </th>
                                        <td> {{ $cliente->telefone31 }} </td>
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