<?php

namespace App\Http\Controllers;

use App\Cadastro;
use App\Http\Requests\CadastroFormRequest;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    public function cadastrar(Request $request) {

        $mensagemRemocaoCadastro = $request->session()->get('mensagemRemocaoCadastro');

        return view('formulario.formulario', compact('mensagemRemocaoCadastro'));
    }

    public function newCadastro(Request $request) {

        $mensagemCadastroRealizado = $request->session()->get('mensagemCadastroRealizado');

        return view('formulario.dadosCadastrados', compact('mensagemCadastroRealizado'));
    }

    public function storeCadastro(CadastroFormRequest $request) {

        $cadastro = Cadastro::create($request -> all());

        $request->session()->flash('mensagemCadastroRealizado',
            "{$cadastro->nome}, seu cadastro foi realizado com sucesso.");
        
        return redirect()->route(route:'showCadastro');
    }
    public function delete(Request $request) {

        Cadastro::destroy($request);

        $request->session()->flash('mensagemRemocaoCadastro', 
            "O cadastro de {$request->nome} foi removido. Por favor, realize um novo cadastro.");
        
        return redirect()->route(route:'cadastrar');
    }
}