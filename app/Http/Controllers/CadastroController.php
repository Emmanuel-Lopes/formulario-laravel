<?php

namespace App\Http\Controllers;

use App\Cadastro;
use App\Models\Pai;
use App\Http\Requests\CadastroFormRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CadastroController extends Controller
{
    public function storeCadastro(CadastroFormRequest $request) {

        $cadastro = Cadastro :: create($request -> all());
        
        $pais = [$request -> mae, $request -> pai];

        foreach ($pais as $pai) {
            $idPai = DB :: table('cadastros') -> where('nome', $pai) -> value('id');
            $cadastro -> pais() -> create(['pai_mae' => $idPai]);
        }

        $request -> session() ->
            flash('mensagemNovoCadastro', "Cadastro de {$cadastro -> nome} realizado com sucesso!");

        return redirect() -> route(route: 'cadastros');
    }

    public function index(Request $request) {

        $cadastros = Cadastro :: query() -> get();

        $mensagemNovoCadastro = $request -> session() -> get('mensagemNovoCadastro');

        $mensagemRemocaoCadastro = $request -> session() -> get('mensagemRemocaoCadastro');

        return view('formulario.listaCadastrados', 
            compact('cadastros', 'mensagemNovoCadastro', 'mensagemRemocaoCadastro'));
    }

    public function indexPais(int $cadastroId) {
        $cadastro = Cadastro :: find($cadastroId);
        $paisId = $cadastro -> paisId;

        return view('formulario.pais', compact('cadastro', 'paisId'));
    }

    public function create() {

        $noms = DB :: table('cadastros') -> pluck('nome');

        return view('formulario.formulario', compact('noms'));
    }

    public function delete(Request $request) {

        Cadastro :: destroy($request -> id);

        $request -> session() -> 
            flash('mensagemRemocaoCadastro', "Cadastro removido.");

        return redirect() -> route(route: 'cadastros');
    }

    public function showCadastro(Request $request) {

        $cadastro = DB :: table('cadastros') -> find($request -> id);

        return view('formulario.dadosCadastrados', compact('cadastro'));
    }

    // public function showPais()
    // {
    //     $cadastros = Cadastro :: find(1);

    //     return view('formulario.pais', compact('cadastros'));
    // }
}