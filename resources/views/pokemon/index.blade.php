@extends('layouts.base')

@section('conteudo')
<div class="min-h-screen bg-[url('/images/wallpaperpokebolas.webp')] bg-cover bg-center">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 p-6">
@foreach($pokemon as $pokemon)
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ url('pokemon/'.$pokemon->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <div class="p-4">
    <h3>{{ $pokemon->name }}</h3>
        <p>{{ $pokemon->type }}</p>
        <p>{{ $pokemon->strength }}</p>
        <a href="{{ url('pokemon/'.$pokemon->id.'/edit') }}">Edit</a>
        <div class="rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
        <button type="submit">Delete</button>
        </div>
    </div>

    
    </form>
        
@endforeach
    </div>
</div>
@endsection


