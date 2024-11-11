
  <nav class="bg-[#1454A9] text-white sticky top-0">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
    <div class="relative flex h-16 items-center justify-between">
      <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
        <!-- Mobile menu button-->
        <button type="button" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white" aria-controls="mobile-menu" aria-expanded="false">
          <span class="absolute -inset-0.5"></span>
          <span class="sr-only">Open main menu</span>
          <!--
            Icon when menu is closed.

            Menu open: "hidden", Menu closed: "block"
          -->
          <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
          <!--
            Icon when menu is open.

            Menu open: "block", Menu closed: "hidden"
          -->
          <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </button>
      </div>
      <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
        <div class="flex flex-shrink-0 items-center">
          <a href="">
          <img class="h-8 w-8 rounded-full " src="{{URL::asset('/images/f.png')}}" alt="Your Company">
          </a>
        </div>
        <div class="hidden sm:ml-6 sm:block">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/home" class="rounded-md px-3 py-2 text-sm font-medium  hover:bg-[#1454A9] hover:text-[#F6D95A]">Home</a>
            @auth
            
              
            
            <a href="/ticket/{id}" class="rounded-md px-3 py-2 text-sm font-medium hover:bg-[#1454A9] hover:text-[#F6D95A]">Tickets</a>
            @endauth
            <a href="/contact" class="rounded-md px-3 py-2 text-sm font-medium hover:bg-[#1454A9] hover:text-[#F6D95A]">Contact</a>
            <a href="/about" class="rounded-md px-3 py-2 text-sm font-medium hover:bg-[#1454A9] hover:text-[#F6D95A]">About</a>
          </div>
        </div>
      </div>
      <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
        @guest
          
       
          <a href="/login" class="rounded-md px-3 py-5 mr-5 text-sm font-medium hover:bg-[#1454A9] hover:text-[#F6D95A]">Login</a>
          @endguest
        <!-- Profile dropdown -->
        <div class="relative ml-3">
          @auth
            
          
          <div class="relative">
              <button id="profileBtn" class="flex items-center space-x-2 focus:outline-none">
                  <img class="h-8 w-8 rounded-full" src="{{URL::asset('/images/img.png')}}" alt="">
              </button>
          </div>
          @endauth

          <!--
            Dropdown menu, show/hide based on menu state.

            Entering: "transition ease-out duration-100"
              From: "transform opacity-0 scale-95"
              To: "transform opacity-100 scale-100"
            Leaving: "transition ease-in duration-75"
              From: "transform opacity-100 scale-100"
              To: "transform opacity-0 scale-95"
          -->
          <div id="dropdown" class="hidden  absolute right-0 mt-2 w-48 bg-white z-50 rounded-lg shadow-lg py-2">
              <!-- Active: "bg-gray-100", Not Active: "" -->
              @auth
                
              
              <a href="#" class="block px-4 py-2 text-sm text-gray-700 z-40" role="menuitem" tabindex="-1" id="user-menu-item-0">{{Auth::user()->name}}</a>
              <a href="{{url('/logout')}}" class="block px-4 py-2 text-sm text-gray-700 z-40" role="menuitem" tabindex="-1" id="user-menu-item-2">logout</a>
              @endauth
          </div>
        </div>
      </div>
    </div> 
  </div>

  <!-- Mobile menu, show/hide based on menu state. -->
  <div class="sm:hidden" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2">
      <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
      <a href="/home" class="block rounded-md px-3 py-2 text-base font-medium hover:bg-[#1454A9] hover:text-[#F6D95A]">Home</a>
      <a href="/info" class="block rounded-md px-3 py-2 text-base font-medium hover:bg-[#1454A9] hover:text-[#F6D95A]">My Flights</a>
      <a href="/ticket" class="block rounded-md px-3 py-2 text-base font-medium hover:bg-[#1454A9] hover:text-[#F6D95A]">Tickets</a>
      <a href="contact" class="block rounded-md px-3 py-2 text-base font-medium hover:bg-[#1454A9] hover:text-[#F6D95A]">Contact</a>
      <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium hover:bg-[#1454A9] hover:text-[#F6D95A]">About</a>
    </div>
  </div>
</nav>






