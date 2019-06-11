<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    //
    protected $fillable = [
        'id',
        'logradouro',
        'cep',
        'bairro',
        'cidade',
        'regiao',
        'empresa_id',
    ];
    
    protected $table = 'enderecos';

    public function empresa(){
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}