

@extends('Admin.layout.index')
@section('main-content') 
    <div class="flex-1 mx-auto p-6 border mt-10 bg-white m-[40px] ml-[40px] h-full mr-[40px] rounded-lg shadow-lg">
        <div class="flex justify-between mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">{{$title}}</h1>
            <p class="text-gray-500">PLANE /{{$title}} </p>
        </div>

        <form action="{{ $url }}" method="post">
            @csrf
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-1">
                
                <!-- Name field -->
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" placeholder=" Name" value="{{ old('name', $user->name ?? '') }}">
                </div>
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">Phone</label>
                    <input type="text" id="phone" name="phone" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" placeholder="Phone" value="{{old('Code',$user->phone ?? '') }}">
                </div>
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">Address</label>
                    <input type="text" id="Address" name="address" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" placeholder="Address" value="{{old('Code',$user->address ?? '') }}">
                </div>
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">Email</label>
                    <input type="text" id="Email" name="email" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" placeholder="Email" value="{{old('Code',$user->email ?? '') }}">
                </div>
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">Password</label>
                    <input type="text" id="Password" name="password" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" placeholder="Password" value="{{old('Code',$cities->password?? '') }}">
                </div>

                <!-- Airline field -->
                <!-- Code field -->
                
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="w-full sm:w-auto px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    {{$sign}}
                </button>
            </div>
        </form>
    </div>
@endsection

