<?php
require_once './models/Fact.php';

$factModel = new Fact();

if ($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $id = $_GET['id'];
    $fact = $factModel->getById($id);

    if (!$fact) {
        echo "Fact not found!";
        exit;
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $description = $_POST['description'];

    if ($factModel->update($id, $title, $description)) {
        header("Location: show.php");
        exit;
    } else {
        echo "Error updating fact!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Edit Fact</title>
</head>
<body>
    <h1>Edit Fact</h1>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo $fact['id']; ?>">
        <label for="title">Title:</label><br>
        <input type="text" name="title" value="<?php echo htmlspecialchars($fact['title']); ?>" required><br>
        <label for="description">Description:</label><br>
        <textarea name="description" required><?php echo htmlspecialchars($fact['description']); ?></textarea><br><br>
        <input type="submit" value="Update Fact">
    </form>
    <a href="show.php">Back to List</a>
</body>
</html>
