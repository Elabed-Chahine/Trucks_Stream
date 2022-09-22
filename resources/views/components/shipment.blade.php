<x-layout>


    <section class="px-6 py-8">


        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6 bg-gray-200 rounded-2xl ">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <figure>
                        <img src="/{{ $shipment->thumbnail }}" height="100" width="100" class="w-full">
                    </figure>
                    <p class="mt-4 block text-black text-xs">
                        Published <time>{{ $shipment->created_at->diffForHumans() }}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4 ">
                        <img src="/{{ $shipment->owner->thumbnail }}" alt="profile picture" height="70" width="70"
                            class="rounded-full">
                        <div class="ml-3 text-left">




                        </div>
                        <h5 class="font-bold text-black"> belongs to {{ $shipment->owner->name }}</h5>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class=" text-blue-600 lg:flex justify-between mb-6">
                        <a href="/"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-900">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to shipments
                        </a>


                    </div>

                    <h1 class="font-bold text-3xl text-black lg:text-4xl mb-10">
                        shipment ref {{ $shipment->id }}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        <h1 class="text-red-700 font-bold "> shipments description:</h1>
                        <p class="text-black">{{ $shipment->description }}</p>

                        

                        <h2 class="text-green-700"> price is {{ $shipment->weight  }} TND</h2>

                    </div>





































                    @if (Auth::guard('driver')->check())
                        <form method="POST" action="/driver/add" class="mt-10" enctype="multipart/form-data">
                            @csrf

                            <div class="mb-6">


                                <input class=" hidden" type="text" name="driverid"
                                    id="driverid" value="{{ auth()->guard('driver')->id() }}"
                                    placeholder="{{ auth()->guard('driver')->id() }}">
                                @error('driverid')
                                    <? echo "erreur ajout client" ?>
                                @enderror
                            </div>
                            <div class="mb-6">



                                <input class=" hidden" type="text" name="shipment_id"
                                    id="shipment_id" value="{{ $shipment->id }}" placeholder="{{ $shipment->id }}">

                            </div>
                            <div class="mb-6">



                                <input class=" hidden" type="text" name="price"
                                    id="price" value="{{ $shipment->weight  }}"
                                    placeholder="{{ $shipment->weight  }}">
                                @error('price')
                                    <? echo "erreur ajout produit" ?>
                                @enderror
                            </div>

                            <input class="border border-gray-400 p-2 w-full hidden" type="file" name="thumbnail"
                                id="thumbnail" value="{{ $shipment->thumbnail }}"
                                placeholder="{{ $shipment->thumbnail }}">
                            @error('thumbnail')
                                <? echo "erreur ajout produit" ?>
                            @enderror


                            <input name="description" id="description" 
                                class="hidden" value="{{$shipment->description}}" placeholder="{{$shipment->description}}">

                            @error('description')
                                <p class="text-red-500 mt-1"> {{ $message }}</p>
                            @enderror
                


                <button
                    class="mt-8 ml-10 border border-gray-800 py-1 px-8 bg-black hover:bg-gray-700 w-100 rounded-2xl text-white "
                    type="submit">reserve this shipment</button>






                </form>
                @endif








































                <hr class="w-full mt-5 black bg-black py-0.5">

                </div>




            </article>
        </main>


    </section>








</x-layout>
