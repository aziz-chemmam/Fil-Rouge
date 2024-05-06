@extends('inc.header')
@include('inc.navBar')

<div class="relative flex justify-center">
    <div class="w-[30%] flex items-center">
        <input type="search" id="searchInput"
            class="flex-auto rounded border border-solid border-neutral-200 bg-transparent px-3 py-[0.25rem] text-base font-normal text-surface text-white transition duration-200 "
            placeholder="Search......." />
        <span
            class="flex items-center whitespace-nowrap px-3 py-[0.25rem] text-surface dark:border-neutral-400 dark:text-white [&>svg]:h-5 [&>svg]:w-5"
            id="button-addon2">
            <svg fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
            </svg>
        </span>
    </div>
</div>

<div class="grid grid-cols-2 w-[50%] mx-auto mt-5 md:grid-cols-4 gap-4" id="publicationGrid">
    @foreach ($publication as $publicationItem)
        <div class="publication-item">
            <a href="{{ route('getPublicationAndComments', $publicationItem->id) }}"><img class="h-54 w-54 object-cover rounded-lg"
                    src="{{ $publicationItem->image }}" alt=""></a>
            <p class="text-white p-1 flex justify-center">{{ $publicationItem->localisation }}</p>
        </div>
    @endforeach
</div>

<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        const searchText = this.value.toLowerCase();
        const publicationItems = document.querySelectorAll('.publication-item');
        publicationItems.forEach(function(item) {
            const publicationTitle = item.querySelector('p').textContent.toLowerCase();
            if (publicationTitle.includes(searchText)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
</script>
