<?php

use App\Http\Controllers\CadastroController;
use Illuminate\Support\Facades\Route;

Route::get('/formulario', [CadastroController::class, 'cadastro'])->name('cadastrar');