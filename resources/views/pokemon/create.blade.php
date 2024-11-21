    @extends('layouts.base')

    @section('conteudo')
    <div class="flex items-center justify-center min-h-screen bg-[url('/images/wallpaperpokebolas.webp')] bg-cover bg-center">
    <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" action="{{ url('pokemon') }}" method="POST">
    @csrf
        <div class="border-b border-gray-900/10 pb-12 mb-4">
         <h2 class="text-base/7 font-semibold text-gray-900">Cadastro de Pokemon</h2>
        </div>
        
        <div class="sm:col-span-4">
          <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
          <div class="mt-2">
            <input id="name" name="name" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="type" class="block text-sm/6 font-medium text-gray-900">Type</label>
          <div class="mt-2">
            <input id="type" name="type" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="strength" class="block text-sm/6 font-medium text-gray-900">Strength</label>
          <div class="mt-2">
            <input id="strength" name="strength" type="text" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm/6">
          </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <button type="button" class="text-sm/6 font-semibold text-gray-900">Cancel</button>
            <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Create</button>
        </div>
        </form>
    </div>
    
    @endsection