@extends('layouts.app')

@section('content')
    <div class="">
        <h2 class="text-center mb-5">Painel de serviços</h2>

        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                    <tr class="text-center"  >
                        <th>Descrição</th>
                        <th>Pagamento</th>
                        <th>Valor</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($servicos as $servico)
                        <tr>
                            <td>{{$servico->descricao}}</td>
                            <td>{{$servico->pagamento}}</td>
                            <td>{{$servico->valor}}</td>
                            <td class="text-center">
                                <a href="{{route('servico.editar', $servico->cliente->id)}}"><span class="material-icons">create</span></a>
                                <a href="{{route('cliente.detalhe', $servico->cliente->id)}}" ><span class="material-icons">zoom_in</span></a>
                                <a href="javascript:(confirm('Deletar registro?') ? window.location.href='{{route('servico.deletar', $servico->id)}}' : false)"><span class="material-icons">delete_forever</span></a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div align="center" class="row">
            {{ $servicos->links() }}
        </div>
    </div>
@endsection
