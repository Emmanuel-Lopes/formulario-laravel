<?php

namespace App\Http\Controllers;

class CadastroController extends Controller
{
    public function cadastro() {
        return view('formulario.formulario');
    }
}