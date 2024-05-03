<div class="text-white flex   ">
    <div class="w-[10%] ml-10">
        <img src="{{ asset('image/logo.png') }}" class="w-24 h-24 " alt="">

    </div>
    <div class="w-full">
        <nav class="flex place-content-center">
            <ul class="flex mt-8 gap-24 mr-48  font-bold  ">
                <li class="hover:text-orange-700 ease-in-out duration-300 active:text-white"><a href="{{ route('home') }}">HOME</a>
                </li>
                <li class="hover:text-orange-700 ease-in-out duration-300 active:text-white"><a href="{{ route('Gallery') }}">GALLERY</a>
                </li>
                <li class="hover:text-orange-700 ease-in-out duration-300 active:text-white"><a
                        href="{{ route('about') }}">ABOUT</a>
                </li>
                <li class="hover:text-orange-700 ease-in-out duration-300 active:text-white"><a href="#">FAQ</a>
                </li>
            </ul>
        </nav>
    </div>
</div>
