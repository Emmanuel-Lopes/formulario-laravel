@extends('layout')

@section('titulo')
    Dados Cadastrados
@endsection

@section('cabecalho')
    Dados Cadastrados
@endsection

@section('conteudo')
<div class="card p-4 mb-3">
        <p class="font-monospace fs-4 fw-bold text-center">Informações Pessoais<hr class="mb-4"></p>
        <div class="mb-4">
            <i class="far fa-user"></i>
            <label for="nome" class="form-label fw-bold">Nome completo</label>
        </div>
        <div class="mb-4 row g-5 align-items-center justify-content-between">
            <div class="col-4">
                <i class="fas fa-id-card"></i>
                <label for="cpf" class="form-label fw-bold">CPF</label>
            </div>
            <div class="col-4">
                <i class="fas fa-fingerprint"></i>
                <label for="rg" class="form-label fw-bold">RG</label>
            </div>
            <div class="col-4">
                <i class="far fa-calendar-alt"></i>
                <label class="form-label fw-bold" for="nasc">Data de nascimento</label>
            </div>
        </div>
        <div class="mb-4">
            <i class="fas fa-female"></i>
            <label for="mae" class="form-label fw-bold">Nome da mãe</label>
        </div>
        <div class="">
            <i class="fas fa-male"></i>
            <label for="pai" class="form-label fw-bold">Nome do pai</label>
        </div>
    </div>
    <div class="card p-4 mb-3">
        <p class="font-monospace fs-4 fw-bold text-center">Contatos<hr class="mb-4"></p>
        <div class="row align-items-center mb-4">
            <div class="col-4">
                <i class="fas fa-at"></i>
                <label for="email" class="form-label fw-bold">Email</label>
            </div>
            <div class="col-4">
                <i class="fas fa-mobile-alt"></i>
                <label for="tel1" class="form-label fw-bold">Telefone 1</label>
            </div>
            <div class="col-4">
                <i class="fas fa-phone"></i>
                <label for="tel2" class="form-label fw-bold">Telefone 2</label>
            </div>
        </div>
    </div>
    <div class="card p-4 mb-3">
        <p class="font-monospace fs-4 fw-bold text-center">Endereço<hr class="mb-4"></p>
        <div class="mb-4">
            <i class="fas fa-home"></i>
            <label for="logr" class="form-label fw-bold">Logradouro</label>
        </div>
        <div class="row mb-4 align-items-center">
            <div class="col-3">
                <i class="fas fa-sort-numeric-up"></i>
                <label for="num" class="form-label fw-bold">Número</label>
            </div>
            <div class="col-9">
                <i class="fas fa-map-marked-alt"></i>
                <label for="comp" class="form-label fw-bold">Complemento</label>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-3">
                <label for="cep" class="form-label fw-bold">CEP</label>
            </div>
            <div class="col-4">
                <label for="uf" class="form-label fw-bold">UF</label>
            </div>
            <div class="col-5">
                <i class="fas fa-flag"></i>
                <label for="pais" class="form-label fw-bold">País</label>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card w-25 p-3 mb-3">
            <a href="{{route('cadastrar')}}" class="btn fw-bold btn-outline-danger">Novo Cadastro</a>
        </div>
    </div>
@endsection