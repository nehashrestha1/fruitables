<?php
// db.php
$servername = "localhost"; // Update with your actual server name
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "om"; // The name of the database

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
