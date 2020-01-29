<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //
    protected $fillable = [
        'id',
        'nome',
    ];
    
    protected $table = 'servicos';

    public function autonomo(){
        return $this->hasMany(Empresa::class, 'servico_id');
    }
}

