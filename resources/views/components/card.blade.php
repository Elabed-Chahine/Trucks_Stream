@props(['shipment', 'iteration' => 1])
<div
    {{ $attributes->merge(['class' =>'transition-colors duration-300 hover:bg-gray-100 border   border-gray-500 border-opacity-70 mt-9  hover:border-opacity-75 rounded-xl']) }}>
    <a href="/shipments/{{ $shipment->id }}" class="none pointer ">

        <figure>
            <img src="{{ $shipment->thumbnail }}" class="w-full h-52">
        </figure>
        <div class="card-body h-52">

            <h2 class="card-title text-black">shipment ref:{{ $shipment->id }}
                @if ($iteration < 4)
                    <div class="badge mx-2 badge-secondary">NEW shipment</div>
                @endif
            </h2>
            <p class="text-black">Shipment Description: {{ $shipment->description }}</p>
        </div>
        <div class="justify-end  card-actions">
            <button class="btn btn-secondary ">More info</button>
        </div>

    </a>


</div>
