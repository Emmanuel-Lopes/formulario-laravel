<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;

Route::get('/formulario', [CadastroController::class, 'cadastrar'])->name('cadastrar');
Route::get('/dadosCadastrados', [CadastroController::class, 'showCadastro']) -> name('showCadastro');