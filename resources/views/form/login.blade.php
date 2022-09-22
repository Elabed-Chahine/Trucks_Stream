<x-layout>

    <div class="hero max-h-fit  ">
        <div class="flex-col justify-center hero-content  lg:flex-row">
            <div class="text-center lg:text-left">
                <h1 class="mb-5 text-5xl font-bold text-slate-700">
                    Hello there
                </h1>
                <b class="mb-5 text-slate-500">
                   login to your account so you can be able to upload your shipment infos or to reserve some voyages
                </b>
            </div>
            <div class="card flex-shrink-0 w-full max-w-sm shadow-2xl bg-base-100 ">
                <div class="card-body">
                    
                        <form action="/login" method="POST" >
                          @csrf
                         
                         <div class="form-control">
                          
                            <label class="label">
                                <span class="label-text">Email</span>
                            </label>
                            <input type="text" placeholder="email" name="email" class="input input-bordered">
                                  @error('email')
                    <p class="text-red-500 mt-1"> {{$message}}</p>
                    @enderror

                    </div>
                    <div class="form-control">
                        <label class="label">
                            <span class="label-text">Password</span>
                        </label>

                        <input type="password" placeholder="password" name="password" class="input input-bordered">
                              @error('password')
                    <p class="text-red-500 mt-1"> {{$message}}</p>
                    @enderror
                        <label class="label">
                            <a href="#" class="label-text-alt">Forgot password?</a>
                        </label>
                        
                    </div>
                    <div class="form-control mt-6">
                        <button type="submit" value="Login" class="btn btn-primary"> login</button>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-layout>
