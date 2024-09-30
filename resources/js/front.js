const dropdown = document.getElementById('dropdown');

        // Toggle the dropdown when the profile button is clicked
        profileBtn.addEventListener('click', function() {
            dropdown.classList.toggle('hidden');
        });

        // Close the dropdown if clicked outside
        window.addEventListener('click', function(e) {
            if (!profileBtn.contains(e.target) && !dropdown.contains(e.target)) {
                dropdown.classList.add('hidden');
            }
     });
  // Handle passenger increment and decrement
  const decrementBtn = document.getElementById('decrementBtn');
  const incrementBtn = document.getElementById('incrementBtn');
  const passengerCount = document.getElementById('passengerCount');
  
  decrementBtn.addEventListener('click', () => {
    let currentValue = parseInt(passengerCount.value);
    if (currentValue > 1) {
      passengerCount.value = currentValue - 1;
    }
  });

  incrementBtn.addEventListener('click', () => {
    let currentValue = parseInt(passengerCount.value);
    passengerCount.value = currentValue + 1;
  });

  // Handle round trip and one way trip switching
  const roundTripBtn = document.getElementById('roundTripBtn');
  const oneWayBtn = document.getElementById('oneWayBtn');
  const returnDiv = document.getElementById('returnDiv');

  roundTripBtn.addEventListener('click', () => {
    roundTripBtn.classList.add('bg-gray-600', 'text-white');
    roundTripBtn.classList.remove('text-gray-400');
    oneWayBtn.classList.add('text-gray-400');
    oneWayBtn.classList.remove('bg-gray-600', 'text-white');
    returnDiv.classList.remove('hidden');
  });

  oneWayBtn.addEventListener('click', () => {
    oneWayBtn.classList.add('bg-gray-600', 'text-white');
    oneWayBtn.classList.remove('text-gray-400');
    roundTripBtn.classList.add('text-gray-400');
    roundTripBtn.classList.remove('bg-gray-600', 'text-white');
    returnDiv.classList.add('hidden');
  });

