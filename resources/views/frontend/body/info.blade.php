@extends('frontend.layout.master')
@section('fronts-content')
@if ($flights->isEmpty())
    <p>No flights found for the selected criteria.</p>
    @else
        @php
        $flight = $flights->first();
        @endphp 

<div class="bg-[#5484a8] p-4 gap-1">
    <div class="flex justify-between items-center bg-white shadow-md p-4 rounded-md">
        <!-- Logo and Airline Name -->
        <div class="flex items-center">
            <img src="{{URL::asset('/images/f.png')}}" alt="Buddha Air" class="h-8 mr-2">
            <span class="font-semibold text-lg text-blue-600">Moon Air</span>
        </div>
        
            
        
        <!-- Flight Info -->
        <div class="flex space-x-10">
            <div class="text-sm">
                <span class="block text-gray-500">From</span>
                <span class="font-semibold uppercase text-blue-600">{{ $flight->origin && $flight->origin->location ? $flight->origin->location->name : 'N/A' }} </span>
            </div>
            <div>
                <img class="h-[40px]" src="{{URL::asset('/images/e.svg')}}" alt="">
            </div>
            <div class="text-sm">
                <span class="block text-gray-500">To</span>
                <span class="font-semibold uppercase text-blue-600">{{ $flight->destination && $flight->destination->location ? $flight->destination->location->name : 'N/A' }}</span>
            </div>
            <div class="text-sm">
                <span class="block text-gray-500">Departure Date</span>
                <span class="text-blue-600">{{$flight->departure}}</span>
            </div>
            <div>
                <img class="h-[30px] pt-[10px]" src="{{URL::asset('/images/u.svg')}}" alt="">
            </div>
            <div class="text-sm">
                <span class="block text-gray-500">Return Date</span>
                <span class="text-blue-600">{{$flight->arrival}}</span>
            </div>
            <div class="text-sm">
                <span class="block text-gray-500">Passenger Type</span>
                <span class="text-blue-600">{{$passengerCount ?? 'N/A' }} Adult</span>
            </div>
        </div>

        <!-- Modify Search Button -->
        <div class="mr-[40px]">
            <button class="bg-yellow-500 text-white font-semibold py-2 px-4 rounded-md" onclick="toggleFooter()">
                continue
            </button>
        </div>
    </div>

    <!-- Flight Results -->
    @foreach ($flights as $flight) 
    <section class="grid grid-rows-1">
        <div class="flex items-center justify-stretch mx-auto">
            <!-- Airline Logo -->
            <div class="flex items-center h-[100px] w-[150px] pt-[20px] flex-col shadow-2xl rounded-l-xl bg-white">
                <div><span class="text-2xl">🕊️</span></div>
                <div class="text-sm font-semibold">{{$flight->flight_number}}</div>
            </div>

            <!-- Flight Route -->
            <div class="flex gap-[40px] w-[500px] shadow-2xl mx-[5px] bg-white">
                <div class="text-sm font-semibold flex flex-col items-center px-[30px] h-[100px] py-[25px]">
                    <span class="uppercase">{{ $flight->origin && $flight->origin->location ? $flight->origin->location->name : 'N/A' }}</span>
                    <span class="">{{$flight->departure_hour}}:{{$flight->departure_min}} {{$flight->departure_ampm}}</span>
                </div>
                <div>
                    <img class="h-[10px]" src="{{URL::asset('/images/line.png')}}" alt="">
                </div>
                <div class="text-sm font-semibold flex flex-col items-center px-[30px] h-[100px] py-[25px]">
                    <span class="uppercase">{{ $flight->destination && $flight->destination->location ? $flight->destination->location->name : 'N/A' }}</span>
                    <span class="">{{$flight->arrival_hour}}:{{$flight->arrival_min}} {{$flight->arrival_ampm}}</span>
                </div>
            </div>

            <!-- Baggage Information -->
            <div class="flex items-center shadow-2xl h-[100px] w-[350px] gap-9 rounded-e-2xl bg-white">
                <div class="text-center px-[20px] grid grid-cols-2 h-[50px]">
                    <div><img class="ml-[10px] bg-[#5484a8] h-[50px] w-[40px] shadow-2xl pt-[10px] rounded-lg" src="{{URL::asset('/images/suicase.svg')}}" alt=""></div>
                    <div class="ml-[10px]">
                        <p class="text-sm font-semibold">25 KG</p>
                        <p class="text-black">Baggage</p>
                    </div>
                </div>
                <div class="text-center px-[20px] grid grid-cols-2">
                    <div><img class="mt-[7px] bg-[#5484a8] h-[50px] w-[40px] shadow-2xl rounded-lg" src="{{URL::asset('/images/bagage.svg')}}" alt=""></div>
                    <div>
                        <p class="text-sm font-semibold">5 KG</p>
                        <p class="text-black">Hand Carry</p>
                    </div>
                </div>
            </div>

            <!-- Price Section -->
            <div class="flex items-center m-[10px] h-[100px] w-[220px] shadow-2xl bg-white rounded-2xl">
                <div class="text-center px-[60px]">
                  <button onclick="toggleFooter()">
                    <div class="text-lg font-bold text-blue-600">NPR {{$flight->price}}</div>
                    {{-- <span class="text-gray-400 line-through text-sm">NPR 4,685.48</span> --}}
                    <span class="text-sm text-green-600">Refundable</span>
                  </button>
                </div>
            </div>
        </div>
    </section>
    @endforeach
</div>

<!-- Footer Bar -->
<div class="relative" id="footerBar" style="display: none;">
  @foreach ($flights as $flight) 
    <div class="fixed bottom-0 left-0 right-0">
        <div class="w-[1500px] bg-blue-500 flex justify-between rounded-lg h-[120px]">
            <div class="pl-[90px] py-[3px]">
                <p class="text-white py-[15px] text-[20px]">Departure Flight</p>
                <h1 class="text-white text-[20px] font-semibold"><span class="uppercase">{{ $flight->origin && $flight->origin->location ? $flight->origin->location->name : 'N/A' }}</span> TO <span class="uppercase">{{ $flight->destination && $flight->destination->location ? $flight->destination->location->name : 'N/A' }}</span></h1>
                {{-- <p class="text-white"><span>(CHITWAN)</span> <span>(BHR)</span></p> --}}
            </div>
            <div class="flex">
                <div class="grid grid-rows-3 pt-[30px] pr-[30px]">
                  <button >
                    <div class="text-white">Refundable</div>
                    <div class="text-white font-bold text-xl">NPR {{$flight->price}}</div>
                </button>
                </div>
                <a href="{{url('post')."/" . $flight->id. '?passengerCount=' . $passengerCount}}">
                <div class="mr-[40px] pt-[35px] pr-[40px]">
                    <button class="bg-yellow-500 text-white font-semibold py-2 px-4 rounded-md w-[200px]" onclick="showSuccessMessage()">
                        Book   
                    </button>
                </div>
            </a>
                
            </div>
        </div>
    </div>
    @endforeach
</div>
@endif
<script> function toggleFooter() {
  const footer = document.getElementById('footerBar');
  footer.style.display = footer.style.display === 'none' ? 'block' : 'none';
}
</script>

@endsection
