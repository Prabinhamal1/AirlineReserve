@vite(['resources/css/app.css','resources/js/front.js'])
<div class="w-full h-full  flex justify-center item-center">
<div class="flex flex-col w-[1300px]  justify-center font-[sans-serif] sm:h-screen p-4">
    <div class="md:w-[1000px] md:h-[600px] w-full h-full mx-auto bg-white border border-gray-300 rounded-2xl p-8">
      <div class="text-center items-center flex flex-col mb-12">
        <strong class="text-3xl">Registration</strong>
        <a href="javascript:void(0)">
            <img class="h-[50px] flex items-center" src="{{URL::asset('/images/f.png')}}" alt="logo" class='w-40 inline-block' />
        </a>
      </div>

      <form>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-[20px]">
          <div>
            <label class="text-gray-800 text-sm mb-2 block">Full Name</label>
            <input name="name" type="text" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 h-[40px] rounded-md outline-blue-500" placeholder="Enter email" />
          </div>
          <div>
            <label class="text-gray-800 text-sm mb-2 block">Phone.No</label>
            <input name="phone" type="text" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 h-[40px] rounded-md outline-blue-500" placeholder="Enter email" />
          </div>
          <div>
            <label class="text-gray-800 text-sm mb-2 block">Address</label>
            <input name="address" type="" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 h-[40px] rounded-md outline-blue-500" placeholder="Enter email" />
          </div>
          <div>
            <label class="text-gray-800 text-sm mb-2 block">Email Id</label>
            <input name="email" type="text" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 h-[40px] rounded-md outline-blue-500" placeholder="Enter email" />
          </div>
          <div>
            <label class="text-gray-800 text-sm mb-2 block">Password</label>
            <input name="password" type="password" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3  h-[40px] rounded-md outline-blue-500" placeholder="Enter password" />
          </div>
          <div>
            <label class="text-gray-800 text-sm mb-2 block">Confirm Password</label>
            <input name="cpassword" type="password" class="text-gray-800 bg-white border border-gray-300 w-full text-sm px-4 py-3 h-[40px] rounded-md outline-blue-500" placeholder="Enter confirm password" />
          </div>

          <div class="flex items-center pb-[20px]">
            <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 text-blue-600 focus:ring-blue-500 border-gray-300 rounded" />
            <label for="remember-me" class="text-gray-800 ml-3 block text-sm">
              I accept the <a href="javascript:void(0);" class="text-blue-600 font-semibold hover:underline ml-1">Terms and Conditions</a>
            </label>
          </div>
        </div>

        <div class="mt-10px">
          <button type="button" class="w-full py-3 px-4 text-sm tracking-wider font-semibold rounded-md \ text-white h-[40px] bg-blue-600 hover:bg-blue-700 focus:outline-none">
            Signup
          </button>
        </div>
        <p class="text-gray-800 text-sm mt-6 text-center">Already have an account? <a href="/login" class="text-blue-600 font-semibold hover:underline ml-1">Login here</a></p>
      </form>
    </div>
  </div>
  </div>