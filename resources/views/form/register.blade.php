<x-layout>
    <div class="bg-grey-lighter max-h-fit flex flex-col ">
        <div class="container max-w-sm mx-auto mt-11 flex-1 flex flex-col  items-center justify-center px-2">
            <div class="bg-gray-300 px-6 border border-gray-400 py-8 rounded shadow-md text-black w-full">
               <form method="POST" action="/register" class="mt-10" enctype="multipart/form-data">
                @csrf

                    <h1 class="mb-8 text-3xl text-center text-blue-800">Sign up</h1>
                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="name"
                        placeholder="Full Name" />
                          @error('name')
                    <p class="text-red-500 mt-1"> {{$message}}</p>
                    @enderror

                    <input type="text" class="block border border-grey-light w-full p-3 rounded mb-4" name="email"
                        placeholder="Email" />
                          @error('email')
                    <p class="text-red-500 mt-1"> {{$message}}</p>
                    @enderror

                    <input type="password" class="block border border-grey-light w-full p-3 rounded mb-4" name="password"
                        placeholder="Password" />
                          @error('password')
                    <p class="text-red-500 mt-1"> {{$message}}</p>
                    @enderror

                     <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700 "
                   for="thumbnail"
            >
            thumbnail
            </label>

            <input class="border border-gray-400 p-2 w-full text-black"
                   type="file"
                   name="thumbnail"
                   id="thumbnail"
                  
                  
            >
            @error('thumbnail')
            <p class="text-red-500 mt-1"> {{$message}}</p>
            @enderror
        </div>


                        <textarea name="bio" id="bio" cols="35" rows="3" placeholder="write your bio"></textarea>

                    <div class="flex justify-center">
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio" name="radio" id="inlineRadio1" value="driver">
                            <label class="form-check-label inline-block text-gray-800"
                                for="inlineRadio10">driver</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input
                                class="form-check-input form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer"
                                type="radio" name="radio" id="inlineRadio2" value="option2">
                            <label class="form-check-label inline-block text-gray-800" for="inlineRadio20">shipment
                                owner</label>
                        </div>
                          @error('radio')
                    <p class="text-red-500 mt-1"> {{$message}}</p>
                    @enderror

                    </div>

                    <button type="submit"
                        class="w-full text-center py-3 rounded bg-blue-800 text-white hover:bg-blue-500 focus:outline-none my-1">Create
                        Account</button>
                </form>

                <div class="text-center text-sm text-grey-dark mt-4">
                    By signing up, you agree to the
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Terms of Service
                    </a> and
                    <a class="no-underline border-b border-grey-dark text-grey-dark" href="#">
                        Privacy Policy
                    </a>
                </div>
            </div>

            <div class="text-grey-dark mt-6 text-black">
                Already have an account?
                <a class="no-underline border-b border-blue text-blue-600" href="/login">
                    Log in
                </a>.
            </div>
        </div>
    </div>
</x-layout>
