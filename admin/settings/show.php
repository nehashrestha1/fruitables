<?php
require 'database.php';

$id = $_GET['id'];
$setting = $pdo->query("SELECT * FROM settings WHERE id = $id")->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Show Setting</title>
</head>
<body>
    <h1>Show Setting</h1>
    <p><strong>ID:</strong> <?= htmlspecialchars($setting['id']) ?></p>
    <p><strong>Name:</strong> <?= htmlspecialchars($setting['name']) ?></p>
    <p><strong>Value:</strong> <?= htmlspecialchars($setting['value']) ?></p>
    <a href="index.php">Back to Settings</a>
</body>
</html>
