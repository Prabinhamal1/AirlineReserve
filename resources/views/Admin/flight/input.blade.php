@vite(['resources/css/app.css','resources/js/front.js'])
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
@extends('Admin.layout.index')
@section('main-content') 
    <div class="flex-1 mx-auto p-6 border my-[40px] ml-[40px] mr-[40px] bg-white rounded-lg shadow-lg">
        <div class="flex justify-between mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">{{$title}}</h1>
            <p class="text-gray-500">FLIGHT / {{$title}}</p>
        </div>

        <form action="{{ $url }}" method="POST">
            @csrf
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-2">
                
                <!-- Airline field -->
                <div class="flex flex-col">
                    <label for="airline" class="text-gray-700">Airline</label>
                    <select id="airline" name="airline" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-2">
                        <option value="">Select Airlines</option>
                        @foreach($airlines as $airline)
                        <option value="{{$airline->id}}">{{$airline->name}}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Plane field -->
                <div class="flex flex-col">
                    <label for="plane" class="text-gray-700">Plane</label>
                    <select id="plane" name="plane" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1">
                        <option value="">Select planes</option>
                    </select>
                </div>

                <!-- Time field -->
                <div class="grid grid-rows-2 gap-4">
                    <!-- Departure Date -->
                    <div>
                        <label for="depart" class="text-gray-800 text-sm mb-2 block">Departure Date</label>
                        <input id="depart" class="border px-4 py-2 rounded-md w-full" name="depart" type="date" min="{{ date('Y-m-d') }}" value="{{ old('date', $flights->departure ?? '') }}">
                    </div>
                
                    <!-- Departure Time with AM/PM -->
                    <div>
                        <label class="text-gray-800 text-sm mb-2 block">Departure Time</label>
                        <div class="flex gap-2">
                            <!-- Hour and Minute -->
                            <input name="hour" type="number" min="1" max="12" placeholder="HH" class="border px-4 py-2 rounded-md w-20" 
                            value="{{ old('date', $flights->departure_hour ?? '') }}"required>
                            <span class="text-gray-800 mt-2">:</span>
                            <input name="minute" type="number" min="0" max="59" placeholder="MM" class="border px-4 py-2 rounded-md w-20" value="{{ old('date', $flights->departure_min ?? '') }}"  required>
                            
                            <!-- AM/PM Dropdown -->
                            <select name="ampm" class="border px-4 py-2 rounded-md" required>
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="grid grid-rows-2 gap-4">
                    <!-- Arrival Date -->
                    <div>
                        <label for="return" class="text-gray-800 text-sm mb-2 block">Arrival Date</label>
                        <input id="return" class="border px-4 py-2 rounded-md w-full" name="return" type="date" placeholder="dd/mm/yyyy"  min="{{ date('Y-m-d') }}" value="{{ old('date', $flights->arrival ?? '') }}">
                    </div>
                
                    <!-- Arrival Time with AM/PM -->
                    <div>
                        <label class="text-gray-800 text-sm mb-2 block">Arrival Time</label>
                        <div class="flex gap-2">
                            <!-- Hour and Minute -->
                            <input name="arrival_hour" type="number" min="1" max="12" placeholder="HH" class="border px-4 py-2 rounded-md w-20" value="{{ old('date', $flights->arrival_hour?? '') }}" required>
                            <span class="text-gray-800 mt-2">:</span>
                            <input name="arrival_minute" type="number" min="0" max="59" placeholder="MM" class="border px-4 py-2 rounded-md w-20" value="{{ old('date', $flights->arrival_min ?? '') }}" required>
                            
                            <!-- AM/PM Dropdown -->
                            <select name="arrival_ampm" class="border px-4 py-2 rounded-md" required>
                                <option value="AM">AM</option>
                                <option value="PM">PM</option>
                            </select>
                        </div>
                    </div>
                </div>
                
               
                <!-- Route: Origin field -->
                <div class="flex flex-col">
                    <label for="origin" class="text-gray-700">Origin</label>
                    <select id="origin" name="origin" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1">
                        <option value="None">None</option>
                        @foreach($airports as $city)
                            
                        <option value="{{$city->id}}">{{ $city->location ? $city->location->name : 'N/A' }}</option>
                        @endforeach
                    </select>
                </div>

                <!-- Route: Destination field -->
                <div class="flex flex-col">
                    <label for="destination" class="text-gray-700">Destination</label>
                    <select id="destination" name="destination" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1">
                        <option value="None">None</option>
                        @foreach($airports as $city)  
                        <option value="{{$city->id}}">{{ $city->location ? $city->location->name : 'N/A' }}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">Flight Name</label>
                    <input type="text" id="name" name="flight_number" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" placeholder="U437" value="{{old('name',$flights->flight_number ?? '')}}">
                </div>
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">Seats</label>
                    <input type="number" id="seat" name="seat" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" placeholder="50" value="{{ old('seat', $flights->seats?? '') }}">
                </div>
                <!-- Price field -->
                <div class="flex flex-col sm:col-span-2">
                    <label for="price" class="text-gray-700">Price</label>
                    <div class="flex items-center mt-1">
                        <span class="mr-2 text-gray-500">NPR</span>
                        <input type="number" id="price" name="price" class="p-2 border rounded-md shadow-sm w-full focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" placeholder="Enter price" value="{{ old('price', $flights->price ?? '') }}">
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
<!-- jQuery CDN (add this if you haven't already included it) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection

@section('scripts')



@endsection
<script>
    jQuery(document).ready(function() {
        jQuery('#airline').change(function() {
            let airline_id = jQuery(this).val();
            
            if (airline_id) { // Ensure an airline is selected
                jQuery.ajax({
                    url: '/admin/getplanes', // Update this URL if needed
                    type: 'POST',
                    data: {
                        airline_id: airline_id,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        // Use the HTML response from the server to populate the plane dropdown
                        jQuery('#plane').html(response.html);
                    },
                    error: function() {
                        alert('Error retrieving planes.');
                    }
                });
            } else {
                // Reset the plane dropdown if no airline is selected
                jQuery('#plane').html('<option value="">Select planes</option>');
            }
        });
    });
</script>

