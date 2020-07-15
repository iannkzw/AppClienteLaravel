@extends('layouts.app')

@section('content')
    <div class=".bg-dark">
        <h2 class="text-center text-secondary mb-5">Painel de clientes <span class="material-icons">group</span></h2>

        <div class="row">
            <div class="col-md-12 ">
                <table class="table table-bordered">
                    <thead>
                    <tr class="text-center"  >
                        <th>Nome</th>
                        <th>Rua</th>
                        <th>Bairro</th>
                        <th>Numero</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                        <tr>
                            <td>{{$cliente->nome}}</td>
                            <td>{{$cliente->rua}}</td>
                            <td>{{$cliente->bairro}}</td>
                            <td>{{$cliente->numero}}</td>
                            <td class="text-center">
                                <a href="{{route('cliente.editar', $cliente->id)}}"><span class="material-icons">create</span></a>
                                <a href="{{route('cliente.detalhe', $cliente->id)}}" ><span class="material-icons">zoom_in</span></a>
                                <a href="javascript:(confirm('Deletar registro?') ? window.location.href='{{route('cliente.deletar', $cliente->id)}}' : false)"><span class="material-icons">delete_forever</span></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div align="center" class="row">
            {{ $clientes->links() }}
        </div>
        <a href="{{route('cliente.adicionar')}}" class="btn btn-success">cadastrar cliente</a>
    </div>
@endsection
