@extends('inc.header')

<div class="flex flex-col items-center justify-center h-screen ">
    <form method="POST" action="{{ route('updateCategorie', ['id' => $categorie->id]) }}"
        class="mt-5 w-[50%] h-96 bg-orange-700 rounded-3xl mx-auto">
        @csrf
        @method('PUT')
        <div class="w-[80%] pt-16 mx-auto">
            <div class="text-white text-2xl uppercase font-bold flex justify-center">
                <h1>
                    Edit
                </h1>
            </div>
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-white">Nom</label>
                <input type="text" name="name" id="name" value="{{ $categorie->name }}"
                    class="block w-full py-2.5 px-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-sm font-medium text-white">Description</label>
                <textarea name="description" id="description" rows="4"
                    class="block w-full py-2.5 px-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500">{{ $categorie->description }}</textarea>
            </div>
            <div class="flex justify-center">
                <button type="submit"
                    class="bg-orange-600 hover:bg-orange-700 text-white font-semibold rounded-md px-4 py-2">Update</button>
            </div>
        </div>
    </form>
</div>
