<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $clientes = \App\Cliente::paginate(15);

        return view('cliente.index', compact('clientes'));
    }

    public function adicionar()
    {
        return view('cliente.adicionar');
    }

    public function salvar(Request $request)
    {
        \App\Cliente::create($request->all());

        return redirect()->route('cliente.index');
    }

    public function detalhe($id)
    {
        $cliente = \App\Cliente::find($id);

        return view('cliente.detalhe', compact('cliente'));
    }

    public function editar($id)
    {
        $cliente = \App\Cliente::find($id);

        return view('cliente.editar', compact('cliente'));
    }

    public function atualizar(Request $request, $id)
    {
      \App\Cliente::find($id)->update($request->all());

        return redirect()->route('cliente.index');
    }

    public function deletar($id)
    {
        $cliente = \App\Cliente::find($id);

        if (!$cliente->deletarServicos())
        {
            return redirect()->route('cliente.index');
        }

        $cliente->delete();


        return redirect()->route('cliente.index');
    }
}
