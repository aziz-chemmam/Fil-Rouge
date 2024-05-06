<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title></title>
</head>

<body class="bg-black">

    {{-- navBar --}}
    <div class="text-white flex place-content-around">
        <img src="{{ asset('image/logo.png') }}" class="w-24 h-24 " alt="">
        <nav class="flex gap-64">
            <ul class="flex mt-8 gap-24 mr-48  font-bold  ">
                <li class="hover:text-orange-700 ease-in-out duration-300 active:text-white"><a
                        href="{{ route('home') }}">HOME</a>
                </li>
                <li class="hover:text-orange-700 ease-in-out duration-300 active:text-white"><a
                        href="{{ route('Gallery') }}">GALLERY</a>
                </li>
            </ul>
            <div class=" h-fit mt-6 flex ml-28 text-[0.85rem] font-medium">
                @guest
                    <a href="{{ route('login') }}"><button
                            class="px-4  py-2 rounded-l-xl text-white bg-orange-600 hover:bg-orange-700 transition duration-200">Login</button></a>
                    <a href="{{ route('register') }}"><button
                            class="px-4 py-2 rounded-r-xl text-orange-700 bg-balck hover:bg-neutral-100 ease-in-out hover:text-black transition duration-300">Register</button></a>
                @else
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit"
                            class="px-4 py-2 rounded-xl text-orange-700 bg-black hover:bg-neutral-100 ease-in-out duration-200 hover:text-black transition">Logout</button>
                    </form>
                @endguest
            </div>
        </nav>
    </div>
    {{-- introduction --}}
    <div class="mt-10 flex justify-center">
        <div class="flex justify-between gap-10">
            <div>
                <img src="{{ asset('image/home imag.jpg') }}" class="h-[50rem]" alt="">
            </div>
            <div class="flex flex-col justify-center">
                <div class="bg-orange-700 w-[50rem] rounded-3xl p-8">
                    <h1 class="font-serif flex justify-center text-3xl text-white mb-8">
                        Welcome to Goat Studio's Photography
                    </h1>
                    <p class="text-white text-center text-lg mb-6">
                        Step into a realm where the artistry of photography transcends mere images, where each frame
                        captures a narrative waiting to be unveiled.
                        Our photography gallery invites you to embark on a visual journey through the lens of
                        creativity, where every click resonates with emotion,
                        every scene whispers a tale, and every photograph is a window into a world of wonder. From
                        breathtaking landscapes to intimate portraits, from candid moments to carefully crafted
                        compositions, our curated collection showcases the diverse tapestry of life, inviting you to
                        pause, reflect, and immerse yourself in the beauty of the human experience. </p>
                    <div class="flex justify-center">
                        <a href="{{ route('Gallery') }}"><button
                                class="bg-black border-[0.2rem] border-orange-700 hover:bg-orange-700 active:bg-black transition duration-300 ease-in-out rounded-xl px-8 py-3 text-white">
                                Explore
                            </button></a>
                    </div>
                </div>
            </div>
            <div>
                <img src="{{ asset('image/home2.jpg') }}" alt="">
            </div>
        </div>
    </div>
    {{-- last upload --}}
    <section class="flex flex-col gap-14">
        <div class="flex justify-center">
            <h1 class="uppercase underline font-bold decoration-orange-700 underline-offset-8 text-3xl text-white">
                Last Upload
            </h1>
        </div>
        <div class="flex text-white justify-around">
            @foreach ($publication as $publicationItem)
                <div class="group relative">
                    <div class="relative">
                        <img src="{{ $publicationItem->image }}"
                            class="h-[25rem] w-[15rem] object-cover rounded-lg shadow-lg" alt="">
                        <p
                            class="absolute bottom-0 left-1/2 transform -translate-x-1/2 hidden group-hover:block bg-black bg-opacity-40 text-white p-1 rounded-md">
                            {{ $publicationItem->localisation }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    {{-- footer --}}
    @extends('inc.footer')

</body>

</html>
