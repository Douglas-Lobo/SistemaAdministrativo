<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $primaryKey = 'produtoID';
    public $timestamps = false;

    protected $fillable = [
        'nomeproduto', 'descricao', 'codigobarra', 'precounitario','estoque', 'imagempequena', 'fornecedorID', 'categoriaID'
    ];

    //Um fornecedor POSSUI varios Produtos
    public function Fornecedor(){
       return $this->belongsTo(Fornecedor::class, 'fornecedorID');
    }
    
    //Uma categoria POSSUI varios Produtos
    public function Categoria(){
        return $this->belongsTo(Categoria::class, 'categoriaID');
     }

     //Utilização de Acessors para exibição dos dados na Views
     public function getPrecoRealAttribute()
    {
        return 'R$ '. $this->attributes['precounitario'];
    }


}
