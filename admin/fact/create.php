<?php
// require_once '.Fact.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $fact = new Fact();
    if ($fact->create($title, $description)) {
        header("Location: show.php");
        exit;
    } else {
        echo "Error creating fact!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Add New Fact</title>
</head>
<body>
    <h1>Add New Fact</h1>
    <form method="POST" action="">
        <label for="title">Title:</label><br>
        <input type="text" id="title" name="title" required><br>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" required></textarea><br><br>
        <input type="submit" value="Add Fact">
    </form>
    <a href="index.php">Back to Home</a>
</body>
</html>
