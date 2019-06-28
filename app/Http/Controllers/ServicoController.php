<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function listarServicos(){
         
        $listarServicos = Servico::all();
        
        return view('index', [
            'servicos' => $listarServicos
        ]);
    }
    //
}
