@extends('inc.header')

<div class="w-full flex justify-center items-center">
    <div class="w-1/2 flex justify-center items-center h-screen">
        <div>
            <img src="{{ $publication->image }}" class="w-[40rem] rounded-3xl " alt="Image">
        </div>
    </div>
    <div class="w-1/2 px-6 flex flex-col gap-5">
        <div class="mt-6 w-2/3  px-4 bg-white">
            @foreach ($comments as $comment)
            <div class="flex items-center mb-2 gap-4">
                <div class="text-md text-orange-700 font-semibold">{{ $comment->user->fname }} {{ $comment->user->lname }}</div>
                <div class="text-md flex flex-col text-gray-600">{{ $comment->commentaire }}</div>
            </div>
            @endforeach
        </div>

        <form action="{{ route('getPublicationAndComments', $publication->id) }}" method="POST" class="mb-6 flex flex-col">
            @csrf
            <input type="hidden" name="publication_id" value="{{ $publication->id }}">
            <textarea name="commentaire" class="w-2/3 h-32 px-3 py-2 text-gray-700 border rounded-lg focus:outline-none focus:border-indigo-500" placeholder="Enter your comment here..."></textarea>
            <div class="flex justify-center">
                <button type="submit" class="bg-orange-700 w-f text-white font-semibold px-4 py-2 rounded-md mt-4">Post Comment</button>

            </div>
        </form>

        <div class="mt-4">
            <a href="{{ route('generatePdf', $publication->id) }}" class="block">
                <img src="{{ asset('image/download.png') }}" class="w-14" alt="">
            </a>
        
    </div>
</div>