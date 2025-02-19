@extends('master')

@section('conteudo')
<div class="flex flex-col items-center">
    <h1 class="text-3xl">Bíblia - Escolha um Livro</h1>

    <ul class="w-4/5 md:w-4/6 grid gap-4 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mx-4 my-4">
        @foreach($books as $book)
        <div class="h-[4em] w-full">
            <div onclick="redirecionar('{{ route('biblia.show', ['id' => $book->id]) }}')" class="cursor-pointer h-full w-full bg-stone-950 m-auto rounded-[0.5em] relative group p-2 z-0 overflow-hidden">
                <div class="h-[20px] w-full bg-stone-700 absolute right-[100%] top-1/3 z-[-1] group-hover:translate-x-full duration-500"></div>
                <div class="h-full w-[20px] bg-stone-700 absolute left-[70%] bottom-full group-hover:translate-y-full duration-500"></div>
                <h1 class="z-20 font-bold font-Poppin text-[1.4em] delay-100 duration-100">
                    {{ $book->name }}
                </h1>
            </div>
        </div>
        @endforeach
    </ul>
</div>
@endsection