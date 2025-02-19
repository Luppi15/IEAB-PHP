@extends('master')

@section('conteudo')
<div class="container mx-auto p-4 lg:max-w-4xl">
    <h1 class="text-4xl lg:text-5xl font-bold mb-6">{{ $book->name }}</h1>

    @php
    $currentChapter = null;
    @endphp

    @foreach($verses as $verse)
    @if ($currentChapter !== $verse->chapter)
    @php $currentChapter = $verse->chapter; @endphp
    <h2 class="text-3xl lg:text-4xl font-semibold mt-8 mb-4">Capítulo {{ $verse->chapter }}</h2>
    @endif

    <p class="mb-4 text-justify text-base lg:text-lg"><strong class="text-lg lg:text-xl">{{ $verse->verse }}</strong> {{ $verse->text }}</p>
    @endforeach
</div>
@endsection