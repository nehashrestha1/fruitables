<?php require ('config/db.php'); ?>
<!doctype html>
<html lang="en">
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Title</title>
</head>

<body>

    <section>
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <?php
                     if (isset($_POST['register'])) {

                    $name = $_POST['name'];
                    $username = $_POST['username'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $email = $_POST['email'];
                    $role = $_POST['role'];
                    // Handling file uploads for farmers
                    $farm_proof = NULL;
                    $farmer_photo = NULL;
                    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                
                
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

                            // Check for duplicate email
                            $duplicate = "SELECT * FROM users WHERE email='$email' OR username='$username'";
                            $duplicate_result = mysqli_query($conn, $duplicate);
                            $row = mysqli_num_rows($duplicate_result);
                            
                            // Check if no duplicate email exists
                            if ($row == 0) { 
                                $insert = "INSERT INTO users (name, username, phone, address, email, role, farm_proof, farmer_photo, password) 
                                VALUES ('$name', '$username', '$phone', '$address','$email', '$role', '$farm_proof', '$farmer_photo', '$password')";
                                $result = mysqli_query($conn, $insert);
                                if ($result) {
                                    echo "<div class='alert alert-success'>Data is submitted</div>";
                                    echo "<meta http-equiv=\"refresh\" content=\"2;URL=index.php\">";
                                } else {
                                    echo "<div class='alert alert-danger'>Data is not submitted</div>";
                                    header('Refresh: 2; URL=register.php');
                                }
                            } else {
                                echo "<div class='alert alert-warning'>Email or username is already exists</div>";
                                header('Refresh: 2; URL=register.php');
                            }
                        } else {
                            echo "<div class='alert alert-danger'>All fields are required</div>";
                        }

                        // Redirect after 2 seconds
                        header('Refresh: 2; URL=register.php');
                    }
                    ?>

                    <form action="" method="POST" enctype="multipart/form-data">
                        
    <form id="registerForm" action="register.php" method="POST" enctype="multipart/form-data">

<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="registerModalLabel">Register</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="registerForm">
                    <div class="mb-3">
                        <!-- <div data-bs-spy="scroll" data-bs-target="#list-example" data-bs-smooth-scroll="true" class="scrollspy-example" tabindex="0"> -->

                        <label for="registerName" class="form-label">Name</label>
                        <input type="name" class="form-control" id="registerName" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerPhone" class="form-label">Username</label>
                        <input type="username" class="form-control" id="registerusername" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerPhone" class="form-label">Phone</label>
                        <input type="phone" class="form-control" id="registerPhone" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerAddress" class="form-label">Address</label>
                        <input type="address" class="form-control" id="registerAddress" required>
                    </div>
                    <div class="mb-3">
                        <label for="registerEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="registerEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="userRole" class="form-label">Register As</label>
                        <select class="form-select" id="userRole" required>
                            <option value="" disabled selected>Select your role</option>
                            <option value="farmer" data-bs-toggle="modal" data-bs-target="#farmerModal">Farmer
                            </option>
                            <option value="customer">Customer</option>
                        </select>
                    </div>
                    <div id="farmerModal" style="display: none">
                        <div class="mb-3">
                            <label for="farmProof" class="form-label">Farm Registration Proof</label>
                            <input type="file" class="form-control" id="farmProof" accept="image/*,application/pdf">
                        </div>
                        <div class="mb-3">
                            <label for="farmerPhoto" class="form-label">Farmer's Photo</label>
                            <input type="file" class="form-control" id="farmerPhoto" accept="image/*">
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="registerPassword" class="form-label">Password</label>
                        <input type="password" class="form-control" id="registerPassword" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="confirmPassword" required>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Register">
                    <!-- <button type="submit" class="btn btn-primary">Register</button> -->
                </form>
            </div>
            <div class="modal-footer">
                <small>Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal"
                        data-bs-dismiss="modal">Login here</a></small>
            </div>
        </div>
    </div>
</div>
</form>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4"
        crossorigin="anonymous"></script>
</body>

</html>