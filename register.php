<!-- Register Modal -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
  </head>
 <body>
    
     <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
         <div class="modal-dialog">
             <div class="modal-content">
                 <div class="modal-header">
                     <h5 class="modal-title" id="registerModalLabel">Register</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
            <div class="modal-body">
                <form id="registerForm">
                    <div class="mb-3">
                        <label for="registerName" class="form-label">Name</label>
                    <input type="name" class="form-control" id="registerName" required>
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
<option value="farmer">Farmer</option>
<option value="customer">Customer</option>
</select>
</div>
<div id="farmerProofs" style="display: none;">
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
<button type="submit" class="btn btn-primary">Register</button>
</form>
</div>
<div class="modal-footer">
    <small>Already have an account? <a href="#" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-dismiss="modal">Login here</a></small>
</div>
</div>
</div>
</div>
<script src="./js/min.js"></script>
</body>
</html>
