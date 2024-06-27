<?php
// Connect to the database
$servername = "localhost";
$username = "root"; // Change to your DB username
$password = ""; // Change to your DB password
$dbname = "om";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['name'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$email = $_POST['email'];
$role = $_POST['userRole'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// File uploads for farmers
$farm_proof = isset($_FILES['farmProof']) ? file_get_contents($_FILES['farmProof']['tmp_name']) : null;
$farmer_photo = isset($_FILES['farmerPhoto']) ? file_get_contents($_FILES['farmerPhoto']['tmp_name']) : null;

// Prepare SQL and bind parameters
$stmt = $conn->prepare("INSERT INTO users (name, phone, address, email, role, farm_proof, farmer_photo, password_hash) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssssss", $name, $phone, $address, $email, $role, $farm_proof, $farmer_photo, $hashed_password);

// Execute the query
if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
