// // Function to toggle the visibility of the farmer proofs section
// document.getElementById('userRole').addEventListener('change', function(){
//     var farmerProofs = document.getElementById('farmerProofs');
//     // Show the section if the selected role is 'farmer', hide otherwise
//     if (this.value === 'farmer') {
//         farmerProofs.style.display = 'block';
//     } else {
//         farmerProofs.style.display = 'none';
//     }
// });
// {
// function myFunction() {
//     alert("Button was clicked!");
// }}

//     document.addEventListener("DOMContentLoaded", function() {
//         const userRoleSelect = document.getElementById("userRole");
//         const farmerProofsDiv = document.getElementById("farmerProofs");

//         userRoleSelect.addEventListener("change", function() {
//             if (this.value === "farmer") {
//                 farmerProofsDiv.style.display = "block";
//             } else {
//                 farmerProofsDiv.style.display = "none";
//             }
//         });
//     });
// // btn click js
// document.addEventListener('DOMContentLoaded', () => {
//     const filterButtons = document.querySelectorAll('.filter-btn');
//     const products = document.querySelectorAll('.product');

//     filterButtons.forEach(button => {
//         button.addEventListener('click', () => {
//             // Remove 'active' class from all buttons
//             filterButtons.forEach(btn => btn.classList.remove('active'));
//             // Add 'active' class to the clicked button
//             button.classList.add('active');

//             // Get the filter type from data-filter attribute
//             const filter = button.getAttribute('data-filter');
            
//             // Show/hide products based on the filter type
//             products.forEach(product => {
//                 if (filter === 'all' || product.classList.contains(filter)) {
//                     product.style.display = 'block';
//                 } else {
//                     product.style.display = 'none';
//                 }
//             });
//         });
//     });
// });

// // farmer dashboard 

//     // document.addEventListener('DOMContentLoaded', function() {
//     //     // Check user role from a stored session or a request to an authentication service
//     //     const userRole = sessionStorage.getItem('userRole'); // Assume user role is stored in session storage

//     //     if (userRole !== 'farmer') {
//     //         alert('You are not authorized to access this page.');
//     //         window.location.href = 'index.html'; // Redirect to home page or a login page
//     //     }
//     // });
//     // <!-- Example snippet from the `index.html` -->
//         document.addEventListener("DOMContentLoaded", function() {
//             // Assuming there is some logic here to check if the user is authenticated
//             // For example, fetching user details or a protected resource
//             fetch('/api/check-auth', {
//                 headers: {
//                     'Authorization': `Bearer ${localStorage.getItem('token')}`
//                 }
//             })
//             .then(response => {
//                 if (!response.ok) {
//                     throw new Error('Not authorized');
//                 }
//                 return response.json();
//             })
//             .then(data => {
//                 // Handle authenticated user's data
//                 console.log('User is authenticated', data);
//             })
//             .catch(error => {
//                 console.error('Error:', error);
//                 alert('You are not authorized');
//                 // Optionally, redirect to login page or show a login modal
//             });
//         });
    

    // Wait for the DOM to fully load
    document.addEventListener('DOMContentLoaded', function () {
        // Get the elements
        const userRoleSelect = document.getElementById('userRole');
        const farmerModalSection = document.getElementById('farmerModal');

        // Function to show or hide the farmer section
        function toggleFarmerSection() {
            if (userRoleSelect.value === 'farmer') {
                farmerModalSection.style.display = 'block'; // Show the farmer section
            } else {
                farmerModalSection.style.display = 'none'; // Hide the farmer section
            }
        }

        // Attach the change event listener to the dropdown
        userRoleSelect.addEventListener('change', toggleFarmerSection);

        // Initial call to set the correct visibility on page load
        toggleFarmerSection();
    });
// cart
    document.addEventListener('DOMContentLoaded', function() {
        const cart = [];
        const cartCount = document.querySelector('.fa-shopping-bag .position-absolute');

        function updateCartCount() {
            cartCount.textContent = cart.length;
        }

        document.querySelectorAll('.add-to-cart').forEach(button => {
            button.addEventListener('click', function() {
                const productName = this.parentElement.querySelector('h5').textContent;
                cart.push(productName);
                updateCartCount();
                alert(`${productName} has been added to your cart`);
            });
        });
    });

    

