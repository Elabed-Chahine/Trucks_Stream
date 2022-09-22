@props(['user'])
<div class="bg-gray-300 mt-3 max-w-4xl ml-96 rounded-lg px-10 py-8 ">



 @if(Auth::guard('web')->user()->name=='Mimilooze')


     <h1 class="text-blue-700  text-xl font-bold">these are all my shipments:</h1> <br>
        <?php
        $shipments = collect();
        
            $shipments = App\Models\Shipment::all();
        
        
        ?>
        <x-dashboard :shipments="$shipments" />
    @elseif (Auth::guard('web')->check())
        <h1 class="text-blue-700  text-xl font-bold">these are all my shipments:</h1> <br>
        <?php
        $shipments = collect();
        if (App\Models\User::find($user->id)->shipments ?? false) {
            $shipments = App\Models\User::find($user->id)->shipments;
        }
        
        ?>
        <x-dashboard :shipments="$shipments" />
    @endif

</div>
