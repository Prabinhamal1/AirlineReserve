document.addEventListener('DOMContentLoaded', function() {
  const dropdown = document.getElementById('dropdown');
  const profileBtn = document.getElementById('profileBtn');
  const decrementBtn = document.getElementById('decrementBtn');
  const incrementBtn = document.getElementById('incrementBtn');
  const passengerCount = document.getElementById('passengerCount');
  const roundTripBtn = document.getElementById('roundTripBtn');
  const oneWayBtn = document.getElementById('oneWayBtn');
  const returnDiv = document.getElementById('returnDiv');

  if (profileBtn) {
      profileBtn.addEventListener('click', function() {
          dropdown.classList.toggle('hidden');
      });
  }

  window.addEventListener('click', function(e) {
      if (!profileBtn.contains(e.target) && !dropdown.contains(e.target)) {
          dropdown.classList.add('hidden');
      }
  });

  if (decrementBtn && incrementBtn && passengerCount) {
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
  }

  if (roundTripBtn && oneWayBtn && returnDiv) {
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
  }
});
// document.addEventListener('DOMContentLoaded', () => {
//     const slidesContainer = document.querySelector('.slides');
//     const slides = document.querySelectorAll('.slides img');
//     const totalSlides = slides.length;
//     let currentIndex = 0;
//     const slideInterval = 3000; // Time in milliseconds for each slide

//     function updateSlidePosition() {
//         // Calculate the new translateX value to move slides left
//         const offset = -currentIndex * 100;
//         slidesContainer.style.transform = `translateX(${offset}%)`;
//     }

//     function nextSlide() {
//         // Increment currentIndex and loop back to 0 if we reach the last slide
//         currentIndex = (currentIndex + 1) % totalSlides;
//         updateSlidePosition();
//     }

//     // Start automatic sliding
//     setInterval(nextSlide, slideInterval);
// });


  const today = new Date().toISOString().split('T')[0];
  document.getElementById("depart").setAttribute("min", today);
  document.getElementById("return").setAttribute("min", today);
  document.getElementById("depart").setAttribute("value", today);
  document.getElementById("return").setAttribute("value", today);

  
