<?php
require('../db.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email != "" && $password != "") {
        // Make sure to properly escape user input to prevent SQL injection
        $email = mysqli_real_escape_string($conn, $email);

        // Query the database for the user
        $query = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $query);

        // Check if the query returns exactly one row
        if ($result && $result->num_rows === 1) {
            $user = $result->fetch_assoc();

            // Verify the password
            if (password_verify($password, $user["password"])) {
                session_start();
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['email'] = $user['email'];

                // Redirect to farmer_dashboard.php
                header("Location: ../farmer_dashboard.php?msg=login_success");
                exit; // Important to stop script execution after redirection
            } else {
                // Incorrect password
                header("Location: ../index.php?msg=password_error");
                exit; // Important to stop script execution after redirection
            }
        } else {
            // User not found or multiple users found
            header("Location: ../index.php?msg=login_failed");
            exit; // Important to stop script execution after redirection
        }
    } else {
        // If fields are empty
        echo "All fields are necessary.";
        header('Refresh: 1; url=../index.php');
        exit; // Important to stop script execution after redirection
    }
}
?>
