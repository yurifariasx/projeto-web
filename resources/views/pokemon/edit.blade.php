@extends('layouts.base')

@section('conteudo')
<div class="flex items-center justify-center min-h-screen h-14 bg-[url('/images/wallpaperpokebolas.webp')] bg-cover bg-center">
<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ url('pokemon/' . $pokemon->id) }}" method="POST">
    @method('PUT')
    @csrf
    <div class="border-b border-gray-900/10 pb-12 mb-4">
    <h2 class="text-base/7 font-semibold text-gray-900 text-center mt-4">Edit your Pokemon</h2>
    </div>
    <div>
    <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
    <input type="text" name="name" placeholder="Name" value="{{ $pokemon->name}}" required class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none">
    </div>
    
    <div>
    <label for="type" class="block text-sm/6 font-medium text-gray-900">Type</label>
    <input type="text" name="type" placeholder="Type" value="{{ $pokemon->type}}" required class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none">
    </div>
    
    <div>
    <label for="strength" class="block text-sm/6 font-medium text-gray-900">Strength</label>
    <input type="text" name="strength" placeholder="Strength" value="{{ $pokemon->strength}}" required class="w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-2 focus:ring-indigo-500 focus:outline-none">
    </div>
    
    <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Update pokemon</button>
        </div>
</form>
</div>

@endsection


