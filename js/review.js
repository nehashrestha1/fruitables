<<<<<<< HEAD
let products = [
    { id: 1, name: "Broccoli", description: "Fresh organic broccoli.", price: 120, category: "Vegetable", image: "img/vegetable-item-2.jpg", reviews: [] },
    { id: 2, name: "Pomegranate", description: "Juicy and sweet pomegranates.", price: 400, category: "Fruit", image: "img/anar.jpeg", reviews: [] },
    { id: 3, name: "Curd", description: "Organic curd from fresh milk.", price: 200, category: "Dairy", image: "img/Curd.jpg", reviews: [] }
];

let cart = [];
let isLoggedIn = false;

function displayProducts() {
    const productList = document.getElementById('productList');
    productList.innerHTML = '';
    products.forEach(product => {
        productList.innerHTML += `
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="${product.image}" class="card-img-top" alt="${product.name}">
                    <div class="card-body">
                        <h5 class="card-title">${product.name}</h5>
                        <p class="card-text">${product.description}</p>
                        <p class="card-text"><strong>Rs ${product.price}</strong></p>
                        <button class="btn btn-primary" onclick="addToCart(${product.id})">Add to Cart</button>
                        <button class="btn btn-secondary" onclick="openReviewModal(${product.id})">Rate & Review</button>
                        <div id="reviews-${product.id}">
                            ${product.reviews.map(review => `
                                <div class="review">
                                    <strong>Rating: ${review.rating}</strong>
                                    <p>${review.text}</p>
                                </div>
                            `).join('')}
                        </div>
                    </div>
                </div>
            </div>
        `;
    });
}

function openReviewModal(productId) {
    if (!isLoggedIn) {
        $('#loginModal').modal('show');
        return;
    }
    document.getElementById('reviewProductId').value = productId;
    $('#reviewModal').modal('show');
}

document.getElementById('reviewForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const productId = document.getElementById('reviewProductId').value;
    const rating = document.getElementById('rating').value;
    const reviewText = document.getElementById('review').value;

    const product = products.find(prod => prod.id == productId);
    product.reviews.push({ rating: rating, text: reviewText });

    $('#reviewModal').modal('hide');
    displayProducts();
});

// Existing code for login, addToCart, searchProducts, etc.

document.addEventListener('DOMContentLoaded', displayProducts);

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    // Implement actual login logic here
    if (username === "customer" && password === "password") {
        isLoggedIn = true;
        $('#loginModal').modal('hide');
        alert('Logged in successfully!');
    } else {
        alert('Invalid login credentials.');
    }
});
=======
let products = [
    { id: 1, name: "Broccoli", description: "Fresh organic broccoli.", price: 120, category: "Vegetable", image: "img/vegetable-item-2.jpg", reviews: [] },
    { id: 2, name: "Pomegranate", description: "Juicy and sweet pomegranates.", price: 400, category: "Fruit", image: "img/anar.jpeg", reviews: [] },
    { id: 3, name: "Curd", description: "Organic curd from fresh milk.", price: 200, category: "Dairy", image: "img/Curd.jpg", reviews: [] }
];

let cart = [];
let isLoggedIn = false;

function displayProducts() {
    const productList = document.getElementById('productList');
    productList.innerHTML = '';
    products.forEach(product => {
        productList.innerHTML += `
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="${product.image}" class="card-img-top" alt="${product.name}">
                    <div class="card-body">
                        <h5 class="card-title">${product.name}</h5>
                        <p class="card-text">${product.description}</p>
                        <p class="card-text"><strong>Rs ${product.price}</strong></p>
                        <button class="btn btn-primary" onclick="addToCart(${product.id})">Add to Cart</button>
                        <button class="btn btn-secondary" onclick="openReviewModal(${product.id})">Rate & Review</button>
                        <div id="reviews-${product.id}">
                            ${product.reviews.map(review => `
                                <div class="review">
                                    <strong>Rating: ${review.rating}</strong>
                                    <p>${review.text}</p>
                                </div>
                            `).join('')}
                        </div>
                    </div>
                </div>
            </div>
        `;
    });
}

function openReviewModal(productId) {
    if (!isLoggedIn) {
        $('#loginModal').modal('show');
        return;
    }
    document.getElementById('reviewProductId').value = productId;
    $('#reviewModal').modal('show');
}

document.getElementById('reviewForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const productId = document.getElementById('reviewProductId').value;
    const rating = document.getElementById('rating').value;
    const reviewText = document.getElementById('review').value;

    const product = products.find(prod => prod.id == productId);
    product.reviews.push({ rating: rating, text: reviewText });

    $('#reviewModal').modal('hide');
    displayProducts();
});

// Existing code for login, addToCart, searchProducts, etc.

document.addEventListener('DOMContentLoaded', displayProducts);

document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    // Implement actual login logic here
    if (username === "customer" && password === "password") {
        isLoggedIn = true;
        $('#loginModal').modal('hide');
        alert('Logged in successfully!');
    } else {
        alert('Invalid login credentials.');
    }
});
>>>>>>> 12bc8e4a06424d7e873e5c4240b2596fa0e12800
