@props(['drivers'])


<div class="lg:grid lg:grid-cols-6  bg-white pt-6   ">
    @foreach($drivers as $driver)


 <x-card-driver  :driver="$driver" :iteration="$loop->iteration"  />

    @endforeach

    </div>



