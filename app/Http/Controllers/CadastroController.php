<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastrar() {
        return view('formulario.formulario');
    }

    public function showCadastro(Request $request) {
        
        return view('formulario.dadosCadastrados', compact($request));
    }
}