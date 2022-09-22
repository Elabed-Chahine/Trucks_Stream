@props(['users' => collect(),'drivers'=>collect()])

<div class="flex flex-col">
    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
        <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
            <div class="overflow-hidden shadow-md sm:rounded-lg">
                <table class="min-w-full">
                    @if ($users->count() > 0)
                        <thead class="bg-gray-100 ">
                            <tr>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    user id
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    user Name
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    user email
                                </th>
                               
                              
                            </tr>
                        </thead>


                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($users as $user)



                                <tr
                                    class="border-b odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700 dark:border-gray-600">
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->id }}
                                    </td>







                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->name }}
                                    </td>



                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $user->email }}
                                    </td>



                                    


                                   
                                  
                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                            <form method="POST" action="/admin/{{ $user->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-xs text-gray-400 pr-10 ">Delete</button>
                                            </form>
                                        </td>

                                    
                                </tr>
                            @endforeach
                        </tbody>
    @elseif ($drivers->count() > 0)
                        <thead class="bg-gray-100 ">
                            <tr>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Driver id
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Driver Name
                                </th>
                                <th scope="col"
                                    class="py-3 px-6 text-xs font-medium tracking-wider text-left text-gray-700 uppercase dark:text-gray-400">
                                    Driver email
                                </th>
                               
                              
                            </tr>
                        </thead>


                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($drivers as $driver)



                                <tr
                                    class="border-b odd:bg-white even:bg-gray-50 odd:dark:bg-gray-800 even:dark:bg-gray-700 dark:border-gray-600">
                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $driver->id }}
                                    </td>







                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $driver->name }}
                                    </td>



                                    <td
                                        class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $driver->email }}
                                    </td>



                                    


                                   
                                  
                                        <td class="py-4 px-6 text-sm font-medium text-right whitespace-nowrap">
                                            <form method="POST" action="/admin/del/{{ $driver->id }}">
                                                @csrf
                                                @method('DELETE')

                                                <button class="text-xs text-gray-400 pr-10 ">Delete</button>
                                            </form>
                                        </td>

                                    
                                </tr>
                            @endforeach
                        </tbody>
    @endif                                      
</table>
            </div>
        </div>
    </div>
    </div>
