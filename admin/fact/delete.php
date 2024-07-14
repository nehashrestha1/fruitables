<?php
require_once './models/Fact.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['id'])) {
    $id = $_POST['id'];

    $factModel = new Fact();
    if ($factModel->delete($id)) {
        header("Location: show.php");
        exit;
    } else {
        echo "Error deleting fact!";
    }
}
?>
