<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome', 'rua', 'bairro', 'numero', 'telefone'];

    public function servicos(){
        return $this->hasMany('App\Servico', 'cliente_id');
    }

    public function addServico(Servico $ser)
    {
        return $this->servicos()->save($ser);
    }

    public function deletarServicos()
    {
        foreach ($this->servicos as $ser)
        {
            $ser->delete();
        }
        return true;
    }
}
