@extends('master')

@section('conteudo')
<div class="container">
    <h1>{{ $book->name }}</h1>

    @php
    $currentChapter = null;
    @endphp

    @foreach($verses as $verse)
    @if ($currentChapter !== $verse->chapter)
    @php $currentChapter = $verse->chapter; @endphp
    <h2>Capítulo {{ $verse->chapter }}</h2>
    @endif

    <p><strong>{{ $verse->verse }}</strong> {{ $verse->text }}</p>
    @endforeach
</div>
@endsection