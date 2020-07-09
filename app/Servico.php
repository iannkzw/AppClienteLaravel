<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    protected $fillable = ['descricao', 'pagamento', 'valor', 'fechamentoServico', 'entregaServico'];

    public function cliente(){
        return $this->belongsTo('App\Cliente', 'cliente_id');
    }
}
