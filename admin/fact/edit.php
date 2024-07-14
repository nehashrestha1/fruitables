<?php
include '../config/db.php';

$id = $_GET['id'];
$sql = "SELECT * FROM facts WHERE id=$id";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $icon = $_POST['icon'];
    $title = $_POST['title'];
    $number = $_POST['number'];
    $status = $_POST['status'];

    $sql = "UPDATE facts SET icon='$icon', title='$title', number='$number', status='$status' WHERE id=$id";
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
    <title>Edit Fact</title>
</head>
<body>
    <h1>Edit Fact</h1>
    <form method="POST">
        <label>Icon: </label>
        <input type="text" name="icon" value="<?php echo $row['icon']; ?>" required><br>
        <label>Title: </label>
        <input type="text" name="title" value="<?php echo $row['title']; ?>" required><br>
        <label>Number: </label>
        <input type="number" name="number" value="<?php echo $row['number']; ?>" required><br>
        <label>Status: </label>
        <input type="number" name="status" value="<?php echo $row['status']; ?>" required><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
