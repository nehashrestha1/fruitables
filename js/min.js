// Function to toggle the visibility of the farmer proofs section
document.getElementById('userRole').addEventListener('change', function(){
    var farmerProofs = document.getElementById('farmerProofs');
    // Show the section if the selected role is 'farmer', hide otherwise
    if (this.value === 'farmer') {
        farmerProofs.style.display = 'block';
    } else {
        farmerProofs.style.display = 'none';
    }
});
{
function myFunction() {
    alert("Button was clicked!");
}}

    document.addEventListener("DOMContentLoaded", function() {
        const userRoleSelect = document.getElementById("userRole");
        const farmerProofsDiv = document.getElementById("farmerProofs");

        userRoleSelect.addEventListener("change", function() {
            if (this.value === "farmer") {
                farmerProofsDiv.style.display = "block";
            } else {
                farmerProofsDiv.style.display = "none";
            }
        });
    });

