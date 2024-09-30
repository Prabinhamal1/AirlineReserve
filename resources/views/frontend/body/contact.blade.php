@extends('frontend.layout.main')
@section('front_content')

    <!-- Main Contact Section -->
    <section class="max-w-9xl mx-auto bg-slate-400 place-content-center ">
        <div class="flex place-content-center mx-auto p-6 bg-white rounded-lg ">
        <div class="py-[50px]">
        <div class="text-center px-[50]">
            <h2 class="text-4xl font-semibold text-gray-800">CONTACT US</h2>
            <p class="text-gray-600 mt-2 text-balance">
                We are here to meet any business need and
                to promote your company online!
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-1 gap-8 mt-6">
            <!-- Contact Info -->
            <div class="col-span-1 text-center">
                <h3 class="text-xl font-medium text-gray-800">Phone</h3>
                <p class="text-gray-600 mt-2">1 (232) 252 55 22</p>
            </div>

            <div class="col-span-1 text-center">
                <h3 class="text-xl font-medium text-gray-800">Location</h3>
                <p class="text-gray-600 mt-2">75 Street Sample, WI 63025</p>
            </div>

            <div class="col-span-1 text-center">
                <h3 class="text-xl font-medium text-gray-800">Mail</h3>
                <p class="text-gray-600 mt-2">template@sample.com</p>
            </div>
        </div>
        </div>
        <div my-[50px] basis-[55%]>
            <img class="rounded-full h-[400px] w-[400px] mt-[50px]" src="{{URL::asset('/images/contact.jpg')}}">
        </div>
        </div>
   

    <!-- Bottom Contact Info -->
    <div class="mt-8 max-w-5xl mx-auto p-6   bg-white rounded-lg shadow-lg">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 ">
            <!-- Call Us Section -->
            <div class="text-center shadow-xl mb-[20px]">
                
                <h3 class="text-xl font-medium text-gray-800">CALL US</h3>
                <p class="text-gray-600 mt-2">(977) 567-891</p>
                <p class="text-gray-600">(977) 987-654</p>
            </div>

            <!-- Location Section -->
            <div class="text-center shadow-lg">
                
                <h3 class="text-xl font-medium text-gray-800">LOCATION</h3>
                <p class="text-gray-600 mt-2">Chitwan</p>
                <p class="text-gray-600">Bharatpur-02</p>
            </div>

            <!-- Hours Section -->
            <div class="text-center  shadow-lg">
                    <h3 class="text-xl font-medium text-gray-800">LOCATION</h3>
                    <p class="text-gray-600 mt-2">Chitwan</p>
                    <p class="text-gray-600">92103-9000</p>
                    
            </div>
            </div>
        </div>
    </section>
    @endsection
