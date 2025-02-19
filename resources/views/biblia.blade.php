@extends('master')

@section('conteudo')
<div class="container">
    <h1>Bíblia - Escolha um Livro</h1>
    <ul>
        @foreach($books as $book)
        <li><a href="{{ route('biblia.show', ['id' => $book->id]) }}">{{ $book->name }}</a></li>
        @endforeach
    </ul>
</div>
@endsection