@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p><b>Cliente: </b>{{ $cliente->nome }}</p>
                        <p><b>Telefone: </b>{{ $cliente->telefone }}</p>
                        <p><b>Rua: </b>{{ $cliente->rua }}</p>
                        <p><b>N°: </b>{{ $cliente->numero }}</p>
                        <p><b>Bairro: </b>{{ $cliente->bairro }}</p>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>Serviço</th>
                                <th>Pagamento</th>
                                <th>Valor</th>
                                <th>Contrato</th>
                                <th>Entrega</th>
                                <th>Ações</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cliente->servicos as $servico)
                                <tr>
                                    <td>{{$servico->descricao}}</td>
                                    <td>{{$servico->pagamento}}</td>
                                    <td>{{$servico->valor}}</td>
                                    <td>{{\Carbon\Carbon::parse($servico->fechamentoServico)->format('d/m/Y')}}</td>
                                    <td>{{\Carbon\Carbon::parse($servico->entregaServico)->format('d/m/Y')}}</td>
                                    <td>
                                        <a href="{{route('servico.editar', $servico->cliente->id)}}" class="btn btn-sm btn-outline-info">editar</a>
                                        <a href="javascript:(confirm('Deletar registro?') ? window.location.href='{{route('servico.deletar', $servico->id)}}' : false)" class="btn btn-sm btn-outline-danger">remover</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <a href="{{ route('cliente.index') }}" class="btn btn-outline-secondary">Voltar</a>
                        <a href="{{route('servico.adicionar', $cliente->id)}}" class="btn btn-success">Cadastrar serviço</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
