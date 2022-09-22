<!doctype html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/app.css">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.25.4/dist/full.css" rel="stylesheet" type="text/css" />
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2/dist/tailwind.min.css" rel="stylesheet" type="text/css" />


     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>

 <title>trucks</title>
</head>

<body style="font-family: Open Sans, sans-serif" class="bg-white">





<nav class="  flex  sm:flex-row  justify-evenly py-8  bg-base-200 static border-b-2 border-black">
@if(Auth::check() || Auth::guard('driver')->check())
<div class="items-center mt-7">
  <x-dropdown />
</div>
@endif

  
  <div class="  items-center">
    <img src="/images/container-truck.png" alt="site logo" height="120" width="100">
  </div>
  <!-- left header section -->
  <div class="items-center  space-x-8 lg:flex">
    <a href="/"  class=" hover:text-black hover:bg-gray-500 px-5 py-3 font-bold border-b-4 border-black rounded-full">Home</a>
    <a href=""  class=" hover:text-black hover:bg-gray-500 font-bold px-5 py-3 border-b-4 border-black rounded-full">About Us</a>
    <a href="/drivers"  class=" hover:text-black hover:bg-gray-500 font-bold px-5 py-3 border-b-4 border-black rounded-full">Drivers</a>                                                                              
     @if(Auth::check())




    <x-notification />











      <p   class=" px-4 py-2 text-gray-200 bg-gray-800 rounded-md hover:bg-gray-900 ">Welcome {{auth()->user()->name}}</p>
      <a href="/logout" class="px-4 py-2 text-blue-100 bg-blue-800 rounded-md hover:bg-blue-400 ">
      logout
    </a>
   @elseif( Auth::guard('driver')->check())
    <p   class=" px-4 py-3 text-gray-200 bg-gray-500 rounded-md hover:bg-gray-900 ">Welcome {{auth()->guard('driver')->user()->name}}</p>
      <a href="/logout" class="px-4 py-2 text-blue-100 bg-blue-800 rounded-md hover:bg-blue-400 ">
      logout
    </a>
    @else
    
  </div>
  <!-- right header section -->
  <div class="flex items-center space-x-2">
    <a href="/login" class="px-4 py-2 text-blue-100 bg-blue-800 rounded-md hover:bg-blue-400 ">
      Sign in
    </a>
    <a href="/register"class="px-4 py-2 text-gray-200 bg-gray-800 rounded-md hover:bg-gray-900">
      Sign up
    </a>
  </div>
   @endauth
</nav>


















    {{ $slot }}












<footer class="p-10 footer bg-base-200 text-base-content static mb-0">
  <div>
    <span class="footer-title">Services</span> 
    <a class="link link-hover">Branding</a> 
    <a class="link link-hover">Design</a> 
    <a class="link link-hover">Marketing</a> 
    <a class="link link-hover">Advertisement</a>
  </div> 
  <div>
    <span class="footer-title">Company</span> 
    <a class="link link-hover">About us</a> 
    <a class="link link-hover">Contact</a> 
    <a class="link link-hover">Jobs</a> 
    <a class="link link-hover">Press kit</a>
  </div> 
  <div>
    <span class="footer-title">Legal</span> 
    <a class="link link-hover">Terms of use</a> 
    <a class="link link-hover">Privacy policy</a> 
    <a class="link link-hover">Cookie policy</a>
  </div> 
  <div>
    <span class="footer-title">Newsletter</span> 
    <div class="form-control w-80">
      <label class="label">
        <span class="label-text">Enter your email address</span>
      </label> 
      <div class="relative">
        <input type="text" placeholder="username@site.com" class="w-full pr-16 input input-bordered"> 
        <button class="absolute top-0 right-0 rounded-l-none btn btn-primary">Subscribe</button>
      </div>
    </div>
    @if(auth()->guard('driver')->check())
  <a href="/checkout/layout"> 
<img src="/images/delivery-truck.png" alt="Voyages" height="100" width="80" class="fixed right-3 top-24 lg:top-3">  </div></a> 
@endif
</footer>



</body>


