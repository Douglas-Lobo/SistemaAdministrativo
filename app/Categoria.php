<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $primaryKey = 'categoriaID';
    protected $table = 'Categorias';

    protected $fillable = [
        'nomecategoria'
    ];



}
