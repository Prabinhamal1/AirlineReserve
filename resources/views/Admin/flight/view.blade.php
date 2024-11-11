@extends('Admin.layout.index')
    @section('main-content') 

    <section class="  mt-10 border shadow-5xl w-full mx-auto max-h-full my-8">
  <div class="bg-white p-6 rounded-lg shadow-lg">
    <!-- Header and Add Airline Button -->
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-lg font-bold">FLIGHT LIST</h2>
      <a href="{{url('admin/flight/register')}}">
      <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md font-medium flex items-center space-x-2">
        <span>+ Add Flight</span>
      </button>
      </a>
    </div>

    <!-- Search and Display Records Section -->
    <div class="flex justify-between items-center mb-4">
      <!-- Display Dropdown -->
      <div class="flex items-center">
        <label for="records" class="mr-2 text-sm text-gray-600">Display</label>
        <select id="records" class="border-gray-300 rounded-md text-sm p-1">
          <option value="10">10</option>
          <option value="25">25</option>
          <option value="50">50</option>
          <option value="100">100</option>
        </select>
        <span class="ml-2 text-sm text-gray-600">records</span>
      </div>

      <!-- Search Bar -->
      <div class="relative">
        <input type="text" placeholder="Search..." class="border-gray-300 rounded-md p-2 pl-10 text-sm focus:ring focus:ring-green-200 focus:border-green-400">
        <div class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16l-4.5 4.5m0 0L3 21l4.5-4.5M19 11a8 8 0 11-16 0 8 8 0 0116 0z" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Table Section -->
    <div class="overflow-x-auto">
      <table class="w-full bg-white rounded-lg border border-gray-200">
        <thead>
          <tr class="bg-gray-50 border-b border-gray-200">
            <th class="py-2 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
            <th class="py-2 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Flight number</th>
            <th class="py-2 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Route</th>
            <th class="py-2 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Departure & Arrival</th>
            <th class="py-2 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Time</th>
            <th class="py-2 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Seats</th>
            <th class="py-2 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Booked</th>
            <th class="py-2 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">Remain</th>
            <th class="py-2 px-4 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">price</th>
            <th colspan="2" class="py-2 px-4  text-center font-medium text-gray-500 uppercase tracking-wider">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($flights as  $flight)
          <tr>
            <td class="py-4 px-4 text-center text-gray-500">{{$flight->id}}</td>
            <td class="py-4 px-4 text-center text-gray-500">{{$flight->flight_number}}</td>
            <td class="py-4 px-4 text-center text-gray-500">
              {{ $flight->origin && $flight->origin->location ? $flight->origin->location->name : 'N/A' }} - {{ $flight->destination && $flight->destination->location ? $flight->destination->location->name : 'N/A' }}
          </td>
            <td class="py-4 px-4 text-center text-gray-500">
              <div>Departure: {{ \Carbon\Carbon::parse($flight->departure)->format('Y-m-d') }}</div>
              <div>Arrival: {{ \Carbon\Carbon::parse($flight->arrival)->format('Y-m-d') }}</div>
            </td>
            <td class="py-4 px-4 text-center text-gray-500">
              {{ $flight->departure_hour}}:{{ $flight->departure_min}} {{ $flight->departure_ampm}} - {{ $flight->arrival_hour}}:{{ $flight->arrival_min}} {{ $flight->arrival_ampm}}
          </td>
            
            <td class="py-4 px-4 text-center text-gray-500">{{$flight->seats}}</td>
            <td class="py-4 px-4 text-center text-gray-500">{{$flight->booked_seats}}</td>

            <td class="py-4 px-4 text-center text-gray-500">{{$flight->remain_seats}}</td>
            <td class="py-4 px-4 text-center text-gray-500">{{$flight->price}}</td>
            <td class="py-4 px-1 text-center text-gray-500">
              <a href="{{route('flight.edit',$flight->id)}}" class="flex justify-center">
                  <img class="h-8 w-8" src="{{ URL::asset('/images/edit.png') }}" alt="Edit">
              </a>
          </td>
          
          <td class="py-4 px-1 text-center text-gray-500 my-8">
            <a href="{{url('admin/flight/delete/'.$flight->id)}}" class="flex justify-center">
                <img class="h-[50px] w-[50px]" src="{{ URL::asset('/images/delete.jpg') }}" alt="Delete">
            </a>
          </td>
          
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>

    <!-- Pagination -->
    <div class="flex justify-between items-center mt-4">
      <span class="text-sm text-gray-600">Showing 0 to 0 of 0 entries</span>
      <div class="flex space-x-2">
        <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-md">Previous</button>
        <button class="px-3 py-1 bg-gray-100 text-gray-600 rounded-md">Next</button>
      </div>
    </div>
  </div>
</section>
@endsection