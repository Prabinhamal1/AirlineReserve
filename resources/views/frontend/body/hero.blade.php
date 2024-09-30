@extends('frontend.layout.main')
@section('front_content')

<div class="bg-gradient-to-r from-gray-700 to-gray-500 h-screen flex items-center justify-center">
  <div class="bg-gray-800 rounded-lg shadow-lg p-8 text-center max-w-lg w-full">
    <!-- Icon and Title -->
    <div class="flex justify-center items-center mb-6">
      <img src="f.png" alt="Plane Icon" class="w-12 h-12 mr-2">
      <h1 class="text-3xl text-white font-semibold">Online Flight Booking</h1>
    </div>
    
    <!-- Tabs for Round Trip and One Way -->
    <div class="flex bg-gray-700 rounded-lg mb-6">
      <button id="roundTripBtn" class="flex-1 py-2 text-white font-semibold bg-gray-600 rounded-l-lg focus:outline-none">ROUND TRIP</button>
      <button id="oneWayBtn" class="flex-1 py-2 text-gray-400 font-semibold focus:outline-none">ONE WAY</button>
    </div>

    <!-- Form Fields -->
    <form>
      <div class="grid grid-cols-2 gap-4">
        <!-- From & To -->
        <div>
          <label class="text-white block mb-2" for="from">From</label>
          <select id="from" class="w-full p-2 bg-gray-700 text-white rounded-lg border border-gray-600">
            <option>Departure</option>
          </select>
        </div>
        <div>
          <label class="text-white block mb-2" for="to">To</label>
          <select id="to" class="w-full p-2 bg-gray-700 text-white rounded-lg border border-gray-600">
            <option>Arrival</option>
          </select>
        </div>
        <!-- Depart & Return -->
        <div>
          <label class="text-white block mb-2" for="depart">Depart</label>
          <input id="depart" type="date" class="w-full p-2 bg-gray-700 text-white rounded-lg border border-gray-600" value="2024-09-12">
        </div>
        <div id="returnDiv">
          <label class="text-white block mb-2" for="return">Return</label>
          <input id="return" type="date" class="w-full p-2 bg-gray-700 text-white rounded-lg border border-gray-600" value="2024-09-12">
        </div>
        <!-- Class & Passenger -->
        <div>
          <label class="text-white block mb-2" for="class">Class</label>
          <select id="class" class="w-full p-2 bg-gray-700 text-white rounded-lg border border-gray-600">
            <option>Economy</option>
            <option>Business</option>
          </select>
        </div>
        <div>
          <label class="text-white block mb-2" for="passenger">Passenger</label>
          <div class="flex items-center justify-center">
            <button type="button" id="decrementBtn" class="bg-gray-600 text-white px-3 py-1 rounded-l-lg">-</button>
            <input id="passengerCount" type="text" value="1" class="w-12 text-center bg-gray-700 text-white border border-gray-600">
            <button type="button" id="incrementBtn" class="bg-gray-600 text-white px-3 py-1 rounded-r-lg">+</button>
          </div>
        </div>
      </div>

      <!-- Search Button -->
      <div class="mt-6">
        <button type="submit" class="bg-green-600 text-white py-2 px-6 rounded-lg hover:bg-green-500">
          Search Flights
        </button>
      </div>
    </form>
  </div>

</div>
@endsection



  <script>
    // Handle passenger increment and decrement
    const decrementBtn = document.getElementById('decrementBtn');
    const incrementBtn = document.getElementById('incrementBtn');
    const passengerCount = document.getElementById('passengerCount');
    
    decrementBtn.addEventListener('click', () => {
      let currentValue = parseInt(passengerCount.value);
      if (currentValue > 1) {
        passengerCount.value = currentValue - 1;
      }
    });

    incrementBtn.addEventListener('click', () => {
      let currentValue = parseInt(passengerCount.value);
      passengerCount.value = currentValue + 1;
    });

    // Handle round trip and one way trip switching
    const roundTripBtn = document.getElementById('roundTripBtn');
    const oneWayBtn = document.getElementById('oneWayBtn');
    const returnDiv = document.getElementById('returnDiv');

    roundTripBtn.addEventListener('click', () => {
      roundTripBtn.classList.add('bg-gray-600', 'text-white');
      roundTripBtn.classList.remove('text-gray-400');
      oneWayBtn.classList.add('text-gray-400');
      oneWayBtn.classList.remove('bg-gray-600', 'text-white');
      returnDiv.classList.remove('hidden');
    });

    oneWayBtn.addEventListener('click', () => {
      oneWayBtn.classList.add('bg-gray-600', 'text-white');
      oneWayBtn.classList.remove('text-gray-400');
      roundTripBtn.classList.add('text-gray-400');
      roundTripBtn.classList.remove('bg-gray-600', 'text-white');
      returnDiv.classList.add('hidden');
    });
       // Get the elements
       const profileBtn = document.getElementById('profileBtn');
    const dropdown = document.getElementById('dropdown');

    // Toggle the dropdown when the profile button is clicked
    profileBtn.addEventListener('click', function() {
        dropdown.classList.toggle('hidden');
    });

    // Close the dropdown if clicked outside
    window.addEventListener('click', function(e) {
        if (!profileBtn.contains(e.target) && !dropdown.contains(e.target)) {
            dropdown.classList.add('hidden');
        }
    });
  </script>

