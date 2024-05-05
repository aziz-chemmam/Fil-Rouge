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
    <div class="w-full">
        <div class="flex flex-row w-full">

            <div class="w-full h-fit mt-10 mr-10 flex  justify-end ">
                <button class="px-4 py-1.5 bg-orange-600 hover:bg-orange-700 text-white font-semibold rounded-md "
                    id="btn">Add Categorie</button>
            </div>

            <div id="form"
                class="absolute w-full h-full inset-0 bg-opacity-5 backdrop-filter backdrop-blur-sm flex justify-center items-center  scale-0 duration-300">
                <form action="/admin" method="POST" class="w-[700px] rounded-xl mx-auto bg-orange-700  ">
                    @csrf

                    <div class="flex p-4 justify-end">
                        <svg id="closeForm" class="w-6 h-6 text-white dark:text-white cursor-pointer" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m13 7-6 6m0-6 6 6m6-3a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>

                    </div>
                    <div class="flex justify-center">
                        <h1 class="text-white font-bold text-xl">Add Categorie</h1>
                    </div>

                    <div class="w-[90%] mx-auto flex flex-col items-center">
                        <input type="text" id="name" name="name" placeholder="Categorie Name"
                            class="block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500">
                        <textarea id="description" name="description" rows="4"
                            class="block w-full py-2.5 px-4 mb-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500"
                            placeholder="Write your description here..."></textarea>
                        <button
                            class="bg-white text-orange-700 border-[0.2rem] border-orange-700 hover:bg-orange-700 hover:text-white active:bg-black transition duration-300 ease-in-out rounded-xl px-8 py-3 ">
                            Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
        <div class="w-[70%] mx-auto my-24 ">
            <table id="table" class="w-full text-sm text-left rtl:text-right text-orange-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-orange-700  ">
                    <tr class="">
                        <th scope="col" class="px-6 py-3">
                            Nom
                        </th>
                        <th scope="col" class="px-6 py-3">
                            description
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorie as $categorieItem)
                        <tr class="border-b text-white bg-black ">
                            <td scope="row" class="px-6 py-4 font-medium">
                                {{ $categorieItem->name }}
                            </td>
                            <td class="px-6 py-4 text-white">
                                {{ $categorieItem->description }}
                            </td>
                            <td class="px-6 py-4 flex gap-5">
                                <a href="{{ route('editCategorie', $categorieItem->id)  }}" class="font-medium text-green-600 hover:underline">Edit</a>
                                <a href="{{ route('deleteCategorie', $categorieItem->id) }}" class="font-medium text-red-600 hover:underline">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<script src="{{ asset('javascript/categorieForm.js') }}"></script>
