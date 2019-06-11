<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    //
    protected $fillable = [
        'id',
        'ddd',
        'numero',
        'tipo',
        'empresa_id',
    ];
    
    protected $table = 'telefones';

    public function empresa(){
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }
}
