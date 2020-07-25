@extends('layouts.app')

@section('content')
<h4 class="text-center text-dark mb-5">Dashboard <span class="material-icons">timeline</span></h4>

<div>
    <div class="row ml-auto mr-auto">
        <div class="col-4">
            <div class="card shadow-sm mt-5 ml-3" style="height: 15rem; width:23rem;">
                <div class="card-header bg-light text-dark"><h5>Receita mensal</h5></div>
                <div class="card-body bg-light">
                    <p class="card-subtitle mt-3 mb-2 text-muted">Valor total dos serviços do mês: {{date('m')}}</p>
                    <h4 class="card-text mt-3 mb-3"><b>R$: </b>{{$valorMes}}</h4>
                    <a href="{{route('servico.index')}}" class="card-link btn btn-outline-success btn-sm">serviços</a>
                </div>
            </div>
        </div>

        <div class="col-8">
            <h5 class=" text-center mb-4">Últimas receitas</h5>
            <table class="table table-bordered shadow-sm">
                <thead>
                <tr class="text-center">
                    <th>Descrição</th>
                    <th>Pagamento</th>
                    <th>Valor</th>
                </tr>
                </thead>
                <tbody>
                @foreach($servicos as $servico)
                    <tr>
                        <td>{{$servico->descricao}}</td>
                        <td>{{$servico->pagamento}}</td>
                        <td>{{$servico->valor}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection
