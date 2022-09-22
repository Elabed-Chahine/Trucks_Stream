@props(['driver'])
<div class="bg-gray-300 mt-3 max-w-4xl ml-96 rounded-lg px-10 py-8 ">



    <h1 class="text-blue-700  text-xl font-bold">this is my bio:</h1> <br>
    <h2 class="text-black font-bold">{{ $driver->bio }}</h2>


    <h1 class="text-blue-700  text-xl font-bold">these are all my voyages:</h1> <br>
    <?php
    $voyages = collect();
    if (App\Models\Driver::find($driver->id)->voyages->count() > 0) {
        $voyages = App\Models\Driver::find($driver->id)->voyages;
    }
    
    ?>

    <x-dashboard :voyages="$voyages" />




</div>
