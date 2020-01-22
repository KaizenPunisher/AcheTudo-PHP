<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //
    protected $fillable = [
        'id',
        'nome',
        'vip',
    ];
    
    protected $table = 'servicos';

}

