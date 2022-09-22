@props(['shipments' => collect(), 'voyages' => collect(),'bool'=>false])

<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-md sm:rounded-lg">
                <table class="min-w-full">
                    @if ($shipments->count() > 0)
                        <thead class="bg-gray-100 ">
                            <tr>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    shipment material
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    shipment weight
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    departing location
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    destination
                                </th>
                                <th scope="col" class="relative py-3 px-6">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>


                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($shipments as $shipment)



                                <tr
                                    class="border-b odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700 dark:border-gray-600">
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $shipment->material }}
                                    </td>







                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $shipment->weight }}
                                    </td>



                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $shipment->lieu_depart }}
                                    </td>



                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $shipment->lieu_arrive }}
                                    </td>


                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                        <a href="/user/shipments/{{ $shipment->id }}/edit"
                                            class="text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                    </td>
                                    @if (Auth::guard('web')->user()->name == 'Mimilooze')
                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                            <form method="POST" action="/admin/ships/{{ $shipment->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-xs text-gray-400 pr-10 ">Delete</button>
                                            </form>
                                        </td>

                                    @elseif(auth()->guard('web')->check() )

                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                            <form method="POST" action="/user/ships/{{ $shipment->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-xs text-gray-400 pr-10 ">Delete</button>
                                            </form>
                                        </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>

                        <div class="flex justify-around bg-black">

                            <div class="items-center">
                                <button class="px-6 py-3 bg-red-700  hover:bg-red-600 text-white font-bold font-sans"> checkout</button>
                            </div>
                            <div class="font-bold items-center ">
                                <h1 class="text-white mt-3">you're going to pay {{ auth()->user()->shipments->sum('weight') }} dt </h1>
                            </div>
                        </div>
                        



                    @elseif ($voyages->count() > 0)
                        <thead class="bg-gray-100 ">
                            <tr class="border-b bg-gray-50 ">
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    driver ref
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    shipment ref
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    price
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    description
                                </th>

                            </tr>
                        </thead>
                        <tbody>


                            <!-- Product 1 -->

                            @foreach ($voyages as $voyage)
                                <tr class="border-b bg-white   ">
                                    <td class="py-4 px-6 text-sm  font-medium text-gray-900 whitespace-nowrap ">
                                        {{ $voyage->driverid }}
                                    </td>



                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ $voyage->shipment_id }}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ $voyage->price }}
                                    </td>
                                    <td class="py-4 px-6 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
                                        {{ $voyage->description }}
                                    </td>




                                    @if(auth()->guard('driver')->id()==$voyage->driverid)
                                    <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap ">
                                        <form method="POST" action="/driver/{{ $voyage->id }}">
                                            @csrf
                                            @method('DELETE')

                                            <button class="text-xs text-red-500 font-bold  ">Delete</button>
                                        </form>
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                       
                    @else
                        <h1 class="text-xl px-8 py-10 bg-gray-800 align-center ">no shipments or voyages are available
                            for this user</h1>
                    @endif
                </table>
            </div>
        </div>
    </div>
     @if ( $bool)
                        <div class="flex justify-around">

                            <div class="items-center">
                                <button class="px-6 py-3 bg-red-700  hover:bg-red-600 text-white font-bold font-sans"> checkout</button>
                            </div>
                            <div class="font-bold items-center ">
                                <h1 class="text-red-900 mt-3">you're going to be payed {{$voyages->sum('price') }} dt </h1>
                            </div>
                        </div>
                        @endif
</div>
