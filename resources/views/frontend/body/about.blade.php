
@extends('frontend.layout.main')
@section('front_content')
<div class="shadow-lg px-">
    <div class="max-w-[1400px] py-[20px]">
        <div class="text-center px-[30px] flex">
            <div class="basis-[10%]">
                <img class="h-[100px]  bg-[#f4f1eb]" src="{{URL::asset('/images/a.png')}}" alt="">
            </div>
            
            <div class="basis-[90%]" >
            <h1 class="text-[50px] bg-[#f4f1eb] font-bold px-[20px]">ABOUT</h1>
            </div>
        </div>
        <div class="py-[20px]">
            <p class="text-wrap px-[30px] py-[10px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus enim laudantium veritatis culpa aperiam repellendus rem incidunt quae aliquam asperiores quod voluptatum ullam, ipsa excepturi distinctio, ex neque nulla aspernatur! Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime eaque dolor sapiente consequuntur asperiores unde accusamus cupiditate labore laborum enim, consectetur deserunt hic, necessitatibus tempora excepturi, obcaecati fugit! Itaque, sint.</p>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 lg::grid-cols-2  gap-10 shadow-lg mx-auto px-[20px] py-[30px]">
            <div class="bg-[#f4f1eb] border border-indigo-900">
                <img class="w-full h-[200px]" src="{{URL::asset('/images/hand.jpg')}}" alt="">
                <div class="px-[30px] mx-auto ">
                    <h1 class=" text-center font-bold py-[5px] bg-blue-600 text-white">Board of promoters</h1>
                    <p class="text-center pb-[20px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quod nisi alias sequi obcaecati soluta ducimus! Quas nemo veniam praesentium nostrum soluta alias excepturi mollitia? Fuga dolores sit aspernatur impedit!</p>
                </div>
            </div>
            <div class="bg-[#f4f1eb] border border-indigo-900">
                <img class=" h-[200px] w-full  " src="{{URL::asset('/images/airport.jpg')}}" alt="">
                <div class="px-[30px] mx-auto  ">
                    <h1 class=" text-center font-bold py-[5px] bg-blue-600 text-white">Aircraft</h1>
                    <p class="text-center pb-[20px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quod nisi alias sequi obcaecati soluta ducimus! Quas nemo veniam praesentium nostrum soluta alias excepturi mollitia? Fuga dolores sit aspernatur impedit!</p>
                </div>
            </div>
            <div class="bg-[#f4f1eb] border border-indigo-900 ">
                <img class=" h-[200px] w-full" src="{{URL::asset('/images/santosh.png')}}" alt="">
                <div class="px-[30px] mx-auto ">
                    <h1 class=" text-center font-bold py-[5px] bg-blue-600 text-white">Management Team</h1>
                    <p class="text-center pb-[20px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore quod nisi alias sequi obcaecati soluta ducimus! Quas nemo veniam praesentium nostrum soluta alias excepturi mollitia? Fuga dolores sit aspernatur impedit!</p>
                </div>
            </div>

        </div>
        <div class="bg-[#afd2ee]  text-center"> 2024</div>

    </div>
    </div>  
@endsection