@extends('layout')

@section('titulo')
    Cadastrar Dados
@endsection

@section('cabecalho')
    Cadastro
@endsection

@section('conteudo')
<form action="{{route('cadastrar')}}" method="get"></form>
    <div class="card p-4 mb-3">
        <p class="font-monospace fs-4 fw-bold text-center">Informações Pessoais<hr class="mb-4"></p>
        <div class="mb-4">
            <i class="far fa-user"></i>
            <label for="nome" class="form-label">Nome completo <abbr title="Este campo é obrigatório."> *</abbr></label>
            <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite o nome completo aqui.">
        </div>
        <div class="mb-4 row g-5 align-items-center justify-content-between">
            <div class="col-4">
                <i class="fas fa-id-card"></i>
                <label for="cpf" class="form-label">CPF <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input type="number" name="cpf" id="cpf" class="form-control" placeholder="Digite somente números.">
            </div>
            <div class="col-4">
                <i class="fas fa-fingerprint"></i>
                <label for="rg" class="form-label">RG</label>
                <input type="number" name="rg" id="rg" class="form-control" placeholder="Digite somente números.">
            </div>
            <div class="col-4">
                <i class="far fa-calendar-alt"></i>
                <label class="form-label" for="nasc">Data de nascimento <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input type="date" name="nasc" id="nasc" class="form-control">
            </div>
        </div>
        <div class="mb-4">
            <i class="fas fa-female"></i>
            <label for="mae" class="form-label">Nome da mãe</label>
            <input type="text" name="mae" id="mae" class="form-control" placeholder="Digite o nome completo aqui.">
        </div>
        <div class="">
            <i class="fas fa-male"></i>
            <label for="pai" class="form-label">Nome do pai</label>
            <input type="text" name="pai" id="pai" class="form-control" placeholder="Digite o nome completo aqui.">
        </div>
    </div>
    <div class="card p-4 mb-4">
        <p class="font-monospace fs-4 fw-bold text-center">Contatos<hr class="mb-4"></p>
        <div class="row align-items-center mb-4">
            <div class="col-4">
                <i class="fas fa-at"></i>
                <label for="email" class="form-label">Email <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input type="email" name="email" id="email" class="form-control" placeholder="aloha@mail.ok">
            </div>
            <div class="col-4">
                <i class="fas fa-mobile-alt"></i>
                <label for="tel1" class="form-label">Telefone 1 <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input type="number" name="tel1" id="tel1" class="form-control" placeholder="Digite somente números.">
            </div>
            <div class="col-4">
                <i class="fas fa-phone"></i>
                <label for="tel2" class="form-label">Telefone 2</label>
                <input type="number" name="tel2" id="tel2" class="form-control" placeholder="Digite somente números.">
            </div>
        </div>
    </div>
    <div class="card p-4">
        <p class="font-monospace fs-4 fw-bold text-center">Endereço<hr class="mb-4"></p>
        <div class="mb-4">
            <i class="fas fa-home"></i>
            <label for="logr" class="form-label">Logradouro <abbr title="Este campo é obrigatório.">* </abbr></label>
            <input type="text" name="logr" id="logr" class="form-control" placeholder="Digite a rua, avenida, travessa...">
        </div>
    </div>
@endsection