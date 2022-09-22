@props(['driver', 'iteration' => 1])
<div
    {{ $attributes->merge(['class' =>'transition-colors duration-300 hover:bg-gray-100 border  border-gray-500 border-opacity-70 mt-9  hover:border-opacity-75 rounded-xl']) }}>
    <a href="/drivers/driver/{{ $driver->id }}" class="none pointer ">
        <figure>
            <img src="/{{ $driver->thumbnail }}" class="w-full h-52">
        </figure>
        <div class="card-body h-52">

            <h2 class="card-title text-black">driver name:{{ $driver->name }}
                @if ($iteration < 4)
                    <div class="badge mx-2 badge-secondary">NEW driver</div>
                @endif
            </h2>
            <p class="text-black">driver email to contact: {{ $driver->email }}</p>
            <p class="text-black">driver description: {{ $driver->description }}</p>
        </div>
        <div class="justify-end card-actions">
            <button class="btn btn-secondary">More info</button>
        </div>

    </a>


</div>
