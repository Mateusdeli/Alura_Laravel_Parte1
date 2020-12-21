@extends('layout.app')

@section('header')
    <h1>Séries</h1>
@endsection

@section('content')

    @if (!empty($mensagem))
        <div class="alert alert-success">
            {{ $mensagem }}
        </div>
    @endif

    <a href="{{ route('series.create.form') }}" class="btn btn-dark mb-3">Adicionar</a>
    <ul class="list-group">
        @foreach($series as $serie)
                <li class="list-group-item d-flex justify-content-between align-items-center">{{ $serie->nome }} 
                    <form action="{{ route("series.destroy", ["id" => $serie->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm">Excluir</button>
                    </form>
                </li>
        @endforeach
    </ul>
@endsection
