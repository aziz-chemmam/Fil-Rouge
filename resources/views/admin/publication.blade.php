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
                    <span class="text-slate-600 pb-5 text-sm uppercase">{{ auth()->user()->role }}</span>
                </div>
            </div>
            <ul class="space-y-4 flex flex-col w-full justify-between">
                <div class="w-full gap-5">
                    <li>
                        <a class="block px-24 py-2.5  flex justify-center font-semibold  hover:bg-orange-700  rounded-lg"
                            href="{{ route('getCategorie') }}">Acceille</a>
                    </li>
                    <li>
                        <a class="block px-24 py-2.5 flex justify-center font-semibold  hover:bg-orange-700  rounded-lg"
                            href="{{ route('users') }}">Users</a>
                    </li>
                    <li>
                        <a class="block px-24 py-2.5 flex justify-center font-semibold  hover:bg-orange-700  rounded-lg"
                            href="{{ route('getPublication') }}">Publication</a>
                    </li>
                </div>
            </ul>
        </div>
        <div>
            <button id="logout"
                class="block px-24 py-2.5  flex flex-end justify-center font-semibold  hover:bg-red-700  rounded-lg">
                <a href="{{ route('adminLogout') }}">Logout</a>
            </button>
        </div>
    </nav>
    <div class="w-[80%] h-[70%] my-auto mx-auto overflow-auto">
        <table class="w-full text-sm text-left text-orange-500  ">
            <thead class="text-xs text-white uppercase bg-orange-700 sticky top-0">
                <tr>
                    <th class="px-6 py-3">ID</th>
                    <th class="px-6 py-3">Image</th>
                    <th class="px-6 py-3">Localisation</th>
                    <th class="px-6 py-3">Description</th>
                    <th class="px-6 py-3">Category name</th>
                    <th class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publication as $publicationItem)
                    <tr class="border-b text-white bg-black">
                        <td class="px-6 py-4 font-medium">{{ $publicationItem->id }}</td>
                        <td class="px-6 py-4 font-medium">
                            <img class="w-14 h-20 object-cover rounded"src="{{ $publicationItem->image }}" alt="">
                        </td>
                        <td class="px-6 py-4">{{ $publicationItem->localisation }}</td>
                        <td class="px-6 py-4">{{ $publicationItem->description }}</td>
                        <td class="px-6 py-4">{{ $publicationItem->categorie_id }}</td>
                        <td class="px-6 py-4 flex gap-5">
                            <a href="{{ route('adminDelete', $publicationItem->id) }}"
                                class="font-medium text-red-600 px-6 py-4 hover:underline">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>



</div>
