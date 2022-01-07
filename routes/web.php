<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;

Route :: post('/formulario_cadastro', [CadastroController :: class, 'storeCadastro']) 
    -> name('formulario');

Route :: get('/lista_cadastrados', [CadastroController :: class, 'index'])
    -> name('cadastros');

Route :: get('/formulario_cadastro', [CadastroController :: class, 'create'])
    -> name('create');

Route :: delete('/lista_cadastrados/remover_cadastro/{id}', [CadastroController :: class, 'delete']);

Route :: get('/cadastro/{id}', [CadastroController :: class, 'showCadastro'])
    -> name('showCadastro');

Route :: get('/cadastro/{cadastroId}/pais', [CadastroController :: class, 'indexPais']);