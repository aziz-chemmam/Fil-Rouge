@extends('inc.header')
<div id="body" class=" h-screen flex">
    <nav class="h-[100vh]  w-64 text-white flex p-8 flex-col justify-between items-center gap-16">
        <div class=" flex flex-col gap-24">
            <div class="logo text-2xl font-bold text-center h-16 flex items-center justify-center">
                <img src="{{ asset('image/logo.png') }}" class="w-24 h-24" alt="">
            </div>
            <div class="user flex items-center justify-center flex-col border-b  ">
                <img class="w-[90px] rounded-full shadow-xl"
                    src="https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png">
                <div class="flex flex-col items-center">
                    <span class="font-semibold text-lg text-orange-700 uppercase">{{ auth()->user()->lname }}</span>
                    <span class="text-slate-600 pb-5 text-sm">{{ auth()->user()->role }}</span>
                </div>
            </div>
            <ul class="space-y-4 flex flex-col w-full justify-between">
                <div class="w-full gap-5">
                    <li>
                        <a class="block px-24 py-2.5 flex justify-center font-semibold  hover:bg-orange-700  rounded-lg"
                            href="#">Acceille</a>
                    </li>
                </div>
            </ul>
        </div>
        <div>
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                class="block px-24 py-2.5  flex flex-end justify-center font-semibold  hover:bg-red-700  rounded-lg">Logout</button>
            </form>
        </div>
    </nav>
    <div class="w-full ">
        <div class="flex w-full justify-around py-32 text-center gap-10">
            <div class="w-full max-h-96 mx-auto overflow-auto">
                <table class="w-full text-sm text-left text-orange-500">
                    <thead class="text-xs text-white uppercase bg-orange-700 sticky top-0">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Image
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Localisation
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Description
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Category name
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($publication as $publicationItem)
                            <tr class="border-b text-white bg-black">
                                <td scope="row" class="px-6 py-4 font-medium">
                                    <img src="{{ $publicationItem->image }}" class="w-7 h-7" alt="">
                                </td>
                                <td class="px-6 py-4">
                                    {{ $publicationItem->localisation }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $publicationItem->description }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $publicationItem->category->name }}
                                </td>
                                <td class="px-6 py-4 flex gap-5">
                                    <a href="{{ route('editPublication', $publicationItem->id) }}" class="font-medium text-green-600 hover:underline">Edit</a>
                                    <a href="{{ route('deletePublication', $publicationItem->id) }}" class="font-medium text-red-600 hover:underline">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            
            <div class="w-full">
                <form method="POST" action="{{ route('createPublication') }}"
                    class="bg-orange-700 p-6 rounded-lg shadow-md" enctype="multipart/form-data">
                    @csrf
                    <label for="file" class="block mb-2 text-sm font-medium text-white">Categories</label>
                  <select id="underline_select" name="categorie_id"
                  class="block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500">
                  <option selected disabled>Choix de Categorie</option>
                  @foreach ($categorie as $categorieItem )
                  <option value="{{ $categorieItem->id }}">{{ $categorieItem->name }}</option>
                  @endforeach
              </select>
                  

                    <label for="file" class="block mb-2 text-sm font-medium text-white">Upload file</label>
                    <input type="file" id="file" name="image"
                        class="block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500">

                    <label for="localisation" class="block mb-2 text-sm font-medium text-white">Localisation</label>
                    <input type="text" id="localisation" name="localisation" placeholder="ville,paye"
                        class="block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500">

                    <label for="message" class="block mb-2 text-sm font-medium text-white">Ajouter une
                        description</label>
                    <textarea id="message" name="description" rows="4"
                        class="block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500"
                        placeholder="Write your thoughts here..."></textarea>
                    <button type="submit"
                        class="w-full py-2.5 px-4 bg-orange-600 hover:bg-orange-700 text-white font-semibold rounded-md focus:outline-none focus:ring-2 focus:ring-orange-500 focus:ring-opacity-50">Submit</button>
                </form>

            </div>
        </div>
    </div>
   
</div>
