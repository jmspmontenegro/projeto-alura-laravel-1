@extends('layout')

@section('cabecalho')
Adicionar série
@endsection

@section('conteudo')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="post">
    <div class="input-group">
    @csrf
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" name="nome">
    </div>
    <br>
    <button class="btn btn-primary">Adicionar</button>
</form>
@endsection