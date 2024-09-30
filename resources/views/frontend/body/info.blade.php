@extends('frontend.layout.master')
@section('fronts-content')


    <div class="bg-[#5484a8] p-4 gap-1">
        <div class="flex justify-between items-center bg-white shadow-md p-4 rounded-md">
          <!-- Logo and Airline Name -->
          <div class="flex items-center">
            <img src="{{URL::asset('/images/f.png')}}" alt="Buddha Air" class="h-8 mr-2">
            <span class="font-semibold text-lg text-blue-600">Moon Air</span>
          </div>
          
          <!-- Flight Info -->
          <div class="flex space-x-8 ">
            <div class="text-sm">
              <span class="block text-gray-500">From</span>
              <span class="font-semibold text-blue-600">KTM KATHMANDU</span>
            </div>
            <div>
                <img class="h-[40px]" src="{{URL::asset('/images/e.svg')}}" alt="">
            </div>
            <div class="text-sm">
              <span class="block text-gray-500">To</span>
              <span class="font-semibold text-blue-600">BHR BHARATPUR (CHITWAN)</span>
            </div>
            <div class="text-sm">
              <span class="block text-gray-500">Departure Date</span>
              <span class=" text-blue-600">19-Sep-2024</span>
            </div>
            <div>
                <img class="h-[30px] max-w-max pt-[10px]" src="{{URL::asset('/images/u.svg')}}" alt="">
            </div>
            <div class="text-sm">
              <span class="block text-gray-500">Return Date</span>
              <span class="  text-blue-600">One Way</span>
            </div>
            <div class="text-sm">
              <span class="block text-gray-500">Passenger Type</span>
              <span class=" text-blue-600">1 Adult</span>
            </div>
          </div>
      
          <!-- Modify Search Button -->
          <div class="mr-[40px]">
            <button class="bg-yellow-500 text-white font-semibold py-2 px-4 rounded-md">
              Modify Search
            </button>
          </div>
        </div>
        <section class="grid grid-rows-2  m-10 ">
            <!-- Flight Information -->
            <div class="flex items-center justify-stretch mr-2">
              <!-- Airline Logo -->
              <div class="flex items-center h-[100px] w-[150px] pt-[20px] flex-col  shadow-2xl rounded-l-xl bg-white">
                <!-- Placeholder for airline logo -->
                <div><span class="text-2xl">🕊️</span></div>
                <div class="text-sm font-semibold">U4 357</div>
              </div>
              <!-- Flight Number and Route -->
              <div class="flex flex-row text-center gap-[40px] w-[500px] shadow-2xl mx-[5px]   bg-white">
                
                <div class="text-sm font-semibold flex flex-col items-center px-[30px] h-[100px] py-[25px]">
                    <span>Kathmandu</span>
                    <span class="pt-[0px]">12:00</span>
                </div>
                <div>
                  <img class="h-[10px] max-w-max" src="{{URL::asset('/images/line.png')}}" alt="">
                </div>
                 
            


              <!-- Destination -->
              <div class="text-sm font-semibold flex flex-col items-center px-[140px] h-[100px] py-[25px]">
                <span>Kathmandu</span>
                <span class="pt-[10px]">12:00</span>
                </div>
              </div>

          
            <!-- Baggage Information -->
            <div class="flex items-center shadow-2xl h-[100px] w-[350px] gap-9 rounded-e-2xl   bg-white">
              
              <div class="text-center px-[20px] grid grid-cols-2 h-[50px]">
                <div class=""><img class=" ml-[10px] bg-[#5484a8] h-[50px] w-[40px] shadow-2xl pt-[10px] rounded-lg border border-l-white" src="{{URL::asset('/images/suicase.svg')}}" alt=""></div>
                <div class="ml-[10px]">
                <p class="text-sm font-semibold">25 KG</p>
                <p class="text-black">Baggage</p>
                </div>
              </div>
              <div class="text-center px-[20px] grid grid-cols-2 ">
                <div class=""><img class=" mt-[7px] bg-[#5484a8] h-[50px] w-[40px] shadow-2xl rounded-lg border border-l-white" src="{{URL::asset('/images/bagage.svg')}}" alt=""></div>
                <div>
                <p class="text-sm font-semibold">5 KG</p>
                <p class="text-black">Hand Carry</p>
              </div>
              </div>
            </div>
          
            <!-- Price Section -->
            <div class="flex items-center m-[10px] h-[100px] w-[300px] shadow-2xl  bg-white rounded-2xl">
             <button>
              <div class="text-center px-[60px]">
                <div class="text-lg font-bold text-blue-600">NPR 4,628.48/-</div>
                <span class="text-gray-400 line-through text-sm">NPR 4,685.48</span>
                
                <span class="text-sm text-green-600">Refundable</span>
              </div>
            </button>
            </div>

            
        </div>
        <div class="flex items-center justify-stretch ">
            <!-- Airline Logo -->
            <div class="flex items-center h-[100px] w-[150px] pt-[20px] flex-col  shadow-2xl rounded-l-xl bg-white">
              <!-- Placeholder for airline logo -->
              <div><span class="text-2xl">🕊️</span></div>
              <div class="text-sm font-semibold">U4 357</div>
            </div>
            <!-- Flight Number and Route -->
            <div class="flex flex-row text-center gap-[40px] w-[500px] shadow-2xl mx-[5px]   bg-white">
              
              <div class="text-sm font-semibold flex flex-col items-center px-[30px] h-[100px] py-[25px]">
                  <span>Kathmandu</span>
                  <span class="pt-[0px]">12:00</span>
              </div>
              <div class="border-t-2 border-dashed border-gray-400"></div>


            <!-- Destination -->
            <div class="text-sm font-semibold flex flex-col items-center px-[140px] h-[100px] py-[25px]">
              <span>Kathmandu</span>
              <span class="pt-[10px]">12:00</span>
              </div>
            </div>

        
            <div class="flex items-center shadow-2xl h-[100px] w-[350px] gap-9 rounded-e-2xl   bg-white">
              
              <div class="text-center px-[20px] grid grid-cols-2 h-[50px]">
                <div class=""><img class=" ml-[10px] bg-[#5484a8] h-[50px] w-[40px] shadow-2xl pt-[10px] rounded-lg border border-l-white" src="{{URL::asset('/images/suicase.svg')}}" alt=""></div>
                <div class="ml-[10px]">
                <p class="text-sm font-semibold">25 KG</p>
                <p class="text-black">Baggage</p>
                </div>
              </div>
              <div class="text-center px-[20px] grid grid-cols-2 ">
                <div class=""><img class=" mt-[7px] bg-[#5484a8] h-[50px] w-[40px] shadow-2xl rounded-lg border border-l-white" src="{{URL::asset('/images/bagage.svg')}}" alt=""></div>
                <div>
                <p class="text-sm font-semibold">5 KG</p>
                <p class="text-black">Hand Carry</p>
              </div>
              </div>
            </div>
        
          <!-- Price Section -->
          <div class="flex items-center m-[10px] h-[100px] w-[300px] shadow-2xl  bg-white rounded-2xl">
           <button>
            <div class="text-center px-[60px]">
              <div class="text-lg font-bold text-blue-600">NPR 4,628.48/-</div>
              <span class="text-gray-400 line-through text-sm">NPR 4,685.48</span>
              
              <span class="text-sm text-green-600">Refundable</span>
            </div>
          </button>
          </div>


          
      </div>
      <div class="flex items-center justify-stretch">
        <!-- Airline Logo -->
        <div class="flex items-center h-[100px] w-[150px] pt-[20px] flex-col  shadow-2xl rounded-l-xl bg-white">
          <!-- Placeholder for airline logo -->
          <div><span class="text-2xl">🕊️</span></div>
          <div class="text-sm font-semibold">U4 357</div>
        </div>
        <!-- Flight Number and Route -->
        <div class="flex flex-row text-center gap-[40px] w-[500px] shadow-2xl mx-[5px]   bg-white">
          
          <div class="text-sm font-semibold flex flex-col items-center px-[30px] h-[100px] py-[25px]">
              <span>Kathmandu</span>
              <span class="pt-[0px]">12:00</span>
          </div>
          <div class="border-t-2 border-dashed border-gray-400"></div>


        <!-- Destination -->
        <div class="text-sm font-semibold flex flex-col items-center px-[140px] h-[100px] py-[25px]">
          <span>Kathmandu</span>
          <span class="pt-[10px]">12:00</span>
          </div>
        </div>

    
      <!-- Baggage Information -->
      <div class="flex items-center shadow-2xl h-[100px] w-[350px] gap-9 rounded-e-2xl   bg-white">
              
        <div class="text-center px-[20px] grid grid-cols-2 h-[50px]">
          <div class=""><img class=" ml-[10px] bg-[#5484a8] h-[50px] w-[40px] shadow-2xl pt-[10px] rounded-lg border border-l-white" src="{{URL::asset('/images/suicase.svg')}}" alt=""></div>
          <div class="ml-[10px]">
          <p class="text-sm font-semibold">25 KG</p>
          <p class="text-black">Baggage</p>
          </div>
        </div>
        <div class="text-center px-[20px] grid grid-cols-2 ">
          <div class=""><img class=" mt-[7px] bg-[#5484a8] h-[50px] w-[40px] shadow-2xl rounded-lg border border-l-white" src="{{URL::asset('/images/bagage.svg')}}" alt=""></div>
          <div>
          <p class="text-sm font-semibold">5 KG</p>
          <p class="text-black">Hand Carry</p>
        </div>
        </div>
      </div>
    
      <!-- Price Section -->
      <div class="flex items-center m-[10px] h-[100px] w-[300px] shadow-2xl  bg-white rounded-2xl">
       <button>
        <div class="text-center px-[60px]">
          <div class="text-lg font-bold text-blue-600">NPR 4,628.48/-</div>
          <span class="text-gray-400 line-through text-sm">NPR 4,685.48</span>
          
          <span class="text-sm text-green-600">Refundable</span>
        </div>
      </button>
      </div>
      </div>
      <div class="flex items-center justify-stretch ">
        <!-- Airline Logo -->
        <div class="flex items-center h-[100px] w-[150px] pt-[20px] flex-col  shadow-2xl rounded-l-xl bg-white">
          <!-- Placeholder for airline logo -->
          <div><span class="text-2xl">🕊️</span></div>
          <div class="text-sm font-semibold">U4 357</div>
        </div>
        <!-- Flight Number and Route -->
        <div class="flex flex-row text-center gap-[40px] w-[500px] shadow-2xl mx-[5px]   bg-white">
          
          <div class="text-sm font-semibold flex flex-col items-center px-[30px] h-[100px] py-[25px]">
              <span>Kathmandu</span>
              <span class="pt-[0px]">12:00</span>
          </div>
          <div class="border-t-2 border-dashed border-gray-400"></div>


        <!-- Destination -->
        <div class="text-sm font-semibold flex flex-col items-center px-[140px] h-[100px] py-[25px]">
          <span>Kathmandu</span>
          <span class="pt-[10px]">12:00</span>
          </div>
        </div>

    
      <!-- Baggage Information -->
      <div class="flex items-center shadow-2xl h-[100px] w-[350px] gap-9 rounded-e-2xl   bg-white">
              
        <div class="text-center px-[20px] grid grid-cols-2 h-[50px]">
          <div class=""><img class=" ml-[10px] bg-[#5484a8] h-[50px] w-[40px] shadow-2xl pt-[10px] rounded-lg border border-l-white" src="{{URL::asset('/images/suicase.svg')}}" alt=""></div>
          <div class="ml-[10px]">
          <p class="text-sm font-semibold">25 KG</p>
          <p class="text-black">Baggage</p>
          </div>
        </div>
        <div class="text-center px-[20px] grid grid-cols-2 ">
          <div class=""><img class=" mt-[7px] bg-[#5484a8] h-[50px] w-[40px] shadow-2xl rounded-lg border border-l-white" src="{{URL::asset('/images/bagage.svg')}}" alt=""></div>
          <div>
          <p class="text-sm font-semibold">5 KG</p>
          <p class="text-black">Hand Carry</p>
        </div>
        </div>
      </div>
      <!-- Price Section -->
      <div class="flex items-center m-[10px] h-[100px] w-[300px] shadow-2xl  bg-white rounded-2xl">
       <button>
        <div class="text-center px-[60px]">
          <div class="text-lg font-bold text-blue-600">NPR 4,628.48/-</div>
          <span class="text-gray-400 line-through text-sm">NPR 4,685.48</span>
          
          <span class="text-sm text-green-600">Refundable</span>
        </div>
      </button>
      </div>


      
  </div>
  <div class="flex items-center justify-stretch ">
    <!-- Airline Logo -->
    <div class="flex items-center h-[100px] w-[150px] pt-[20px] flex-col  shadow-2xl rounded-l-xl bg-white">
      <!-- Placeholder for airline logo -->
      <div><span class="text-2xl">🕊️</span></div>
      <div class="text-sm font-semibold">U4 357</div>
    </div>
    <!-- Flight Number and Route -->
    <div class="flex flex-row text-center gap-[40px] w-[500px] shadow-2xl mx-[5px]   bg-white">
      
      <div class="text-sm font-semibold flex flex-col items-center px-[30px] h-[100px] py-[25px]">
          <span>Kathmandu</span>
          <span class="pt-[0px]">12:00</span>
      </div>
      <div class="border-t-2 border-dashed border-gray-400"></div>


    <!-- Destination -->
    <div class="text-sm font-semibold flex flex-col items-center px-[140px] h-[100px] py-[25px]">
      <span>Kathmandu</span>
      <span class="pt-[10px]">12:00</span>
      </div>
    </div>


  <!-- Baggage Information -->
  <div class="flex items-center shadow-2xl h-[100px] w-[350px] gap-9 rounded-e-2xl   bg-white">
              
    <div class="text-center px-[20px] grid grid-cols-2 h-[50px]">
      <div class=""><img class=" ml-[10px] bg-[#5484a8] h-[50px] w-[40px] shadow-2xl pt-[10px] rounded-lg border border-l-white" src="{{URL::asset('/images/suicase.svg')}}" alt=""></div>
      <div class="ml-[10px]">
      <p class="text-sm font-semibold">25 KG</p>
      <p class="text-black">Baggage</p>
      </div>
    </div>
    <div class="text-center px-[20px] grid grid-cols-2 ">
      <div class=""><img class=" mt-[7px] bg-[#5484a8] h-[50px] w-[40px] shadow-2xl rounded-lg border border-l-white" src="{{URL::asset('/images/bagage.svg')}}" alt=""></div>
      <div>
      <p class="text-sm font-semibold">5 KG</p>
      <p class="text-black">Hand Carry</p>
    </div>
    </div>
  </div>

  <!-- Price Section -->
  <div class="flex items-center m-[10px] h-[100px] w-[300px] shadow-2xl  bg-white rounded-2xl">
   <button>
    <div class="text-center px-[60px]">
      <div class="text-lg font-bold text-blue-600">NPR 4,628.48/-</div>
      <span class="text-gray-400 line-through text-sm">NPR 4,685.48</span>
      
      <span class="text-sm text-green-600">Refundable</span>
    </div>
  </button>
  </div>
</div>
</section>      
</div>
<div class="relative">
  <div class="fixed bottom-0 left-0 right-0">
  <div class="w-[1500px] bg-blue-500 flex justify-between rounded-lg h-[120px]">
    <div class="pl-[90px] py-[3px]">
        <p class="text-white py-[15px] text-[20px]">Departure Flight</p>
        <h1 class="text-white text-[20px] font-semibold py-[px]"><span>KATHMANDU(KTM)</span> <span>TO </span><span>(BHR)</span</h1>
        <p class="text-white"><span>(CHITWAN) </span> <span> (BHR)</span></p>
    </div>
    <div class="flex">
        <div class="grid grid-rows-3 pt-[30px] pr-[30px]">
            <div class="text-white">Refundable</div>
            <div class="text-white font-bold text-xl" >NPR 4,628.48/-</div>
        
        </div>
        <div class="mr-[40px] pt-[35px] pr-[40px]">
            <button class="bg-yellow-500 text-white font-semibold py-2 px-4 rounded-md w-[200px]">
                 Continue   
            </button>
        </div>
      </div>
</div>

</div>
@endsection
      

