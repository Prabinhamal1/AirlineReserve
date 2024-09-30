
document.addEventListener('DOMContentLoaded', function () {
    // Get the button and the dropdown menu elements
    const dropdownButton = document.getElementById('dropdownDefaultButton');
    const dropdownMenu = document.getElementById('dropdown');
    
    // Add an event listener to the button to toggle the dropdown
    dropdownButton.addEventListener('click', function () {
    dropdownMenu.classList.toggle('hidden'); // Show/hide the dropdown menu
    });
    
    // Close the dropdown menu when clicking outside of it
    document.addEventListener('click', function (event) {
    if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
      dropdownMenu.classList.add('hidden'); // Hide the menu if clicked outside
    }
    });
    });