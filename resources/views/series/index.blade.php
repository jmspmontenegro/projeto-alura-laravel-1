@extends('layout')

@section('cabecalho')
Séries
@endsection

@section('conteudo')
@if(!empty($mensagem))
<div class="alert alert-success">
    {{$mensagem}}
</div>
@endif
<a href="{{route('serie_form_criar')}}" class="btn btn-dark mb-2">Adicionar Série</a>
<ul class="list-group">
    @foreach($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
        <b>{{$serie->id}}</b> - {{$serie->nome}}
        <form method="post" action="/series/{{$serie->id}}" onsubmit="return confirm('Tem certeza que deseja remover {{ addslashes( $serie->nome )}}?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-sm btn-danger">
                <i class="far fa-trash-alt"></i>
            </button>
        </form> 
        </li>
    @endforeach
</ul>
@endsection