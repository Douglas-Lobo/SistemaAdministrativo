<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $primaryKey = 'fornecedorID';
    protected $table = 'Fornecedores';

    protected $fillable = [
        'nomefornecedor', 'endereco', 'cidade', 'telefone'
    ];


    public function Estado(){
        return $this->belongsTo(Estado::class, 'estadoID');
    }

}
