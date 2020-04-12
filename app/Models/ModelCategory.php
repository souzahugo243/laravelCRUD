<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ModelCategory extends Model
{
    // Acessando tabela de categorias
    protected $table = "category";
    
    // Campos permitidos para inserir
    protected $fillable=[
                          'name',
                          'description',                        
    ];
}
