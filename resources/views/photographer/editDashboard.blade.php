@extends('inc.header')
<div class="flex">
    <div>
        <img src="" alt="">
    </div>
    <div class="w-full">
        <form method="POST" action="{{ route('updatePublication', $publication->id) }}"
            class="bg-orange-700 p-6 rounded-lg shadow-md" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <select id="underline_select" name="categorie_id"
                class="block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500">
                <option selected disabled>Choix de Categorie</option>
                <option value="1">1</option>
            </select>
            <label for="file" class="block mb-2 text-sm font-medium text-white">Upload file</label>
            <input type="file" id="file" name="image" value="{{ $publication->image }}"
                class= "block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500">
            <label for="localisation" class="block mb-2 text-sm font-medium text-white">Localisation</label>
            <input type="text" id="localisation" name="localisation" placeholder="ville,paye"
                class="block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500">
            <label for="message" class="block mb-2 text-sm font-medium text-white">Ajouter une
                description</label>
            <textarea id="message" name="description" rows="4"
                class="block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500"
                placeholder="Write your thoughts here...">{{ $publication->description }}</textarea>

            <button type="submit"
                class="w-full py-2.5 px-4 bg-orange-600 hover:bg-orange-700 text-white font-semibold rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">Submit</button>
        </form>

    </div>
</div>
