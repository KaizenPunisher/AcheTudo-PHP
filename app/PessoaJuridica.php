<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PessoaJuridica extends Model
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

    protected $table = 'pessoasjuridicas';

    public function servico(){
        return $this->belongsTo(Empresa::class, 'servico_id');
    }
}
