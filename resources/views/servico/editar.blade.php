@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center mt-3"><h4>Editar cadastro de serviços</h4></div>
        <div class="panel-body">
            <form method="post" action="{{route('servico.atualizar', $servico->cliente->id)}}">
                {{ csrf_field() }}
                @method('PUT')
                <hr>
                <div class="col-md-10 offset-1">
                    <div class="form-group">
                        <label for="descricao">Descrição do serviço</label>
                        <input type="text" class="form-control" placeholder="Ex: Toldo Cortina, lona azul" name="descricao" value="{{$servico->descricao}}" required>
                    </div>
                </div>
                <div class="col-md-10 offset-1">
                    <div class="form-group">
                        <label for="pagamento">Tipo de pagamento</label>
                        <input type="text" class="form-control" placeholder="Ex: Parcelado 3x, cartão" name="pagamento" value="{{$servico->pagamento}}" required>
                    </div>
                </div>
                <div class="col-md-10 offset-1">
                    <div class="form-group">
                        <label for="valor">Valor do serviço</label>
                        <input type="text" class="form-control" placeholder="Valor" value="{{$servico->valor}}" required name="valor">
                    </div>
                </div>
                <div class="col-md-10 offset-1">
                    <div class="form-group">
                        <label for="fechamentoServico">Data de contrato</label>
                        <input type="text" class="form-control" placeholder="Ex: 00/00/00" name="fechamentoServico" value="{{$servico->fechamentoServico}}" required>
                    </div>
                </div>
                <div class="col-md-10 offset-1">
                    <div class="form-group">
                        <label for="entregaServico">Data de entrega</label>
                        <input type="text" class="form-control" placeholder="Ex: 11/11/11" name="entregaServico" value="{{$servico->entregaServico}}" required>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Voltar</a>
                    <button type="submit" class="btn btn-success ml-2">Atualizar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
