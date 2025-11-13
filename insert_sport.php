<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $student_id = $_POST['student_id'];
    $achievement = $_POST['achievement'];
    $sports = $_POST['sport_name']; // THIS IS NOW AN ARRAY!

    foreach ($sports as $sport_name) {

        $sql = "INSERT INTO sports (student_id, sport_name, achievement)
                VALUES ('$student_id', '$sport_name', '$achievement')";

        $conn->query($sql);
    }

    echo "<script>alert('Sports added successfully'); window.location.href='add_sport.php';</script>";
}
?>
