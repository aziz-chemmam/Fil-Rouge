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
                            href="{{ route('users') }}">Publication</a>
                    </li>
                </div>
            </ul>
        </div>
        <div>
            <button id="logout"
                class="block px-24 py-2.5  flex flex-end justify-center font-semibold  hover:bg-red-700  rounded-lg">
                <a href="{{ route('logout') }}">Logout</a>
            </button>
        </div>
    </nav>
    <div class="w-full">
        {{-- stat card start --}}
        <div class="w-full">
            <div class="p-4 sm:p-6 space-y-4 sm:space-y-6">

                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-6">

                    <div
                        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                        <div class="p-4 md:p-5">
                            <div class="flex items-center gap-x-2">
                                <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                    Total users
                                </p>
                                <div class="hs-tooltip">
                                    <div class="hs-tooltip-toggle">
                                        <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-neutral-500"
                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <circle cx="12" cy="12" r="10" />
                                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3" />
                                            <path d="M12 17h.01" />
                                        </svg>
                                        <span
                                            class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-neutral-700"
                                            role="tooltip">
                                            The number of daily users
                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                    72,540
                                </h3>
                                <span class="flex items-center gap-x-1 text-green-600">
                                    <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                        <polyline points="16 7 22 7 22 13" />
                                    </svg>
                                    <span class="inline-block text-sm">
                                        1.7%
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                        <div class="p-4 md:p-5">
                            <div class="flex items-center gap-x-2">
                                <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                    Sessions
                                </p>
                            </div>

                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                    29.4%
                                </h3>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                        <div class="p-4 md:p-5">
                            <div class="flex items-center gap-x-2">
                                <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                    Avg. Click Rate
                                </p>
                            </div>

                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                    56.8%
                                </h3>
                                <span class="flex items-center gap-x-1 text-red-600">
                                    <svg class="inline-block size-4 self-center" xmlns="http://www.w3.org/2000/svg"
                                        width="24" height="24" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round">
                                        <polyline points="22 17 13.5 8.5 8.5 13.5 2 7" />
                                        <polyline points="16 17 22 17 22 11" />
                                    </svg>
                                    <span class="inline-block text-sm">
                                        1.7%
                                    </span>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div
                        class="flex flex-col bg-white border shadow-sm rounded-xl dark:bg-neutral-800 dark:border-neutral-700">
                        <div class="p-4 md:p-5">
                            <div class="flex items-center gap-x-2">
                                <p class="text-xs uppercase tracking-wide text-gray-500 dark:text-neutral-500">
                                    Pageviews
                                </p>
                            </div>

                            <div class="mt-1 flex items-center gap-x-2">
                                <h3 class="text-xl sm:text-2xl font-medium text-gray-800 dark:text-neutral-200">
                                    92,913
                                </h3>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        {{-- stat card end  --}}

        {{-- users table  --}}
        <div class="w-[95%] mx-auto my-24 ">
            <table id="table" class="w-full text-sm text-left rtl:text-right text-orange-500 dark:text-gray-400">
                <thead class="text-xs text-white uppercase bg-orange-700  ">
                    <tr class="">
                        <th scope="col" class="px-6 py-3">
                            Id
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nom
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Email
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Role
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Date De Creation
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $user)
                        <tr class="border-b text-white bg-black ">
                            <th scope="row" class="px-6 py-4 font-medium">
                                {{ $user->id }} 
                            </th>
                            <th scope="row" class="px-6 py-4 font-medium">
                                {{ $user->fname }} {{ $user->lname }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->email }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->role }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $user->created_at }}
                            </td>
                            <td class="px-6 py-4 flex gap-5">
                                <a href="{{ route('editUser', $user->id) }}"
                                    class="font-medium text-green-600 hover:underline">Edit</a>
                                <a href="{{ route('deleteUser', $user->id) }}" class="font-medium text-red-600 hover:underline">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- users table end  --}}

</div>
