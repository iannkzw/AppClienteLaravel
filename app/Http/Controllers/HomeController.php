<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $servicos = DB::table('servicos')->whereMonth('created_at', date('m'))->get();
        $valorMes = DB::table('servicos')->whereMonth('created_at', date('m'))->sum('valor');
        $valorAno = DB::table('servicos')->whereYear('created_at', date('Y'))->sum('valor');

        return view('home', compact('valorMes', 'valorAno', 'servicos'));
    }
}
