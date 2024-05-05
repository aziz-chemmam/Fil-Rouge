@extends('inc.header')

<div class="flex justify-center h-full">
    <div class="h-screen w-1/2 bg-black flex items-center">
        <div class="mx-auto w-2/3 flex flex-col justify-center text-white xl:w-1/2">
            <div class="flex flex-col gap-12 ">
                <p class="text-[2.5rem] font-bold ml-[11rem] text-orange-700 uppercase">modifier</p>
            </div>
            <div class="mt-10">
                <form method="POST" action="{{ route('updateUser', ['id' => $user->id]) }}" class="mx-auto">
                    @csrf
                    @method('PUT')
                    <div class="flex gap-28">
                        <div>
                            <label class="mb-2.5 block text-orange-700 font-extrabold" for="fname">PRENOM</label>
                            <input name="fname" type="text" id="fname" value="{{ $user->fname }}"
                                class="inline-block w-full rounded-xl bg-white p-2.5 leading-none text-black" />
                        </div>
                        <div>
                            <label class="mb-2.5 block text-orange-700 font-extrabold" for="lname">NOM</label>
                            <input name="lname" type="text" id="lname" value="{{ $user->lname }}"
                                class="inline-block w-full rounded-xl bg-white p-2.5 leading-none text-black" />
                        </div>
                    </div>
                    <div>
                        <label class="mb-2.5 block text-orange-700 font-extrabold" for="email">Email</label>
                        <input name="email" type="email" id="email" value="{{ $user->email }}"
                            class="inline-block w-full rounded-xl bg-white p-2.5 leading-none text-black" />
                    </div>
                    <div class="mt-4">
                        <select name="role"
                            class="inline-block w-full rounded-xl bg-white p-2.5 leading-none text-black">
                            <option class="bg-orange-700 text-white" value="admin" {{ $user->role  }}>Admin</option>
                            <option class="bg-orange-700 text-white" value="user" {{ $user->role }}>User</option>
                            <option class="bg-orange-700 text-white" value="photographer" {{ $user->role }}>Photographer</option>
                        </select>
                    </div>
                    <button type="submit" class="mt-4 bg-orange-700 text-white rounded-xl p-2.5">Update</button>
                </form>
            </div>
        </div>
    </div>
</div>
