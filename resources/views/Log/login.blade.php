@vite(['resources/css/app.css','resources/js/front.js'])
<div class="w-full h-full  flex justify-center item-center">
<div class="flex flex-col w-[1000px]  justify-center font-[sans-serif] sm:h-screen p-4">
    <div class="w-[500px] h-[500px] mx-auto bg-white border border-gray-300 rounded-2xl p-8">
      <div class="text-center items-center flex flex-col mb-12">
        <strong class="text-3xl">Login</strong>
        <a href="javascript:void(0)">
            <img class="h-[50px] flex items-center" src="{{URL::asset('/images/f.png')}}" alt="logo" class='w-40 inline-block' />
        </a>
      </div>

      <form>
        <div class="space-y-6 ">
          
          <div>
            <label class="text-gray-800 text-sm mb-2 block">Email Id</label>
            <input name="email" type="text" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 h-[40px] rounded-md outline-blue-500" placeholder="Enter email" />
          </div>
          <div>
            <label class="text-gray-800 text-sm mb-2 block">Password</label>
            <input name="password" type="password" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3  h-[40px] rounded-md outline-blue-500" placeholder="Enter password" />
          </div> 
      

        <div class="mt-10px">
          <button type="button" class="w-full py-3 px-4 text-sm tracking-wider font-semibold rounded-md \ text-white h-[40px] bg-blue-600 hover:bg-blue-700 focus:outline-none">
           Login
          </button>
        </div>
        <p class="text-gray-800 text-sm mt-6 text-start"> <a href="/forget" class="text-blue-600 font-semibold hover:underline ml-1">Forget Password</a></p>
        <p class="text-gray-800 text-sm mt-6 text-center">Create an account? <a href="/register" class="text-blue-600 font-semibold hover:underline ml-1">Signup here</a></p>
      </form>
    </div>
  </div>
  </div>