<?php
require 'database.php';

$id = $_GET['id'];
$setting = $pdo->query("SELECT * FROM settings WHERE id = $id")->fetch(PDO::FETCH_ASSOC);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $value = $_POST['value'];

    $pdo->query("UPDATE settings SET name = '$name', value = '$value' WHERE id = $id");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Setting</title>
</head>
<body>
    <h1>Edit Setting</h1>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" value="<?= htmlspecialchars($setting['name']) ?>" required>
        <br>
        <label>Value:</label>
        <input type="text" name="value" value="<?= htmlspecialchars($setting['value']) ?>" required>
        <br>
        <button type="submit">Save</button>
    </form>
    <a href="index.php">Back to Settings</a>
</body>
</html>
