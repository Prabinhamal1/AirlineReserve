@extends('frontend.layout.master')
@section('fronts-content')


@foreach ($booking as $book )  
<div>

<div class="mt-[20px] border border-gray-950 flex mx-auto w-fit">
<div class="w-fit mx-auto flex shadow-2xl">
    <div class="w-fit mx-auto rounded-l-xl shadow-lg  basis-[80%]">
            <div class="grid grid-cols-2  mt-8 text-center items-center gap-9">
                <div class="px-[15px] mx-auto mb-6">
                    <h1 class="text-[30px] ">Moon Air</h1>
                </div>
                <div class="px-[15px] mx-auto mb-6">
                    <h1 class="text-[30px] font-bold">ECONOMY CLASS</h1>
                </div>
    
            </div>
            
                
            
            <div class="min-w-90 border-b-4 h-[10px]"></div>
            <div class=" grid grid-cols-3 gap-4 pt-[10px] pl-[30px]">
                <div>
                <h1 class="text-[20px]">Airline</h1>
                <h2 class="text-[30px] font-bold">{{$book->airline}}</h2>
                </div>
                <div><h1 class="text-[20px]">From</h1>
                    <h2 class="text-[30px] font-bold">{{$book->from}}</h2>
                </div>
                <div><h1 class="text-[20px]">TO</h1>
                    <h2 class="text-[30px] font-bold">{{$book->to}}</h2>
                </div>
            </div>
                
            
            <div class="grid grid-cols-3 py-[10px] pl-[30px]">
                <div class="colspan-2">
                    <h1 class="text-[20px]">Passenger</h1>
                    <p class="text-[25px]">{{$book->name}}</p>
                </div>
                <div></div>
                <div>
                    <h1>Board Time</h1>
                    <p class="text-[25px] font-bold">{{$book->departure_hour}}:{{$book->departure_minute}} {{$book->departure_ampm}}</p>
                </div>
            </div>
            <div class=" grid grid-cols-4 gap-4 pt-[10px] pl-[30px]">
                <div>
                <h1 class="text-[20px]">Depature</h1>
                <h2 class="text-[25px] font-bold">{{$book->departure_date}}</h2>
                <p class="text-[30px] font-bold">{{$book->departure_hour}}:{{$book->departure_minute}} {{$book->departure_ampm}}</p>
                </div>
                <div><h1 class="text-[20px]">Arrival</h1>
                    <h2 class="text-[25px] font-bold">{{$book->arrival_date}}</h2>
                    <p class="text-[30px] font-bold">{{$book->arrival_hour}}:{{$book->arrival_minute}} {{$book->arrival_ampm}}</p>
                </div>
                <div><h1 class="text-[20px]">Gate</h1>
                    <h2 class="text-[25px] font-bold">A2</h2>
                </div> 
                <div><h1 class="text-[20px]">Seat</h1>
                    <h2 class="text-[25px] font-bold">21A</h2>
                </div>
            </div>
            
            
        
    </div>
    <div class="basis-[25%] mt-1 h-[250px] mx-auto">
        <img class="rounded h-[400px]" src="{{URL::asset('/images/t.png')}}"alt="">
    </div>
</div>

</div>
<div class="text-center mb-4">
    <button onclick="printPage()" class="w-[200px] py-2 px-4 bg-blue-600 text-white rounded-md hover:bg-blue-700">
        Print Ticket
    </button>
</div>

@endforeach  
<script>
    function printPage() {
        window.print();  // This triggers the print dialog
    }
</script> 
@endsection