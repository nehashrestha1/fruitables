<?php
require_once './models/Fact.php';

$fact = new Fact();
$facts = $fact->getAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>View Facts</title>
</head>
<body>
    <h1>Existing Facts</h1>
    <?php foreach ($facts as $fact): ?>
        <div style="border:1px solid #ccc; padding:10px; margin:10px 0;">
            <h3><?php echo htmlspecialchars($fact['title']); ?></h3>
            <p><?php echo nl2br(htmlspecialchars($fact['description'])); ?></p>
            <form method="POST" action="delete.php" style="display:inline-block;">
                <input type="hidden" name="id" value="<?php echo $fact['id']; ?>">
                <input type="submit" value="Delete">
            </form>
            <a href="edit.php?id=<?php echo $fact['id']; ?>">Edit</a>
        </div>
    <?php endforeach; ?>

    <a href="index.php">Back to Home</a>
</body>
</html>
