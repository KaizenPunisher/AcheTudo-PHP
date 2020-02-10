<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    //
    protected $fillable = [
        'id',
        'razao_social',
        'nome_fantasia',
        'nome',
        'cnpj',
        'cpf',
        'orgao_publico',
        'horario_de_atendimento',
        'descricao',
        'servico_id',
    ];

    protected $table = 'empresas';

    public function servico(){
        return $this->belongsTo(Empresa::class, 'servico_id');
    }
}
