<?php
include 'db.php';
if (!isset($_GET['id'])) { header("Location: menu.php"); exit; }
$id = (int)$_GET['id'];
$res = $conn->query("SELECT * FROM students WHERE id=$id");
if (!$res || $res->num_rows != 1) { echo "Student not found"; exit; }
$row = $res->fetch_assoc();
?>
<!doctype html>
<html>
<head><meta charset="utf-8"><title>Delete Student</title></head>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Student Details</h2>
  <p><strong>Name:</strong> <?= htmlspecialchars($row['name']) ?></p>
  <p><strong>Email:</strong> <?= htmlspecialchars($row['email']) ?></p>
  <p><strong>Course:</strong> <?= htmlspecialchars($row['course']) ?></p>
  <p><strong>Phone:</strong> <?= htmlspecialchars($row['phone']) ?></p>

  <p><a href="delete_confirm.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure you want to delete this student?')">Delete This Student</a></p>
  <p><a href="menu.php">Back to Home</a></p>
</body>
</html>
