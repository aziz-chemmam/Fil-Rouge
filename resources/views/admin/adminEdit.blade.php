@extends('inc.header')

<div class="flex justify-center h-full">
    <div class="h-screen w-[100%] bg-black flex items-center">
        <div class="mx-auto w-2/3 flex flex-col justify-center text-white ">
            <div class="flex items-center flex-col gap-12">
                <p class="text-[2.5rem] font-bold  text-orange-700 uppercase">modifier</p>
            </div>
            <div class="mt-10 ">
                <form method="POST" action="{{ route('updateUser', ['id' => $user->id]) }}" class="mx-auto w-[50%] h-[450px] bg-orange-700 rounded-3xl">
                    @csrf
                    @method('PUT')
                    <div class="w-[80%] pt-16 mx-auto">
                        <div class="mb-4">
                            <label for="fname" class="block text-sm font-medium text-white">PRENOM</label>
                            <input name="fname" type="text" id="fname" value="{{ $user->fname }}"
                                class="block w-full py-2.5 px-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500" />
                        </div>
                        <div class="mb-4">
                            <label for="lname" class="block text-sm font-medium text-white">NOM</label>
                            <input name="lname" type="text" id="lname" value="{{ $user->lname }}"
                                class="block w-full py-2.5 px-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500" />
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-white">Email</label>
                            <input name="email" type="email" id="email" value="{{ $user->email }}"
                                class="block w-full py-2.5 px-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500" />
                        </div>
                        <div class="mb-4">
                            <select name="role"
                                class="block w-full py-2.5 px-4 leading-tight text-gray-700 bg-white border border-gray-400 rounded-md focus:outline-none focus:bg-white focus:border-gray-500">
                                <option class="bg-orange-700 text-white" value="admin" {{ $user->role }}>Admin</option>
                                <option class="bg-orange-700 text-white" value="user" {{ $user->role }}>User</option>
                                <option class="bg-orange-700 text-white" value="photographer" {{ $user->role }}>Photographer</option>
                            </select>
                        </div>
                        <div class="flex justify-center">
                            <button type="submit"
                                class="bg-orange-600 hover:bg-orange-700 text-white font-semibold rounded-md px-4 py-2">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

