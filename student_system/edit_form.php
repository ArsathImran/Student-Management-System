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
<head><meta charset="utf-8"><title>Edit Student</title></head>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h2>Edit Student</h2>
  <form action="update.php" method="post">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <label>Name:</label><br>
    <input type="text" name="name" value="<?= htmlspecialchars($row['name']) ?>" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>" required><br><br>

    <label>Course:</label><br>
    <input type="text" name="course" value="<?= htmlspecialchars($row['course']) ?>"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone" value="<?= htmlspecialchars($row['phone']) ?>"><br><br>

    <button type="submit">Update Student</button>
  </form>
  <p><a href="menu.php">Back to Home</a></p>
</body>
</html>
