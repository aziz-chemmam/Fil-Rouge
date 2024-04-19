@include('inc.header')

<div class="relative flex h-full w-full">
    <div class="h-screen w-1/2 bg-black">
      <div class="mx-auto flex h-full w-2/3 flex-col justify-center text-white xl:w-1/2">
        <div class="flex flex-col gap-12 ">
            <p class="text-[2.5rem] font-bold ml-[12.5rem] text-orange-700">LOGIN</p>
          </div>
        {{-- <div>
          <p class="text-2xl">Login|</p>
          <p>please login to continue|</p>
        </div>
        <div class="my-6">
          <button class="flex w-full justify-center rounded-3xl border-none bg-white p-1 text-black hover:bg-gray-200 sm:p-2"><img src="https://freesvg.org/img/1534129544.png" class="mr-2 w-6 object-fill" />Sign in with Google</button>
        </div>
        <div>
          <fieldset class="border-t border-solid border-orange-700">
            <legend class="mx-auto px-2 text-center text-sm">Or login via our secure system</legend>
          </fieldset>
        </div> --}}
        <div class="mt-10">
          <form method="POST">
            @csrf
            <div>
                <label class="mb-2.5 block text-orange-700 font-extrabold" for="email">Email</label>
                <input name="email" type="email" id="email" class="inline-block w-full rounded-xl bg-white p-2.5 leading-none text-black " />
              </div>
              <div class="mt-4">
                <label class="mb-2.5 block text-orange-700 font-extrabold" for="password">Password</label>
                <input name="password" type="password" id="password" class="inline-block w-full rounded-xl bg-white text-orange-700 p-2.5 leading-none " />
              </div>
            <div class="mt-4 flex w-full flex-col justify-between sm:flex-row">
              <!-- Remember me -->
              <div><input type="checkbox" id="remember" /><label for="remember" class="mx-2 text-sm">Remember me</label></div>
              <!-- Forgot password -->
              <div>
                <a href="#" class="text-sm text-orange-700 underline hover:text-gray-200">Forgot password?</a>
              </div>
            </div>
            <div class="my-10">
              <button class="w-full rounded-full bg-orange-700 p-5 hover:bg-orange-800">Login</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="h-screen w-1/2 bg-blue-600">
      <img src="https://images.pexels.com/photos/2523959/pexels-photo-2523959.jpeg" class="h-full w-full" />
    </div>
  </div>