@extends('Admin.layout.index')
@section('main-content') 
    <div class="flex-1 mx-auto p-6 border my-[40px] ml-[40px] mr-[40px] bg-white rounded-lg shadow-lg">
        <div class="flex justify-between mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">ADD FLIGHT</h1>
            <p class="text-gray-500">Flight / Add Flight</p>
        </div>

        <form action="#" method="POST">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                
                <!-- Airline field -->
                <div class="flex flex-col">
                    <label for="airline" class="text-gray-700">Airline</label>
                    <select id="airline" name="airline" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-2">
                        <option value="None">None</option>
                        <option value="Airline1">Airline 1</option>
                        <option value="Airline2">Airline 2</option>
                    </select>
                </div>

                <!-- Plane field -->
                <div class="flex flex-col">
                    <label for="plane" class="text-gray-700">Plane</label>
                    <select id="plane" name="plane" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1">
                        <option value="None">None</option>
                        <option value="Plane1">Plane 1</option>
                        <option value="Plane2">Plane 2</option>
                    </select>
                </div>

                <!-- Time field -->
                <div class="flex flex-col sm:col-span-2">
                    <label for="time" class="text-gray-700">Time</label>
                    <div class="flex space-x-4">
                        <input type="date" id="departure_time" name="departure_time" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" value="2024-09-28">
                        <input type="date" id="arrival_time" name="arrival_time" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" value="2024-09-28">
                    </div>
                </div>

                <!-- Route: Origin field -->
                <div class="flex flex-col">
                    <label for="origin" class="text-gray-700">Origin</label>
                    <select id="origin" name="origin" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1">
                        <option value="None">None</option>
                        <option value="Origin1">Origin 1</option>
                        <option value="Origin2">Origin 2</option>
                    </select>
                </div>

                <!-- Route: Destination field -->
                <div class="flex flex-col">
                    <label for="destination" class="text-gray-700">Destination</label>
                    <select id="destination" name="destination" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1">
                        <option value="None">None</option>
                        <option value="Destination1">Destination 1</option>
                        <option value="Destination2">Destination 2</option>
                    </select>
                </div>

                <!-- Price field -->
                <div class="flex flex-col sm:col-span-2">
                    <label for="price" class="text-gray-700">Price</label>
                    <div class="flex items-center mt-1">
                        <span class="mr-2 text-gray-500">NPR</span>
                        <input type="number" id="price" name="price" class="p-2 border rounded-md shadow-sm w-full focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" placeholder="Enter price">
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="w-full sm:w-auto px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Submit
                </button>
            </div>
        </form>
    </div>

</div>

@endsection