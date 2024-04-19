@extends('inc.header')
<div id="body" class=" h-screen flex">
    <nav class="bg-black h-[100vh] bg-black w-64 text-white flex p-8 flex-col justify-between items-center gap-16">
        <div class=" flex flex-col gap-24">
            <div class="logo text-2xl font-bold text-center h-16 flex items-center justify-center">
                <img src="{{ asset('image/logo.png') }}" class="w-24 h-24" alt="">
            </div>
            <div class="user flex items-center justify-center flex-col gap-10 border-b  ">
                <img class="w-[90px] rounded-full shadow-xl"
                    src="https://w7.pngwing.com/pngs/340/946/png-transparent-avatar-user-computer-icons-software-developer-avatar-child-face-heroes-thumbnail.png">
                <div class="flex flex-col items-center">
                    <span class="font-semibold text-lg text-emerald-700"></span>
                    <span class="text-slate-400 text-sm"></span>
                </div>
            </div>
            <ul class="space-y-4 flex flex-col w-full justify-between">
                <div class="w-full gap-5">
                    <li>
                        <a class="block px-14 py-2.5  flex justify-center font-semibold  hover:bg-orange-700  rounded-lg"
                            href="#">Dashboard</a>
                    </li>
                    <li>
                        <a class="block px-14 py-2.5 flex justify-center font-semibold  hover:bg-orange-700  rounded-lg"
                            href="#">Reservation</a>
                    </li>
                </div>
            </ul>
        </div>
        <div>
            <button id="logout"
                class="block px-24 py-2.5  flex flex-end justify-center font-semibold  hover:bg-red-700  rounded-lg">
                <a href="#">Logout</a>
            </button>
        </div>

    </nav>
    <form method="post">
        <input type="texterea" name="description">
        <input type="file" name="image" id="image">
    </form>

</div>
