<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $fillable = [
        'id',
        'nomeFantasia',
        'razaoSocial',
        'cnpj',
        'horarioDeAtendimento',
        'descricao',
        'servico_id',
    ];

    protected $table = 'empresas';

    public function servico(){
        return $this->belongsTo(Empresa::class, 'servico_id');
    }
}
