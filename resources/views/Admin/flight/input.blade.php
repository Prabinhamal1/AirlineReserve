@extends('Admin.layout.index')
@section('main-content') 
    <div class="flex-1 mx-auto p-6 border my-[40px] ml-[40px] mr-[40px] bg-white rounded-lg shadow-lg">
        <div class="flex justify-between mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">ADD FLIGHT</h1>
            <p class="text-gray-500">Flight / Add Flight</p>
        </div>

        <form action="{{url('/admin/flight/store')}}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                
                <!-- Airline field -->
                <div class="flex flex-col">
                    <label for="airline" class="text-gray-700">Airline</label>
                    <select id="airline" name="airline" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-2">
                        @foreach($airlines as $airline)
                        <option value="{{$airline->id}}">{{$airline->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Plane field -->
                <div class="flex flex-col">
                    <label for="plane" class="text-gray-700">Plane</label>
                    <select id="plane" name="plane" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1">
                        <option value="None">None</option>
                        @foreach($planes as $plane)
                        <option value="{{$plane->id}}">{{$plane->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Time field -->
                <div class="grid grid-rows-2">
                    <label for="">Depature Date</label>
                    <input class="border"  name="depature_date" type="date">
                </div>
                <div class="grid grid-rows-2">
                    <label for="">Arrival Date</label>
                    <input class="border"  name="arrival_date" type="date">
                </div>
               
                <!-- Route: Origin field -->
                <div class="flex flex-col">
                    <label for="origin" class="text-gray-700">Origin</label>
                    <select id="origin" name="origin" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1">
                        <option value="None">None</option>
                        @foreach($airports as $airport)
                            
                        <option value="{{$airport->id}}">{{$airport->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Route: Destination field -->
                <div class="flex flex-col">
                    <label for="destination" class="text-gray-700">Destination</label>
                    <select id="destination" name="destination" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1">
                        <option value="None">None</option>
                        @foreach($airports as $airport)  
                        <option value="{{$airport->id}}">{{$airport->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">Flight Name</label>
                    <input type="text" id="name" name="flight_number" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" placeholder="U437">
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
