   @extends('Admin.layout.index')
    @section('main-content') 
  <!-- Add Airline Section -->
  <div class=" flex-1 max-w-4xl mx-auto border p-6 mt-10 mb-[40px] h-[400px] bg-white rounded-lg shadow-lg">
    <div class="bg-white p-6 rounded-lg ">
      <!-- Header -->
      <h2 class="text-lg font-bold mb-4">ADD AIRLINE</h2>

      <!-- Form Section -->
      <form class="space-y-6" enctype="multipart/form-data"  action="{{ URL('admin/airline/store') }}" method="post">
        @csrf
        <!-- Name Input -->
        <div class="flex flex-col space-y-2">
          <label for="name" class="text-sm font-medium text-gray-700">Name</label>
          <input type="text" name="name" id="name" class="border border-gray-300 rounded-md p-2 text-sm focus:ring focus:ring-blue-200 focus:border-blue-400" placeholder="Enter airline name" required>
        </div>

        <!-- Code Input -->
        <div class="flex flex-col space-y-2">
          <label for="code" class="text-sm font-medium text-gray-700">Code</label>
          <input type="text" name="code" id="code" class="border border-gray-300 rounded-md p-2 text-sm focus:ring focus:ring-blue-200 focus:border-blue-400" placeholder="Enter airline code" required>
        </div>
        </div>

        <!-- Submit Button -->
        <div class="flex justify-start mt-3 ml-[25px]">
          <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md font-medium">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection
