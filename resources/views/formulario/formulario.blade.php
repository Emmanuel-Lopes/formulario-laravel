@extends('layout')

@section('titulo')
    Cadastrar Dados
@endsection

@section('cabecalho')
    Cadastro
@endsection

@section('conteudo')
<form action="{{route('cadastrar')}}" method="get">
    @error('nome','cpf','rg','nasc','mae','pai','email','tel1','tel2','logr','num','comp','cep','uf','pais')
        <div class="alert alert-danger">
            {{'message'}}
        </div>
    <div class="card p-4 mb-3">
        <p class="font-monospace fs-4 fw-bold text-center">Informações Pessoais<hr class="mb-4"></p>
        <div class="mb-4">
            <i class="far fa-user"></i>
            <label for="nome" class="form-label fw-bold">Nome completo <abbr title="Este campo é obrigatório."> *</abbr></label>
            <input type="text" required name="nome" id="nome" class="form-control" placeholder="Digite o nome completo aqui.">
        </div>
        <div class="mb-4 row g-5 align-items-center justify-content-between">
            <div class="col-4">
                <i class="fas fa-id-card"></i>
                <label for="cpf" class="form-label fw-bold">CPF <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input required type="number" name="cpf" id="cpf" class="form-control" placeholder="Digite somente números.">
            </div>
            <div class="col-4">
                <i class="fas fa-fingerprint"></i>
                <label for="rg" class="form-label fw-bold">RG</label>
                <input type="number" name="rg" id="rg" class="form-control" placeholder="Digite somente números.">
            </div>
            <div class="col-4">
                <i class="far fa-calendar-alt"></i>
                <label class="form-label fw-bold" for="nasc">Data de nascimento <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input required type="date" name="nasc" id="nasc" class="form-control">
            </div>
        </div>
        <div class="mb-4">
            <i class="fas fa-female"></i>
            <label for="mae" class="form-label fw-bold">Nome da mãe</label>
            <input type="text" name="mae" id="mae" class="form-control" placeholder="Digite o nome completo aqui.">
        </div>
        <div class="">
            <i class="fas fa-male"></i>
            <label for="pai" class="form-label fw-bold">Nome do pai</label>
            <input type="text" name="pai" id="pai" class="form-control" placeholder="Digite o nome completo aqui.">
        </div>
    </div>
    <div class="card p-4 mb-3">
        <p class="font-monospace fs-4 fw-bold text-center">Contatos<hr class="mb-4"></p>
        <div class="row align-items-center mb-4">
            <div class="col-4">
                <i class="fas fa-at"></i>
                <label for="email" class="form-label fw-bold">Email <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input type="email" name="email" required id="email" class="form-control" placeholder="aloha@mail.ok">
            </div>
            <div class="col-4">
                <i class="fas fa-mobile-alt"></i>
                <label for="tel1" class="form-label fw-bold">Telefone 1 <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input type="number" required name="tel1" id="tel1" class="form-control" placeholder="Digite somente números.">
            </div>
            <div class="col-4">
                <i class="fas fa-phone"></i>
                <label for="tel2" class="form-label fw-bold">Telefone 2</label>
                <input type="number" name="tel2" id="tel2" class="form-control" placeholder="Digite somente números.">
            </div>
        </div>
    </div>
    <div class="card p-4 mb-3">
        <p class="font-monospace fs-4 fw-bold text-center">Endereço<hr class="mb-4"></p>
        <div class="mb-4">
            <i class="fas fa-home"></i>
            <label for="logr" class="form-label fw-bold">Logradouro <abbr title="Este campo é obrigatório.">* </abbr></label>
            <input type="text" required name="logr" id="logr" class="form-control" placeholder="Digite a rua, avenida, travessa...">
        </div>
        <div class="row mb-4 align-items-center">
            <div class="col-3">
                <i class="fas fa-sort-numeric-up"></i>
                <label for="num" class="form-label fw-bold">Número <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input required type="text" name="num" id="num" class="form-control" placeholder="Digite o número do endereço.">
            </div>
            <div class="col-9">
                <i class="fas fa-map-marked-alt"></i>
                <label for="comp" class="form-label fw-bold">Complemento</label>
                <input type="text" name="comp" id="comp" class="form-control" placeholder="Digite informações complementares.">
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-3">
                <label for="cep" class="form-label fw-bold">CEP <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input required type="number" name="cep" id="cep" class="form-control" placeholder="Digite somente números.">
            </div>
            <div class="col-4">
                <label for="uf" class="form-label fw-bold">UF <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input required type="text" name="uf" id="uf" class="form-control" placeholder="Digite somente as iniciais.">
            </div>
            <div class="col-5">
                <i class="fas fa-flag"></i>
                <label for="pais" class="form-label fw-bold">País <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input required type="text" name="pais" id="pais" class="form-control" placeholder="Digite o país.">
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center">
        <div class="card w-25 p-3 mb-3">
            <button class="btn fw-bold btn-outline-success">Cadastrar</button>
        </div>
    </div>
</form>
<!-- <script>
    const form = document.getElementsByTagName('form')[0];

    form.addEventListener('submit', function (event){
        if(!form.validity.valid) {
            alert('Há dados inválidos no formulário.');
            event.preventDefault();
        } else {
            alert('Cadastro feito com sucesso!');
        }
    })

    function validarInputs() {
        let inputId = document.getElementById
    }
</script> -->
@endsection