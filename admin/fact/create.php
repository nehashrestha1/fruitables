<?php
include '../config/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $icon = $_POST['icon'];
    $title = $_POST['title'];
    $number = $_POST['number'];
    $status = $_POST['status'];

    $sql = "INSERT INTO facts (icon, title, number, status) VALUES ('$icon', '$title', '$number', '$status')";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Create Fact</title>
</head>
<body>
    <h1>Create New Fact</h1>
    <form method="POST">
        <label>Icon: </label>
        <input type="text" name="icon" required><br>
        <label>Title: </label>
        <input type="text" name="title" required><br>
        <label>Number: </label>
        <input type="number" name="number" required><br>
        <label>Status: </label>
        <input type="number" name="status" value="1" required><br>
        <input type="submit" value="Create">
    </form>
</body>
</html>
