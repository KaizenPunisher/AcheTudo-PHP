<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Autonomo extends Model
{
    //
    protected $fillable = [
        'id',
        'nome',
        'nomeFantasia',
        'cpf',
        'horarioDeAtendimento',
        'descricao',
        'servico_id',
    ];

    protected $table = 'autonomos';

    public function servico(){
        return $this->belongsTo(Empresa::class, 'servico_id');
    }
}
