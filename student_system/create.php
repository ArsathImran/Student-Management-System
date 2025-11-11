<?php include 'db.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Student</title>
</head>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Add Student</h2>
  <form action="store.php" method="post">
    <label>Name:</label><br>
    <input type="text" name="name" required><br><br>

    <label>Email:</label><br>
    <input type="email" name="email" required><br><br>

    <label>Course:</label><br>
    <input type="text" name="course"><br><br>

    <label>Phone:</label><br>
    <input type="text" name="phone"><br><br>

    <button type="submit">Add Student</button>
  </form>
  <p><a href="menu.php">Back to Home</a></p>
</body>
</html>
