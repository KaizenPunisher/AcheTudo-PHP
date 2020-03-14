<?php

namespace App\Http\Controllers;

use DB;
use App\Empresa;
use App\Servico;
use Illuminate\Http\Request;
use App\Http\Requests;

class EmpresaController extends Controller
{
    private $telefone_controller;
    private $empresa;

    public function __construct(TelefoneController $telefone_controller){
        $this->telefone_controller = $telefone_controller;
        $this->empresa = new Empresa();
    }

    public function listarEmpresas(Request $request){
         
        $servicoId        = $request->input('servicoId');

        //$listarEmpresas   = DB::table('empresas')->where($servicoId);
        //$listarEmpresas   = DB::select('SELECT * FROM  empresas where servico_id = $servicoId');
        $empresas         = DB::table('empresas')->where('servico_id', $servicoId)->get();
        
        //var_dump($this->empresa->find($servicoId));

        $telefones        = $this->telefone_controller->listarTelefones($empresas[0]->id);
        $servicos         = Servico::all();
        
        return view('src.conteudo', [
            'empresa'        => $empresas,
            'telefone'       => $telefones,
            'servico'        => $servicos,
            'servicoId'      => $servicoId,
        ]);
        
    }
    
    private function getEmpresa($id){
        return $this->empresa->find($id);
        
    }

}
