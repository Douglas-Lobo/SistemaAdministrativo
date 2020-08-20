<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $primaryKey = 'pedidoID';

    public function Transportadora(){
        return $this->belongsTo(Transportadora::class, 'transportadoraID');
    }

    public function Cliente(){
        return $this->belongsTo(Cliente::class, 'clienteID');
    }

    public function Status(){
        return $this->belongsTo(Status::class, 'statusID');
    }

    //Utilização de Acessors para exibição dos dados na Views
    public function getPrecoRealAttribute()
    {
        return 'R$ '. $this->attributes['valor_pedido'];
    }


}
