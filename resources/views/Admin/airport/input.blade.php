
    
    @extends('Admin.layout.index')
    @section('main-content') 

    <div class=" flex-1 max-w-4xl mx-auto border p-6 mt-10 mb-[40px] h-[400px] bg-white rounded-lg shadow-lg">
        <div class="flex justify-between mb-6">
            <h1 class="text-2xl font-semibold text-gray-800">ADD AIRPORT</h1>
            <p class="text-gray-500">Plane / Add Airport</p>
        </div>

        <form action="#" method="POST">
            <div class="grid grid-cols-1 gap-6 sm:grid-cols-1">
                
                <!-- Name field -->
                <div class="flex flex-col">
                    <label for="name" class="text-gray-700">Name</label>
                    <input type="text" id="name" name="name" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1" placeholder="Enter plane name">
                </div>

                <!-- Airline field -->
                <div class="flex flex-col">
                    <label for="airline" class="text-gray-700">City</label>
                    <select id="airline" name="airline" class="mt-1 p-2 border rounded-md shadow-sm focus:outline-none focus:border-indigo-500 focus:ring-indigo-500 focus:ring-1">
                        <option value="None">None</option>
                        <option value="Airline1">Airline 1</option>
                        <option value="Airline2">Airline 2</option>
                    </select>
                </div>

                <!-- Code field -->
                
            </div>

            <!-- Submit Button -->
            <div class="mt-6">
                <button type="submit" class="w-full sm:w-auto px-4 py-2 bg-blue-600 text-white font-semibold rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
    @endsection


