@extends('layouts.app')

@section('content')
<h2 class="text-center text-secondary mb-5">Dashboard <span class="material-icons">work</span></h2>
<div class="container">
    <div class="row col-10 offset-1">
        <div class="card bg-light mr-5" style="width:23rem;">
            <div class="card-header text-secondary"><h4>Receita mensal</h4></div>
            <div class="card-body">
                <p class="card-subtitle mb-2 text-muted">Valor total dos serviços do mês: {{date('m')}}</p>
                <h4 class="card-text mt-3 mb-3"><b>R$: </b>{{$valorMes}}</h4>
                <a href="{{route('servico.index')}}" class="card-link btn btn-info btn-sm text-white">detalhe</a>
            </div>
        </div>
        <div class="card bg-light" style="width: 23rem;">
            <div class="card-header text-secondary"><h4>Receita Anual</h4></div>
            <div class="card-body">
                <p class="card-subtitle mb-2 text-muted">Valor total dos serviços</p>
                <h4 class="card-text mt-3 mb-3"><b>R$: </b>{{$valorAno}}</h4>
                <a href="{{route('servico.index')}}" class="card-link btn btn-info btn-sm text-white">detalhe</a>
            </div>
        </div>
    </div>

    <div class="row col-10 offset-1 mt-5">
        <div class="card bg-light mr-5" style="width:23rem;">
            <div class="card-header text-secondary"><h4>Despesa mensal</h4></div>
            <div class="card-body">
                <p class="card-subtitle mb-2 text-muted">Valor total das despesas do mês: {{date('m')}}</p>
                <h4 class="card-text mt-3 mb-3"><b>R$: </b> </h4>
                <a href="{{route('servico.index')}}" class="card-link btn btn-success btn-sm text-white">detalhe</a>
            </div>
        </div>
        <div class="card bg-light" style="width: 23rem;">
            <div class="card-header text-secondary"><h4>Despesa Anual</h4></div>
            <div class="card-body">
                <p class="card-subtitle mb-2 text-muted">Valor total das despesas</p>
                <h4 class="card-text mt-3 mb-3"><b>R$: </b></h4>
                <a href="{{route('servico.index')}}" class="card-link btn btn-success btn-sm text-white">detalhe</a>
            </div>
        </div>
    </div>
</div>


@endsection
