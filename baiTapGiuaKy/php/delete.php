<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM table_students WHERE id = $id";
    $conn->query($sql);
}

header('Location: index.php');
exit;
?>
