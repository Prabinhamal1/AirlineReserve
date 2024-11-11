
  <!-- <style>
    .hidden { display: none; }
  </style> -->
  @extends('frontend.layout.main')
  @section('front_content')

<div class="w-full mx-auto">
<div class="bg-white flex items-center justify-center flex-col">
  {{-- <div class="slider-container mt-[0.5px] overflow-hidden relative w-full z-10"> --}}
    {{-- <div class="slides flex transition-transform duration-1000 ease-in-out z-10">
        <img class="w-full flex-shrink-0" src="{{URL::asset('/images/home.webp')}}"  alt="Slide 1">
        <img class="w-full flex-shrink-0" src="{{URL::asset('/images/copy2.webp')}}"  alt="Slide 3">
        <img class="w-full flex-shrink-0" src="{{URL::asset('/images/copy.jpg')}}"  alt="Slide 2">
    </div>
  </div>  --}}
  <div class="mt-[0.5px]">
    <img class="w-full" src="{{URL::asset('/images/home.webp')}}" alt="">
  </div>
<div class="flex mb-[1px]  md:w-[770px] sm:w-[645px] lg:w-[1000px] xl:w-[1290]   w-[500px]">
<div class="bg-gray-800 rounded-lg shadow-lg p-8 text-center  w-[1320px] mt-[2px]">
  <!-- Icon and Title -->
  <!-- <div class="flex justify-center items-center mb-6">
    <img src="f.png" alt="Plane Icon" class="w-12 h-12 mr-2">
    <h1 class="text-2xl text-white font-semibold">Online Flight Booking</h1>
  </div> -->
  
  <!-- Tabs for Round Trip and One Way -->
  <div class="flex bg-gray-700 rounded-lg mb-6">
    <button id="roundTripBtn" class="flex-1 py-2  text-white font-semibold bg-gray-600 rounded-l-lg focus:outline-none">ROUND TRIP</button>
    <button id="oneWayBtn" class="flex-1 py-2 text-gray-400 font-semibold focus:outline-none">ONE WAY</button>
  </div>

  <!-- Form Fields -->
  <form class="" action="{{URL ('/search')}}" method="get" >
    @csrf
    <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-7  gap-4">
      <!-- From & To -->
      <div>
        <label class="text-white block mb-2" for="from">From</label>
        <select id="from" name="from" class="w-full p-2 bg-gray-700 text-white rounded-lg border border-gray-600">
          <option value="None">None</option>
            @foreach($airports as $city)              
             <option value="{{$city->id}}">{{ $city->location ? $city->location->name : 'N/A' }}</option>
             @endforeach
        </select>
      </div>
      <div>
        <label class="text-white block mb-2" for="to">To</label>
        <select id="to" name="to" class="w-full p-2 bg-gray-700 text-white rounded-lg border border-gray-600">
          <option value="None">None</option>
          @foreach($airports as $city)              
          <option value="{{$city->id}}">{{ $city->location ? $city->location->name : 'N/A' }}</option>
          @endforeach
        </select>
      </div>
      <!-- Depart & Return -->
      <div>
        <label class="text-white block mb-2" for="depart">Depart</label>
        <input id="depart" name="depart" type="date" min="{{ date('Y-m-d')}}" class="w-full h-[25px] p-2 bg-gray-700 text-white rounded-lg border border-gray-600">
    </div>
      <div id="returnDiv">
        <label class="text-white block mb-2" for="return">Return</label>
        <input id="return" name="return" type="date" min="{{ date('Y-m-d')}}" class="w-full h-[25px] p-2 bg-gray-700 text-white rounded-lg border border-gray-600" value="">
      </div>
      <!-- Class & Passenger -->
      <div>
        <label class="text-white block mb-2" for="class">Class</label>
        <select id="class" name="class" class="w-full p-2 bg-gray-700 text-white rounded-lg border border-gray-600">
          <option>Economy</option>
          <option>Business</option>
        </select>
      </div>
      <div>
        <label class="text-white block mb-2" for="passenger">Passenger</label>
        <div class="flex items-center justify-center h-[25px] ">
          <button type="button" id="decrementBtn" class="bg-gray-600 text-white px-3 py-1 rounded-l-lg">-</button>
          <input id="passengerCount" type="text" name="passengerCount" value="1" class="w-12 text-center bg-gray-700 text-white border border-gray-600">
          <button type="button" id="incrementBtn" class="bg-gray-600 text-white px-3 py-1 rounded-r-lg">+</button>
        </div>
      </div>
   

    <!-- Search Button -->
    <div class="mt-4">
      <button type="submit" class="bg-green-600 text-white py-2 px-6 rounded-lg hover:bg-green-500" >
        Search Flights </a>
      </button> 
    </div>
  </div>
  </form>
</div>
</div>
</div>
@endsection
