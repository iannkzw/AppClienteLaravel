<?php

namespace App\Http\Controllers;

use App\Servico;
use App\Cliente;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $servicos = \App\Servico::paginate(15);

        return view('servico.index', compact('servicos'));
    }

    public function adicionar($id)
    {
        $cliente = \App\Cliente::find($id);
        return view('servico.adicionar', compact('cliente'));
    }

    public function salvar(Request $request, $id)
    {
        $servico = new \App\Servico;
        $servico->descricao = $request->input('descricao');
        $servico->pagamento = $request->input('pagamento');
        $servico->valor = $request->input('valor');
        $servico->fechamentoServico = $request->input('fechamentoServico');
        $servico->entregaServico = $request->input('entregaServico');

        \App\Cliente::find($id)->addServico($servico);

        return redirect()->route('cliente.detalhe', $id);
    }

    public function editar($id)
    {
        $servico = \App\Servico::find($id);

        return view('servico.editar', compact('servico'));
    }

    public function atualizar(Request $request, $id)
    {
        $servico = \App\Servico::find($id);
        $servico->update($request->all());

        return redirect()->route('cliente.detalhe', $servico->cliente->id);
    }

    public function deletar($id)
    {
        $servico = \App\Servico::find($id);
        $servico->delete();

        return redirect()->route('servico.index');
    }
}
