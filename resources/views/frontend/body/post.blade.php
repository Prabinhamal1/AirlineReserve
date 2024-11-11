@vite(['resources/css/app.css', 'resources/js/front.js'])
@extends('frontend.layout.master')

@section('fronts-content')
<div class="w-full h-full flex justify-center  items-center">
    <div class="flex flex-col h-max max-w-full justify-center font-[sans-serif] sm:h-screen p-4">
        <div class="md:max-w-full max-h-full w-full h-max mx-auto bg-white border border-gray-300 rounded-2xl p-8">
            <div class="text-center items-center flex flex-col mb-6">
                <strong class="text-3xl">Book</strong>
                <a href="javascript:void(0)">
                    <img class="h-[50px] flex items-center" src="{{ URL::asset('/images/f.png') }}" alt="logo" class='w-40 inline-block' />
                </a>
            </div>
            
            <form action="{{ route('book.save', ['id' => $flight->id])}}" method="post">
                @csrf
                @for ($i = 1; $i <= $passengerCount; $i++)
                    
               
                <div class="mx-auto">
                <div class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-6 xl:grid-cols-7  gap-[50px] ml-[10px]">
                    <div class="">
                        <label class="text-gray-800 text-sm mb-2 block">Full Name</label>
                        <input name="name" type="text" class="text-gray-800 bg-white border  md:w-[200px] text-sm px-4 py-3 h-[30px] rounded-md outline-blue-500 @error('name') border-red-500 @enderror" value="{{ old('name') }}" placeholder="Enter Full Name" />
                    </div>
                    
                    <div class="md:ml-10">
                       
                            <label class="text-gray-800 text-sm mb-2 block">From</label>
                            
                            <span class="font-semibold uppercase text-blue-600">{{ $flight->origin && $flight->origin->location ? $flight->origin->location->name : 'N/A' }}</span>
                
                    </div>
                    
                    <div>
                       
                            <label class="text-gray-800 text-sm mb-2 block">To</label>
                            <span class="font-semibold uppercase text-blue-600">{{ $flight->destination && $flight->destination->location ? $flight->destination->location->name : 'N/A' }}</span>
                       
                    </div>

                    <div>
                        <label class="text-gray-800 text-sm mb-2 block">Departure</label>
                        <span class="font-semibold uppercase text-blue-600">{{ $flight->departure}}</span>
                    </div>

                    
                    <div>
                        <label class="text-gray-800 text-sm mb-2 block">Departure_Time</label>
                        <span class="font-semibold uppercase text-blue-600 mx-auto">{{ $flight->departure_hour}}:{{ $flight->departure_min}} {{ $flight->departure_ampm}} </span>
                    </div>

                    <div>
                        <label class="text-gray-800 text-sm mb-2 block">Airline</label>
                        <span class="font-semibold uppercase text-blue-600">{{ $flight->airlines ? $flight->airlines->name : 'N/A' }}</span>
                    </div>
                
                </div>
                @endfor
            </div>
            <a href="{{url('ticket/'.'$book->users_id')}}" >
                <div class="mt-10" >
                    <button type="submit" class="w-[300px] py-3 px-4 flex text-center  mx-auto text-sm tracking-wider font-semibold rounded-md text-white h-[40px] bg-blue-600 hover:bg-blue-700 focus:outline-none">
                       <span class=" mx-auto">Book</span>
                    </button>
                </div>
            </a>
            </form>
        </div>
    </div>
</div>
@endsection
<script>
    function showSuccessMessage(event) {
        // Show the success message
        alert("You have successfully booked!");

        // Continue navigation
        window.location.href = event.currentTarget.getAttribute('href');
    }
</script>
