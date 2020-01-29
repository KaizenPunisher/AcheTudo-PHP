<?php

namespace App\Http\Controllers;

use DB;
use App\Empresa;
use App\Servico;
use Illuminate\Http\Request;
use App\Http\Requests;

class EmpresaController extends Controller
{
   
    public function listarEmpresas(Request $request){
         
        $servicoId      = $request->input('servicoId');
        //$listarEmpresas = DB::table('empresas')->where($servicoId);
        //$listarEmpresas = DB::select('SELECT * FROM  empresas where servico_id = $servicoId');
        $listarEmpresas = DB::table('empresas')->where('servico_id', $servicoId)->get();
        $listarServicos = Servico::all();
        
        return view('src.conteudo', [
            'empresas' => $listarEmpresas,
            'servicos' => $listarServicos,
            'listarId' => $servicoId,
        ]);
      
    }
    //
}
