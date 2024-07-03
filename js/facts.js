<<<<<<< HEAD
// JavaScript to increment the counter

document.addEventListener("DOMContentLoaded", function() {
    // Initialize the counter value
    let counterValue = 1;

    // Reference the counter element in the DOM
    const counterElement = document.getElementById("counter");

    // Function to increment the counter
    function incrementCounter() {
        counterValue++; // Increment the counter value
        counterElement.textContent = counterValue; // Update the counter display
    }

    // Set the counter to increment every 1 second (1000 milliseconds)
    setInterval(incrementCounter, 1000);
});
=======
// JavaScript to increment the counter

document.addEventListener("DOMContentLoaded", function() {
    // Initialize the counter value
    let counterValue = 1;

    // Reference the counter element in the DOM
    const counterElement = document.getElementById("counter");

    // Function to increment the counter
    function incrementCounter() {
        counterValue++; // Increment the counter value
        counterElement.textContent = counterValue; // Update the counter display
    }

    // Set the counter to increment every 1 second (1000 milliseconds)
    setInterval(incrementCounter, 1000);
});
>>>>>>> 12bc8e4a06424d7e873e5c4240b2596fa0e12800
