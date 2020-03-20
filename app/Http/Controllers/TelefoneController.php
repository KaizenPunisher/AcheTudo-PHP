<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB as FacadesDB;

class TelefoneController extends Controller
{
    public function listarTelefones($empresa_id){
        $empresaId = $empresa_id;
        $numeros = FacadesDB::table('telefones')->where('empresa_id', $empresa_id)->get();
        return $numeros;
    }
}
