@extends('frontend.layout.master')
@section('fronts-content')


    
<div>
<div class="mt-[20px] border border-gray-950 flex mx-auto w-[1000px]">
<div class="max-w-5xl mx-auto flex shadow-2xl">
    <div class="max-w-5Xl mx-auto rounded-l-xl shadow-lg  basis-[80%]">
            <div class="grid grid-cols-2  mt-8 text-center items-center gap-9">
                <div class="px-[15px] mx-auto mb-6">
                    <h1 class="text-[30px] ">Online Flight Booking</h1>
                </div>
                <div class="px-[15px] mx-auto mb-6">
                    <h1 class="text-[30px] font-bold">ECONOMY CLASS</h1>
                </div>
    
            </div>
            <div class="min-w-90 border-b-4 h-[10px]"></div>
            <div class=" grid grid-cols-3 gap-4 pt-[10px] pl-[30px]">
                <div>
                <h1 class="text-[20px]">Airline</h1>
                <h2 class="text-[30px] font-bold">Buddha Airways</h2>
                </div>
                <div><h1 class="text-[20px]">From</h1>
                    <h2 class="text-[30px] font-bold">Chitwan</h2>
                </div>
                <div><h1 class="text-[20px]">TO</h1>
                    <h2 class="text-[30px] font-bold">Kathmandu</h2>
                </div>
            </div>
            <div class="grid grid-cols-3 py-[10px] pl-[30px]">
                <div class="colspan-2">
                    <h1 class="text-[20px]">Passenger</h1>
                    <p class="text-[25px]">Santosh Khatri</p>
                </div>
                <div></div>
                <div>
                    <h1>Board Time</h1>
                    <p class="text-[25px] font-bold">12:45</p>
                </div>
            </div>
            <div class=" grid grid-cols-4 gap-4 pt-[10px] pl-[30px]">
                <div>
                <h1 class="text-[20px]">Depature</h1>
                <h2 class="text-[25px] font-bold">2081-05-20</h2>
                <p class="text-[30px] font-bold">21:01</p>
                </div>
                <div><h1 class="text-[20px]">Arrival</h1>
                    <h2 class="text-[25px] font-bold">2081-05-21</h2>
                    <p class="text-[30px] font-bold">22:11</p>
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
        <img class="rounded h-[400px]" src="icon/t.png" alt="">
    </div>
</div>
</div>

@endsection