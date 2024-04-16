<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Document</title>
</head>

<body class="bg-black">

    {{-- navBar --}}

    <div class="text-white ml-36 flex place-content-around  ">

        <img src="{{ asset('image/logo.png') }}" class="w-24 h-24 mr-32" alt="">
        <nav class="flex gap-96">
            <ul class="flex mt-8 gap-52  font-bold  ">
                <li class="text-orange-700"><a href="">HOME</a></li>
                <li class="hover:text-orange-700"><a href="">GALLERY</a></li>
                <li class="hover:text-orange-700"><a href="">ABOUT</a></li>
                <li class="hover:text-orange-700"><a href="">FAQ</a></li>
            </ul>
            <div class=" h-fit mt-6 flex ml-28 text-[0.85rem] font-medium">
                <button class="px-4  py-2 rounded-l-xl text-white  bg-orange-600 hover:bg-orange-700 transition"><a href="{{-- route('login') --}}"></a>Login</button>
                <button class="px-4 py-2 rounded-r-xl text-orange-700 bg-balck hover:bg-neutral-100  hover:text-black transition"><a href="{{-- route('register') --}}"></a>Register</button>

            
        </nav>
      

    </div>
    </div>

    {{-- introduction --}}
    <div class="mt-10 flex justify-center ">
        <div class="flex justify-between gap-10  h-full">
            <img src="{{ asset('image/home imag.jpg') }}" class="h-[50rem] " alt="">
            <div>
                <div class=" bg-orange-700 w-[50rem] mt-[15rem] rounded-3xl flex justify-center h-56">
                    <h1 class="mt-4 text-center text-base text-white">
                        Welcome to a world where moments are frozen in time, emotions are captured in vivid detail,
                        and<br>
                        stories come to life through the lens. At Goat Studio's Photography, we believe in the magic
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
                <div class="bg-orange-700 p-2 w-24 px-5 ml-[42%] mt-6 text-white">
                    <button type="submit">Explore</button>

                </div>
            </div>
            <img src="{{ asset('image/home2.jpg') }}" alt="">
        </div>

    </div>



</body>

</html>
