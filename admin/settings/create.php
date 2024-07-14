<?php include '../layouts/header.php'; ?>


<!DOCTYPE html>
<html>
<head>
    <title>Create Setting</title>
</head>
<body>
    <h1>Create New Setting</h1>
    <form method="post">
        <label>Name:</label>
        <input type="text" name="name" required>
        <br>
        <label>Value:</label>
        <input type="text" name="value" required>
        <br>
        <button type="submit">Create</button>
    </form>
    <a href="index.php">Back to Settings</a>
</body>
</html>
