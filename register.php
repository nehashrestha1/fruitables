<?php
include 'db.php'; // Ensure db.php includes the mysqli connection setup

if (isset($_POST['register'])) {

    $name = $_POST['name'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $address = $_POST['address'];
    $role = $_POST['role'];

    // Handling file uploads for farmers
    $farm_proof = NULL;
    $farmer_photo = NULL;

    if ($role == 'farmer') {
        $farm_proof = $_FILES['farm_proof']['name'];
        $farmer_photo = $_FILES['farmer_photo']['name'];
        
        // Save uploaded files to the server
        if (!move_uploaded_file($_FILES['farm_proof']['tmp_name'], "uploads/" . $farm_proof)) {
            echo "<div class='alert alert-danger'>Failed to upload farm proof.</div>";
            exit;
        }
        if (!move_uploaded_file($_FILES['farmer_photo']['tmp_name'], "uploads/" . $farmer_photo)) {
            echo "<div class='alert alert-danger'>Failed to upload farmer photo.</div>";
            exit;
        }
    }

    if ($name != "" && $username != "" && $email != "" && $password != "") {
        // Check for duplicate email or username
        $duplicate = "SELECT * FROM users WHERE email='$email' OR username='$username'";
        $duplicate_result = mysqli_query($conn, $duplicate);
        $row = mysqli_num_rows($duplicate_result);

        if ($row == 0) { // Check if no duplicate email or username exists
            $insert = "INSERT INTO users (name, username, email, password, address, role, farm_proof, farmer_photo) 
                       VALUES ('$name', '$username', '$email', '$password', '$address', '$role', '$farm_proof', '$farmer_photo')";
            $result = mysqli_query($conn, $insert);
            if ($result) {
                echo "<div class='alert alert-success'>Registration successful! Redirecting to login page...</div>";
                echo "<meta http-equiv=\"refresh\" content=\"2;URL=login.php\">"; // Redirect to login page after 2 seconds
            } else {
                // If data is not saved, print the error for debugging
                echo "<div class='alert alert-danger'>Data is not submitted: " . mysqli_error($conn) . "</div>";
                header('Refresh: 2; URL=register.php');
            }
        } else {
            echo "<div class='alert alert-warning'>Email or username already exists</div>";
            header('Refresh: 2; URL=register.php');
        }
    } else {
        echo "<div class='alert alert-danger'>All fields are required</div>";
        header('Refresh: 2; URL=register.php');
    }  
    echo "<meta http-equiv=\"refresh\" content=\"2;URL=login.php\">"; // Redirect to login page after 2 seconds
    
}
?>
