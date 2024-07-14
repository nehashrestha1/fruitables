<?php
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM facts WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Fact</title>
</head>
<body>
    <h1>Fact Details</h1>
    <p><strong>Icon:</strong> <?php echo $row['icon']; ?></p>
    <p><strong>Title:</strong> <?php echo $row['title']; ?></p>
    <p><strong>Number:</strong> <?php echo $row['number']; ?></p>
    <p><strong>Status:</strong> <?php echo $row['status']; ?></p>
    <a href="index.php">Back to list</a>
</body>
</html>
