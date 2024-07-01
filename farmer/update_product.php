<?php
include 'db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$image_url = $_POST['current_image'];

if (!empty($_FILES['image']['name'])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
    $image_url = $target_file;
}

$sql = "UPDATE products SET name='$name', description='$description', price='$price', quantity='$quantity', image_url='$image_url' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Product updated successfully";
} else {
    echo "Error updating product: " . $conn->error;
}

$conn->close();

header("Location: index.php");
?>
