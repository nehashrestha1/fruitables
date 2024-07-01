<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Dashboard</title>
    <link rel="stylesheet" href="./css/farmer.css">
</head>
<body>
    <div class="container">
        <h1>Farmer Dashboard</h1>
        
        <h2>Add Product</h2>
        <form action="add_product.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="Product Name" required><br>
            <textarea name="description" placeholder="Product Description" required></textarea><br>
            <input type="number" step="0.01" name="price" placeholder="Price" required><br>
            <input type="number" name="quantity" placeholder="Quantity" required><br>
            <input type="file" name="image" accept="image/*"><br>
            <button type="submit">Add Product</button>
        </form>

        <h2>Product List</h2>
        <?php
        include 'db.php';
        $result = $conn->query("SELECT * FROM products");
        if ($result->num_rows > 0) {
            echo "<table>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                        <td>{$row['name']}</td>
                        <td>{$row['description']}</td>
                        <td>{$row['price']}</td>
                        <td>{$row['quantity']}</td>
                        <td><img src='{$row['image_url']}' width='50'></td>
                        <td>
                            <a href='edit_product.php?id={$row['id']}'>Edit</a> |
                            <a href='delete_product.php?id={$row['id']}'>Delete</a>
                        </td>
                      </tr>";
            }
            echo "</table>";
        } else {
            echo "<p>No products found.</p>";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
