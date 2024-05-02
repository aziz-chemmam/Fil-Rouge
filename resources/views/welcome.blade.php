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

    <div class="text-white ml-36 flex place-content-around">
        <img src="{{ asset('image/logo.png') }}" class="w-24 h-24 mr-32" alt="">
        <nav class="flex gap-64">
            <ul class="flex mt-8 gap-52  font-bold  ">
                <li class="hover:text-orange-700 ease-in-out duration-300 active:text-white"><a href="#">HOME</a>
                </li>
                <li class="hover:text-orange-700 ease-in-out duration-300 active:text-white"><a
                        href="{{ route('Gallery') }}">GALLERY</a></li>
                <li class="hover:text-orange-700 ease-in-out duration-300 active:text-white"><a
                        href="{{ route('about') }}">ABOUT</a>
                </li>
                <li class="hover:text-orange-700 ease-in-out duration-300 active:text-white"><a href="#">FAQ</a>
                </li>
            </ul>
            <div class=" h-fit mt-6 flex ml-28 text-[0.85rem] font-medium">
                <a href="{{ route('login') }}"><button
                        class="px-4  py-2 rounded-l-xl text-white  bg-orange-600 hover:bg-orange-700 transition">Login</button></a>
                <a href="{{ route('register') }}"><button
                        class="px-4 py-2 rounded-r-xl text-orange-700 bg-balck hover:bg-neutral-100 ease-in-out duration-200 hover:text-black transition">Register</button></a>


        </nav>


    </div>

    {{-- introduction --}}
    <div class="mt-10 flex justify-center ">
        <div class="flex justify-between gap-10  h-full">
            <img src="{{ asset('image/home imag.jpg') }}" class="h-[50rem] " alt="">
            <div>
                <div class=" bg-orange-700 w-[50rem] mt-[15rem] rounded-3xl flex justify-center h-56">
                    <h1 class="mt-4 font-serif	 text-center text-base text-white">
                        Welcome to a world where moments are frozen in time, emotions are captured in vivid detail,
                        and<br>
                        stories come to life through the lens. At <span class="text-black text-lg">Goat Studio's</span>
                        Photography, we believe in the magic
                        of<br>
                        photography, where each click of the shutter paints a unique canvas of memories. Whether
                        it's<br>
                        the soft glow of a golden sunset, the joy in a child's laughter, or the elegance of a loving<br>
                        couple's embrace, we specialize in turning ordinary moments into extraordinary masterpieces.<br>
                        Join us on a visual journey where images speak volumes, and let our photographs weave tales
                        of<br>
                        beauty, passion, and authenticity. Explore our portfolio, and discover how we transform
                        life's<br>
                        fleeting moments into timeless treasures.
                    </h1>
                </div>
                <div class=" ml-[42%] mt-6 ">
                    <button
                        class="bg-black border-[0.2rem] border-orange-700 hover:bg-orange-700 active:bg-black transition duration-300 ease-in-out rounded-xl w-24 px-5 p-2 text-white"
                        type="submit">Explore</button>

                </div>
            </div>
            <img src="{{ asset('image/home2.jpg') }}" alt="">
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
                        <img src="{{ $publicationItem->image }}" class="h-[25rem] w-[15rem] object-cover rounded-lg shadow-lg" alt="">
                        <p class="absolute bottom-0 left-1/2 transform -translate-x-1/2 hidden group-hover:block bg-black bg-opacity-40 text-white p-1 rounded-md">
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
