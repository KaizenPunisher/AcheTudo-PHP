<?php

namespace App\Http\Controllers;

use App\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index(){

        $listarEmpresas = Empresa::all();

        return view('index', ['empresas' => $listarEmpresas]);
    }
    //
}
