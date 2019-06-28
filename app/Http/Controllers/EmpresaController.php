<?php

namespace App\Http\Controllers;

use App\Empresa;
use App\Servico;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
   
    public function listarEmpresas(){
         
        $listarEmpresas = Empresa::all();
        $listarServicos = Servico::all();
        
        return view('src.conteudo', [
            'empresas' => $listarEmpresas,
            'servicos' => $listarServicos,
        ]);
      
    }
    //
    
}
