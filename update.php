<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = (int)$_POST['id'];
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $course = $conn->real_escape_string($_POST['course']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $sql = "UPDATE students SET name='$name', email='$email', course='$course', phone='$phone' WHERE id=$id";
    if ($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error updating: " . $conn->error;
    }
} else {
    header("Location: index.php");
    exit;
}
?>
