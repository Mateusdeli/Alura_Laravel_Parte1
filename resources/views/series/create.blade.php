@extends('layout.app')

@section('header')
    <h1>Adicionar Série</h1>
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="POST">
        @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
        <button class="btn btn-primary" type="submit">Salvar</button>
    </form>
    <h3>{{ isset($nome) ? $nome : '' }}</h3>
@endsection