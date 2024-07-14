<?php include '../layouts/header.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Settings</title>
</head>
<body>
    <h1>Settings</h1>
    <a href="create.php">Create New Setting</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Value</th>
            <th>Actions</th>
        </tr>
        <?php 
        for ($i = 0; $i < count($settings); $i++): 
            $setting = $settings[$i];
        ?>
            <tr>
                <td><?= htmlspecialchars($setting['id']) ?></td>
                <td><?= htmlspecialchars($setting['name']) ?></td>
                <td><?= htmlspecialchars($setting['value']) ?></td>
                <td>
                    <a href="show.php?id=<?= $setting['id'] ?>">Show</a>
                    <a href="edit.php?id=<?= $setting['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $setting['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php endfor; ?>
    </table>
</body>
</html>
