<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class TelefoneController extends Controller
{
    public function listarTelefones($empresa_id){
        $empresaId = $empresa_id;
        $numeros = DB::table('telefones')->where('empresa_id', $empresa_id)->get();
        return $numeros;
    }
}
