@extends('layout')

@section('titulo')
    Lista de Cadastros
@endsection

@section('cabecalho')
    Lista de Cadastros
@endsection

@section('conteudo')
    @if(!empty($mensagemNovoCadastro))
        <div class="alert alert-success p-4">
            {{ $mensagemNovoCadastro }}
        </div>
    @endif

    @if(!empty($mensagemRemocaoCadastro))
        <div class="alert alert-danger p-4">
            {{ $mensagemRemocaoCadastro}}
        </div>
    @endif

    <div class="card mb-3 p-4">
        <a href="{{route('create')}}" class="btn btn-sm btn-outline-success align-self-start mb-3 shadow">
            <i class="fas fa-plus"></i>
        </a>
        <ul class="list-group">
            @foreach ($cadastros as $cadastro)
                <li class="list-group-item border rounded round-3 p-4 mb-3 shadow">
                    <div class="d-flex align-items-center fs-5 justify-content-between">
                        <a href="/cadastro/{{$cadastro->id}}" class="text-dark text-decoration-none">{{ $cadastro -> nome }}</a>
                        <form action="/lista_cadastrados/remover_cadastro/{{$cadastro->id}}" method="post" 
                        onsubmit="return confirm('Remover o cadastro de {{$cadastro->nome}}?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-outline-danger">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>  
                </li>
            @endforeach
        </ul>
    </div>
@endsection