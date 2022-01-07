@extends('layout')

@section('titulo')
    Pais de {{$cadastro -> nome}}
@endsection

@section('cabecalho')
    Pais de {{$cadastro -> nome}}
@endsection

@section('conteudo')
<div class="card p-4 mb-3">
    <ul class="list-group">
            <li class="list-item"> 
                <b>Id da mãe:</b> {{$paisId[0] -> pai_mae}}
            </li>
            <li class="list-item">
                <b>Id do pai</b>: {{$paisId[1] -> pai_mae}}
            </li>
    </ul>
</div>
@endsection