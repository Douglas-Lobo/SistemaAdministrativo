<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $primaryKey = 'clienteID';
    // protected $fillable =[
        
    // ];

    public function Estado(){
        return $this->belongsTo(Estado::class, 'estadoID');
    }


    public function getEnderecoCompletoAttribute(){

        return $this->attributes['endereco'] . $this->attributes['complemento'] . $this->attributes['numero'];

    }

    public function getTelefoneCompletoAttribute(){

        return '('.$this->attributes['ddd'].')' . $this->attributes['telefone'];

    }

}
