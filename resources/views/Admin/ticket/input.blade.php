

@extends('Admin.layout.index')
@section('main-content') 
    <div class="flex-1 mx-auto p-6 border mt-10 bg-white m-[40px] ml-[40px] h-full mr-[40px] rounded-lg shadow-lg">
        <div class="flex justify-between mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">{{$title}}</h1>
            <p class="text-gray-500">TICKET /{{$title}} </p>
        </div>

        <form action="{{ $url }}" method="post">
            @csrf
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-1">
                
                <!-- Name field -->
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" placeholder=" Name" value="{{ old('name', $books->name ?? '') }}">
                </div>
                
                    
               
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">FROM</label>
                   <span value=>{{$books->from}}</span>
                </div>
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">TO</label>
                    <span>{{$books->to}}</span>
                </div>
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">AIRLINE</label>
                    <span>{{$books->airline}}></span>
                </div>
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">DEPARTURE</label>
                   <span>{{$books->departure_date}} {{$books->departure_hour}}:{{$books->departure_minute}} {{$books->departure_ampm}}</span>
                </div>
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">ARRIVAL</label>
                   <span>{{$books->arrival_date}} {{$books->arrival_hour}}:{{$books->arrival_minute}} {{$books->arrival_ampm}}</span>
                </div>
                
                <!-- Airline field -->
                <!-- Code field -->
                
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="w-full sm:w-auto px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    submit
                </button>
            </div>
        </form>
    </div>
@endsection

