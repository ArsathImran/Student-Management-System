<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $course = $conn->real_escape_string($_POST['course']);
    $phone = $conn->real_escape_string($_POST['phone']);

    $sql = "INSERT INTO students (name, email, course, phone) VALUES ('$name', '$email', '$course', '$phone')";
    if ($conn->query($sql)) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    header("Location: create.php");
    exit;
}
?>
