<?php
include 'db.php';

$id = $_GET['id'];
$result = $conn->query("SELECT * FROM products WHERE id=$id");
$product = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link rel="stylesheet" href="./css/farmer.css">
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <form action="update_product.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $product['id']; ?>">
            <input type="text" name="name" value="<?php echo $product['name']; ?>" required><br>
            <textarea name="description" required><?php echo $product['description']; ?></textarea><br>
            <input type="number" step="0.01" name="price" value="<?php echo $product['price']; ?>" required><br>
            <input type="number" name="quantity" value="<?php echo $product['quantity']; ?>" required><br>
            <input type="file" name="image" accept="image/*"><br>
            <img src="<?php echo $product['image_url']; ?>" width="100"><br>
            <button type="submit">Update Product</button>
        </form>
    </div>
</body>
</html>

<?php
$conn->close();
?>
