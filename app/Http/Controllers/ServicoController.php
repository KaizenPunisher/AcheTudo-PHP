<?php

namespace App\Http\Controllers;

use App\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function listarServicos(){
         
        $servicos = Servico::all();
        
        return view('index', [
            'servico' => $servicos
        ]);
    }
    //
}
