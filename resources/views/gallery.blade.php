@extends('inc.header')
@include('inc.navBar')

<div class="relative flex justify-center">
    <div class="w-[30%] flex items-center">
        <input type="search"
            class="flex-auto rounded border border-solid border-neutral-200 bg-transparent px-3 py-[0.25rem] text-base font-normal text-surface text-white transition duration-200 "
            placeholder="Search......."  />
        <span
            class="flex items-center whitespace-nowrap px-3 py-[0.25rem] text-surface dark:border-neutral-400 dark:text-white [&>svg]:h-5 [&>svg]:w-5"
            id="button-addon2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </span>
    </div>
</div>


<div class="grid grid-cols-2 w-[85%] mx-auto mt-5 md:grid-cols-4 gap-4">
    @foreach ($publication as $publicationItem)
        <div>
            <img class="h-auto max-w-full object-cover rounded-lg" src="{{ $publicationItem->image }}" alt="">
            <p
                class=" text-white p-1 flex justify-center">
                {{ $publicationItem->localisation }}</p>
        </div>
    @endforeach
</div>
