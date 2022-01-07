@extends('layout')

@section('titulo')
    Novo Cadastro
@endsection

@section('cabecalho')
    Novo Cadastro
@endsection

@section('conteudo')

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    </div>
@endif

<form method="post">
    @csrf
    <div class="form-group">
        <div class="card p-4 mb-3">
            <p class="font-monospace fs-4 fw-bold text-center">Informações Pessoais<hr class="mb-4"></p>
            <div class="mb-4">
                <i class="far fa-user"></i>
                <label for="nome" class="form-label fw-bold">Nome completo <abbr title="Este campo é obrigatório."> *</abbr></label>
                <input type="text"  name="nome" id="nome" class="form-control" placeholder="Digite o nome completo aqui." 
                onchange="validarNomeCompleto(this.value, document.querySelector('#nome'))">
            </div>
            <div class="mb-4 row g-5 align-items-center justify-content-between">
                <div class="col-4">
                    <i class="fas fa-id-card"></i>
                    <label for="cpf" class="form-label fw-bold">CPF <abbr title="Este campo é obrigatório."> *</abbr></label>
                    <input type="number" name="cpf" id="cpf" class="form-control" placeholder="Digite somente números." 
                    onchange="validarCPF(this.value, document.querySelector('#cpf'))">
                </div>
                <div class="col-4">
                    <i class="fas fa-fingerprint"></i>
                    <label for="rg" class="form-label fw-bold">RG</label>
                    <input type="number" name="rg" id="rg" class="form-control" placeholder="Digite somente números." 
                    onchange="validarRG(this.value, document.querySelector('#rg'))">
                </div>
                <div class="col-4">
                    <i class="far fa-calendar-alt"></i>
                    <label class="form-label fw-bold" for="nasc">Data de nascimento <abbr title="Este campo é obrigatório."> *</abbr></label>
                    <input type="date" name="nasc" id="nasc" class="form-control">
                </div>
            </div>
            <div class="mb-4">
                <i class="fas fa-female"></i>
                <label class="form-label fw-bold">Nome da mãe</label>
                <select class="form-select form-select-lg" name="mae" id="mae">
                    @foreach($noms as $nom)
                        <option value="{{$nom}}">{{$nom}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <i class="fas fa-male"></i>
                <label class="form-label fw-bold">Nome do pai</label>
                <select class="form-select form-select-lg" name="pai" id="pai">
                    @foreach($noms as $nom)
                        <option value="{{$nom}}">{{$nom}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="card p-4 mb-3">
            <p class="font-monospace fs-4 fw-bold text-center">Contatos<hr class="mb-4"></p>
            <div class="row align-items-center mb-4">
                <div class="col-4">
                    <i class="fas fa-at"></i>
                    <label for="email" class="form-label fw-bold">Email <abbr title="Este campo é obrigatório."> *</abbr></label>
                    <input type="email" name="email" id="email" class="form-control" placeholder="aloha@mail.ok"
                     onchange="validarEmail(this.value, document.querySelector('#email'))">
                </div>
                <div class="col-4">
                    <i class="fas fa-mobile-alt"></i>
                    <label for="tel1" class="form-label fw-bold">Telefone 1 <abbr title="Este campo é obrigatório."> *</abbr></label>
                    <input type="number" name="tel1" id="tel1" class="form-control" placeholder="Digite somente números." 
                    onchange="validarTelefone(this.value, document.querySelector('#tel1'))">
                </div>
                <div class="col-4">
                    <i class="fas fa-phone"></i>
                    <label for="tel2" class="form-label fw-bold">Telefone 2</label>
                    <input type="number" name="tel2" id="tel2" class="form-control" placeholder="Digite somente números." 
                    onchange="validarTelefone(this.value, document.querySelector('#tel2'))">
                </div>
            </div>
        </div>
        <div class="card p-4 mb-3">
            <p class="font-monospace fs-4 fw-bold text-center">Endereço<hr class="mb-4"></p>
            <div class="mb-4">
                <i class="fas fa-home"></i>
                <label for="logr" class="form-label fw-bold">Logradouro <abbr title="Este campo é obrigatório.">* </abbr></label>
                <input type="text" name="logr" id="logr" class="form-control" placeholder="Digite a rua, avenida, travessa..." 
                onchange="validarLOGR(this.value, document.querySelector('#logr'))">
            </div>
            <div class="row mb-4 align-items-center">
                <div class="col-2">
                    <i class="fas fa-sort-numeric-up"></i>
                    <label for="num" class="form-label fw-bold">Número <abbr title="Este campo é obrigatório."> *</abbr></label>
                    <input type="text" name="num" id="num" class="form-control" placeholder="Digite o número do endereço." 
                    onchange="validarNumero(this.value, document.querySelector('#num'))">
                </div>
                <div class="col-10">
                    <i class="fas fa-map-marked-alt"></i>
                    <label for="comp" class="form-label fw-bold">Complemento</label>
                    <input type="text" name="comp" id="comp" class="form-control" placeholder="Digite informações complementares." 
                    onchange="validarComp(this.value, document.querySelector('#comp'))">
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-3">
                    <label for="cep" class="form-label fw-bold">CEP <abbr title="Este campo é obrigatório."> *</abbr></label>
                    <input type="number" name="cep" id="cep" class="form-control" placeholder="Digite somente números."
                    onchange="validarCEP(this.value, document.querySelector('#cep'))">
                </div>
                <div class="col-3">
                    <i class="fas fa-city"></i>
                    <label class="form-label fw-bold" for="cidade">Cidade <abbr title="Este campo é obrigatório"> *</abbr></label>
                    <input type="text" name="cidade" id="cidade" class="form-control" placeholder="Digite o nome da cidade." 
                    onchange="validarCidade(this.value, document.querySelector('#cidade'))">
                </div>
                <div class="col-3">
                    <label for="uf" class="form-label fw-bold">UF <abbr title="Este campo é obrigatório."> *</abbr></label>
                    <input type="text" name="uf" id="uf" class="form-control" placeholder="Digite somente as iniciais." 
                    onchange="validarUF(this.value, document.querySelector('#uf'))">
                </div>
                <div class="col-3">
                    <i class="fas fa-flag"></i>
                    <label for="pais" class="form-label fw-bold">País <abbr title="Este campo é obrigatório."> *</abbr></label>
                    <input type="text" name="pais" id="pais" class="form-control" placeholder="Digite o país." 
                    onchange="validarPais(this.value, document.querySelector('#pais'))">
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="card w-25 p-3 mb-3">
                <button class="btn fw-bold btn-outline-success">Cadastrar</button>
            </div>
        </div>
    </div>
</form>

<script>
    document.getElementsByTagName('form')[0].addEventListener('submit', function(event) {

        if (!input.validity.valid) {
            alert('Há dados inválidos no formulário.')
            event.preventDefault();
        }
    });

    function validarNomeCompleto(valor, elemento) {
        
        const regex = /^[\w\W]+$/i;

        const validade = valor.split(/ +/).every(parte => regex.test(parte));

        validade ? elemento.setCustomValidity('') : elemento.setCustomValidity('Campo inválido');
    }

    function validarCPF(valor, elemento) {

        const regex = /^\d{11}$/i;

        const validade = regex.test(valor);

        validade ? elemento.setCustomValidity('') : elemento.setCustomValidity('Campo inválido');
    }

    function validarRG(valor, elemento) {
        
        const regex = /^\d{9}$/i;

        const validade = regex.test(valor);

        validade ? elemento.setCustomValidity('') : elemento.setCustomValidity('Campo inválido'); 
    }

    function validarEmail(valor, elemento) {
               
        const regex = /^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/i;

        const validade = regex.test(valor);

        validade ? elemento.setCustomValidity('') : elemento.setCustomValidity('Campo inválido');
    }

    function validarTelefone(valor, elemento) {

        const regex = /^\d{11}$/i;

        const validade = regex.test(valor);

        validade ? elemento.setCustomValidity('') : elemento.setCustomValidity('Campo inválido');
    }

    function validarLOGR(valor, elemento) {

        const regex = /^[\w\W]+$/i;
        
        const validade = valor.split(/ +/).every(parte => regex.test(parte));
        
        validade ? elemento.setCustomValidity('') : elemento.setCustomValidity('Campo inválido');
    }

    function validarNumero(valor, elemento) {

        const regex = /^\d{1,}$/i;

        const validade = regex.test(valor);

        validade ? elemento.setCustomValidity('') : elemento.setCustomValidity('Campo inválido');
    }

    function validarCEP(valor, elemento) {
        
        const regex = /^\d{8}$/i;

        const validade = regex.test(valor);

        validade ? elemento.setCustomValidity('') : elemento.setCustomValidity('Campo inválido');
    }

    function validarComp(valor, elemento) {

        const regex = /^[\w\W]+$/i;

        const validade = valor.split(/ +/).every(parte => regex.test(parte));

        validade ? elemento.setCustomValidity('') : elemento.setCustomValidity('Campo inválido');
    }

    function validarCidade(valor, elemento) {

        const regex = /^[\w\W]+$/i;

        const validade = valor.split(/ +/).every(parte => regex.test(parte));

        validade ? elemento.setCustomValidity('') : elemento.setCustomValidity('Campo inválido'); 
    }

    function validarUF(valor, elemento) {

        const regex = /^[A-Za-z]{2}$/i;

        const validade = regex.test(valor);

        validade ? elemento.setCustomValidity('') : elemento.setCustomValidity('Campo inválido');
    }
    
    function validarPais(valor, elemento) {

        const regex = /^[\w\W]+$/i;

        const validade = valor.split(/ +/).every(parte => regex.test(parte));

        validade ? elemento.setCustomValidity('') : elemento.setCustomValidity('Campo inválido')
    }
</script>
@endsection