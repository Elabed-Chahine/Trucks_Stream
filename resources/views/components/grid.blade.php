@props(['shipments'])


<div class="lg:grid lg:grid-cols-6  bg-white pt-6   ">
    @foreach($shipments as $shipment)


 <x-card  :shipment="$shipment" :iteration="$loop->iteration"  />

    @endforeach

    </div>



