<x-layout>

<div class="py-5 px-6">
    <main class="max-w-2xl mx-auto mt-10 bg-gray-100 border border-gray-200 p-6 rounded-xl">
        <div class=" text-2xl items-center colour-blue-500">
            <h1 class="text-black">EDIT SHIPMENT {{$shipment->id}}</h1>
        </div>
         @if(auth()->user()->name=="Mimilooze")
    <form method="POST" action="/admin/ships/{{$shipment->id}}" class="mt-10" enctype="multipart/form-data">
        @else
    <form method="POST" action="/user/ships/{{$shipment->id}}" class="mt-10" enctype="multipart/form-data">
        @endif
        @csrf
        @method('PATCH')
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="material"
            >
                ship Materials
            </label>
           

            <input class="border border-gray-400 p-2 w-full text-black"
                   type="text"
                   name="material"
                   id="material"
                   value="{{ old("material",$shipment->material) }}"
                   required
            >
            @error('material')
            <p class="text-red-500 mt-1"> {{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="weight"
            >
                weight of shipment
            </label>

            <input class="border border-gray-400 p-2 w-full text-black"
                   type="text"
                   name="weight"
                   id="weight"
                   value="{{ old("weight",$shipment->weight) }}"
                   required
            >
            @error('weight')
            <p class="text-red-500 mt-1"> {{$message}}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="lieu_depart"
            >
                lieu depart shipment
            </label>

            <input class="border border-gray-400 p-2 w-full text-black"
                   type="text"
                   name="lieu_depart"
                   id="lieu_depart"
                   value="{{ old("lieu_depart",$shipment->lieu_depart) }}"
                   required
            >
            @error('lieu_depart')
            <p class="text-red-500 mt-1"> {{$message}}</p>
            @enderror
        </div>

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
                   value="{{ old("thumbnail",$shipment->thumbnail) }}"
                  
            >
            @error('thumbnail')
            <p class="text-red-500 mt-1"> {{$message}}</p>
            @enderror
        </div>



        <div class="mb-6">
             <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="lieu_arrive"
            >
                lieu arrivee
            </label>

            <input class="border border-gray-400 p-2 w-full text-black"
                   type="text"
                   name="lieu_arrive"
                   id="lieu_arrive"
                   value="{{ old("lieu_arrive",$shipment->lieu_arrive) }}"
                   required
            >
            @error('lieu_arrive')
            <p class="text-red-500 mt-1"> {{$message}}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="description"
            >
                description
            </label>
            <textarea name="description" id="description" cols="30" rows="10" class="block mb-2 uppercase font-bold text-xs border border-gray-400 w-full text-gray-700"  value="{{ old("description",$shipment->description) }}"></textarea>
            
            @error('description')
            <p class="text-red-500 mt-1"> {{$message}}</p>
            @enderror
        </div>
       
        
 <input class="hidden"
                   type="user_id"
                   name="user_id"
                   id="user_id"
                   value="{{ auth()->guard('web')->id() }}"
                   required
            >


            

        

        <div class="mb-6">
            <button type="submit"
                    class="bg-blue-500 text-white rounded py-2 px-4 hover:bg-blue-500"
            >
                Submit
            </button>
        </div>
    </form>
    </main>
</div>

</x-layout>