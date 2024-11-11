@extends('Admin.layout.index')
    @section('main-content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <div class="w-full">
        <div class="p-6 bg-gray-100 min-h-screen mt-10">
            <h2 class="text-2xl font-semibold mb-4">DASHBOARD</h2>
    
    <!-- Top Stats Grid -->
    <div class="grid grid-cols-3 gap-6 mb-10">
        <div class="p-4 bg-white shadow-md rounded-lg flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Airline</p>
                <p class="text-xl font-semibold">{{ $airlineCount }}</p>
            </div>
            <div class="text-blue-600">
                <i class="fas fa-globe text-3xl"></i>
            </div>
        </div>
        <div class="p-4 bg-white shadow-md rounded-lg flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Plane</p>
                <p class="text-xl font-semibold">{{ $planeCount }}</p>
            </div>
            <div class="text-blue-600">
                <i class="fas fa-paper-plane text-3xl"></i>
            </div>
        </div>
        <div class="p-4 bg-white shadow-md rounded-lg flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Airport</p>
                <p class="text-xl font-semibold">{{$airportCount}}</p>
            </div>
            <div class="text-blue-600">
                <i class="fas fa-calendar text-3xl"></i>
            </div>
        </div>
        <div class="p-4 bg-white shadow-md rounded-lg flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Flight</p>
                <p class="text-xl font-semibold">{{$flightCount}}</p>
            </div>
            <div class="text-blue-600">
                <i class="fas fa-plane text-3xl"></i>
            </div>
        </div>
        <div class="p-4 bg-white shadow-md rounded-lg flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Ticket</p>
                <p class="text-xl font-semibold">{{$bookscount}}</p>
            </div>
            <div class="text-blue-600">
                <i class="fas fa-tag text-3xl"></i>
            </div>
        </div>
        <div class="p-4 bg-white shadow-md rounded-lg flex items-center justify-between">
            <div>
                <p class="text-sm text-gray-500">Total Customer</p>
                <p class="text-xl font-semibold">{{$userCount}}</p>
            </div>
            <div class="text-blue-600">
                <i class="fas fa-user text-3xl"></i>
            </div>
    
    </div>
</div>

    <!-- Active Airlines and Flight Status Chart Section -->
    <div class="grid grid-cols-2 gap-6 mt-10">
        <!-- Active Airlines Table -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-semibold mb-4">Active Airlines</h3>
            <table class="w-full text-left">

                    
                <thead>
                    <tr class="text-gray-500 border-b">
                        <th class="py-2">#</th>
                        <th>Name</th>
                        <th>Code</th>
                        <th>No of Flights</th>
                        <th>No of Planes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($flights as $flight)
                    <tr>
                        <td class="py-2">1</td>
                        <td class="text-blue-600 cursor-pointer">{{ $flight->airlines ? $flight->airlines->name : 'N/A' }}</td>
                        <td>1</td>
                        <td class="text-center"><span class="bg-yellow-100 text-yellow-600 px-2 py-1 rounded-full">{{$flightCount}}</span></td>
                        <td class="text-center"><span class="bg-green-100 text-green-600 px-2 py-1 rounded-full">1</span></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Flight Status Chart -->
        <div class="bg-white shadow-md rounded-lg p-6">
            <h3 class="text-lg font-semibold mb-4">Flight Status Chart</h3>
            <div class="flex flex-col items-center justify-center">
                <p class="text-lg font-semibold mb-2">1</p>
                <p class="text-sm text-gray-500">Take Off</p>
                <!-- Placeholder for Chart (use a library like Chart.js or an SVG for an actual chart) -->
                <div class="w-24 h-24 bg-green-500 rounded-full relative">
                    <div class="w-16 h-16 bg-white rounded-full absolute top-4 left-4"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
