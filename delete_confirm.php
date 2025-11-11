<?php
include 'db.php';
if (!isset($_GET['id'])) { header("Location: menu.php"); exit; }
$id = (int)$_GET['id'];

if ($conn->query("DELETE FROM students WHERE id=$id")) {
    header("Location: menu.php");
    exit;
} else {
    echo "Error deleting: " . $conn->error;
}
?>
