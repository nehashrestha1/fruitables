<?php
include '../config/db.php';

$sql = "SELECT * FROM facts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage Facts</title>
</head>
<body>
    <h1>Facts</h1>
    <a href="create.php">Add New Fact</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Icon</th>
            <th>Title</th>
            <th>Number</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['icon']; ?></td>
            <td><?php echo $row['title']; ?></td>
            <td><?php echo $row['number']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <a href="show.php?id=<?php echo $row['id']; ?>">Show</a>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
