@include('inc.header')

<div class="relative flex h-full w-full">
    <div class="h-screen w-1/2 bg-black">
        <div class="mx-auto flex h-full w-2/3 flex-col justify-center text-white xl:w-1/2">
            <div class="flex flex-col gap-12 ">
                <p class="text-[2.5rem] font-bold ml-[11rem] text-orange-700">REGISTER</p>
            </div>
            <div class="mt-10">
                <form method="POST">
                    @csrf
                    <div class="flex gap-28">
                        <div>
                            <label class="mb-2.5 block text-orange-700 font-extrabold" for="fname">First Name</label>
                            <input name="fname" type="fname" id="fname"
                                class="inline-block w-full rounded-xl bg-white p-2.5 leading-none text-black  " />
                        </div>
                        <div>
                            <label class="mb-2.5 block text-orange-700 font-extrabold" for="lname">Last Name</label>
                            <input name="lname" type="lname" id="lname"
                                class="inline-block w-full rounded-xl bg-white p-2.5 leading-none text-black " />
                        </div>
                    </div>
                    <div>
                        <label class="mb-2.5 block text-orange-700 font-extrabold" for="email">Email</label>
                        <input name="email" type="email" id="email"
                            class="inline-block w-full rounded-xl bg-white p-2.5 leading-none text-black " />
                    </div>
                    <div class="mt-4">
                        <label class="mb-2.5 block text-orange-700 font-extrabold" for="password">Password</label>
                        <input name="password" type="password" id="password"
                            class="inline-block w-full rounded-xl bg-white text-orange-700 p-2.5 leading-none " />
                    </div>
                    <div class="mt-4">
                        <select name="role"
                            class="inline-block w-full rounded-xl bg-white p-2.5 leading-none text-black"
                            for="role">
                            <option class="bg-orange-700 text-white " value="user">User</option>
                            <option class="bg-orange-700 text-white " value="photographer">Photographer</option>
                        </select>
                    </div>
                    <div class="my-10">
                        <button class="w-full rounded-xl bg-orange-700 p-5 hover:bg-orange-800">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="h-screen w-1/2 bg-blue-600">
        <img src="https://images.pexels.com/photos/2523959/pexels-photo-2523959.jpeg" class="h-full w-full" />
    </div>
</div>
