@vite(['resources/css/app.css','resources/js/nav.js'])
<div class="flex">
<div class="flex">
    <aside class="w-64 bg-[#2A3143] text-gray-200 h-screen p-6 flex flex-col">
        <div class="flex items-center justify-center rounded-0 b mb-6">
            <img class="h-8 w-8 rounded-full " src="{{URL::asset('/images/f.png')}}" alt="Your Company">
        </div>
        <nav class="flex-grow">
            <ul>
                <li class="mb-4">
                    <a href="{{url('/admin/home')}}" class="flex items-center px-4 py-2 text-sm font-medium text-gray-500 hover:text-white rounded">
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/airline" class="flex items-center px-4 py-2 text-sm font-medium text-gray-500 hover:text-white rounded">
                        <span>Airlines</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/city" class="flex items-center px-4 py-2 text-sm font-medium text-gray-500 hover:text-white rounded">
                        <span>Cities</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/plane" class="flex items-center px-4 py-2 text-sm font-medium text-gray-500 hover:text-white rounded">
                        <span>Planes</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/airport" class="flex items-center px-4 py-2 text-sm font-medium text-gray-500 hover:text-white rounded">
                        <span>Airports</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="/admin/flight" class="flex items-center px-4 py-2 text-sm font-medium text-gray-500 hover:text-white rounded">
                        <span>Flights</span>
                    </a>
                </li>
                <li class="mb-4">
                    <a href="#" class="flex items-center px-4 py-2 text-sm text-gray-500 font-medium hover:text-white rounded">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="font-medium text-sm text-center inline-flex items-center" type="button">Tickets
                            <svg class="w-2.5 h-2.5 ms-3 ml-[50px]" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                        </button>
                    </a>
                    <div id="dropdown" class="z-10 hidden divide-y divide-gray-100  w-44 bg-[#2A3143]">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                            <li class="mb-2 ml-[40px] mx-auto">
                                <a href="{{route('admin.ticket')}}" class="text-sm text-gray-500 hover:text-white">All Tickets</a>
                            </li>
                            <li class="mb-2 ml-[40px]">
                                <a href="#" class="text-sm text-gray-500 hover:text-white">Pending Tickets</a>
                            </li>
                            <li class="mb-2 ml-[40px]">
                                <a href="#" class="text-sm text-gray-500 hover:text-white">Approved Tickets</a>
                            </li>
                            <li class="b-2 ml-[40px]">
                                <a href="#" class="text-sm text-gray-500 hover:text-white">Canceled Tickets</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="mb-4">
                    <a href="{{url('/admin/costumer')}}" class="flex items-center px-4 py-2 text-sm text-gray-500 font-medium hover:text-white rounded">
                        <span>Customers</span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- Logout Button at the bottom left corner -->
        <div class="mt-auto">
            <a href="{{ route('logout') }}" class="flex items-center px-4 py-2 text-sm text-gray-500 font-medium hover:text-white rounded">
                <span>Logout</span>
            </a>
        </div>
    </aside>
</div>
