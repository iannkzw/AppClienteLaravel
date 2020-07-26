@extends('layouts.app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading text-center"><h4>Cadastro de cliente</h4></div>
        <div class="panel-body">
            <form method="post" action="{{route('cliente.salvar')}}">
                {{ csrf_field() }}
                <hr>
                    <div class="col-md-10 offset-1">
                        <div class="form-group">
                            <label for="nome">Nome</label>
                            <input type="text" class="form-control" placeholder="Nome do cliente" name="nome" required>
                        </div>
                    </div>
                    <div class="col-md-10 offset-1">
                        <div class="form-group">
                            <label for="rua">Logradouro</label>
                            <input type="text" class="form-control" placeholder="Ex: Av. São joão" name="rua" required>
                        </div>
                    </div>
                    <div class="col-md-10 offset-1">
                        <div class="form-group">
                            <label for="numero">Numero</label>
                            <input type="text" class="form-control" placeholder="Número do imóvel" name="numero" required>
                        </div>
                    </div>
                    <div class="col-md-10 offset-1">
                        <div class="form-group">
                            <label for="bairro">Bairro</label>
                            <input type="text" class="form-control" placeholder="Nome do bairro" required name="bairro">
                        </div>
                    </div>
                <div class="col-md-10 offset-1">
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <input type="text" class="form-control" placeholder="Número para contato" name="telefone" required>
                    </div>
                </div>
                <div class="text-center">
                    <a href="{{ url()->previous() }}" class="btn btn-outline-secondary">Voltar</a>
                    <button type="submit" class="btn btn-success ml-2">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>

@endsection
