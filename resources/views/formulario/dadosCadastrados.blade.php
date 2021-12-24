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
            <label class="form-label fw-bold">Nome completo</label>
            <input class="form-control" value="{{$cadastro->nome}}" disabled>
        </div>
        <div class="mb-4 row g-5 align-items-center justify-content-between">
            <div class="col-4">
                <i class="fas fa-id-card"></i>
                <label class="form-label fw-bold">CPF</label>
                <input value="{{$cadastro->cpf}}" class="form-control" disabled>
            </div>
            <div class="col-4">
                <i class="fas fa-fingerprint"></i>
                <label class="form-label fw-bold">RG</label>
                <input class="form-control" value="{{$cadastro->rg}}" disabled>
            </div>
            <div class="col-4">
                <i class="far fa-calendar-alt"></i>
                <label class="form-label fw-bold">Data de nascimento</label>
                <input class="form-control" value="{{$cadastro->nasc}}" disabled>
            </div>
        </div>
        <div class="mb-4">
            <i class="fas fa-female"></i>
            <label class="form-label fw-bold">Nome da mãe</label>
            <input class="form-control" value="{{$cadastro->mae}}" disabled>
        </div>
        <div class="">
            <i class="fas fa-male"></i>
            <label class="form-label fw-bold">Nome do pai</label>
            <input class="form-control" value="{{$cadastro->pai}}" disabled>
        </div>
    </div>
    <div class="card p-4 mb-3">
        <p class="font-monospace fs-4 fw-bold text-center">Contatos<hr class="mb-4"></p>
        <div class="row align-items-center mb-4">
            <div class="col-4">
                <i class="fas fa-at"></i>
                <label class="form-label fw-bold">Email</label>
                <input class="form-control" value="{{$cadastro->email}}" disabled>
            </div>
            <div class="col-4">
                <i class="fas fa-mobile-alt"></i>
                <label class="form-label fw-bold">Telefone 1</label>
                <input class="form-control" value="{{$cadastro->tel1}}" disabled>
            </div>
            <div class="col-4">
                <i class="fas fa-phone"></i>
                <label class="form-label fw-bold">Telefone 2</label>
                <input class="form-control" value="{{$cadastro->tel2}}" disabled>
            </div>
        </div>
    </div>
    <div class="card p-4 mb-3">
        <p class="font-monospace fs-4 fw-bold text-center">Endereço<hr class="mb-4"></p>
        <div class="mb-4">
            <i class="fas fa-home"></i>
            <label class="form-label fw-bold">Logradouro</label>
            <input class="form-control" value="{{$cadastro->logr}}" disabled>
        </div>
        <div class="row mb-4 align-items-center">
            <div class="col-2">
                <i class="fas fa-sort-numeric-up"></i>
                <label class="form-label fw-bold">Número</label>
                <input class="form-control" value="{{$cadastro->num}}" disabled>
            </div>
            <div class="col-10">
                <i class="fas fa-map-marked-alt"></i>
                <label class="form-label fw-bold">Complemento</label>
                <input class="form-control" value="{{$cadastro->comp}}" disabled>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-3">
                <label class="form-label fw-bold">CEP</label>
                <input class="form-control" value="{{$cadastro->cep}}" disabled>
            </div>
            <div class="col-4">
                <label class="form-label fw-bold">UF</label>
                <input class="form-control" value="{{$cadastro->uf}}" disabled>
            </div>
            <div class="col-5">
                <i class="fas fa-flag"></i>
                <label class="form-label fw-bold">País</label>
                <input class="form-control" value="{{$cadastro->pais}}" disabled>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card w-25 p-3 mb-3">
            <a href="{{route('cadastros')}}" class="btn fw-bold btn-outline-danger">
                Voltar
            </a>
        </div>
    </div>
@endsection