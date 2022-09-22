@props(['driver'])

<div class="max-w-4xl ml-96 rounded-lg mt-3 bg-gray-300">
<img src="/images/ship.jpg" alt="background" class="h-40 w-full -mb-7 rounded-sm ">

<div class="flex justify-around">
<figure>
    <img src="/{{$driver->thumbnail}}" alt="background" class="w-32 h-27 rounded-full justify-start">
  </figure> 
 <div class=" mt-9 flex">
<p class="text-gray-500 font-bold  text-sm ml-4"> my name is: 
    {{$driver->name}}    </p> <br>
<p  class="text-gray-500 font-bold  text-sm ml-4">contact me on my email:{{$driver->email}}   </p> <br>
<p class="text-gray-500 font-bold text-sm ml-4 "> profile Created {{$driver->created_at->diffForHumans()}} </p> 
</div>
</div>
</div>