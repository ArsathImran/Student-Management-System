<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM sports WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Sport deleted successfully'); window.location.href='view_sports.php';</script>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}
?>
