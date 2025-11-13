<?php
include 'db.php';

// get list of students for dropdown
$result = $conn->query("SELECT id, name FROM students ORDER BY name ASC");
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Add Sport</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <h2>Add Sport for Student</h2>
  <p><a href="view_students.php">Back to Students</a></p>

  <form action="insert_sport.php" method="post">
    <label>Student</label><br>
    <select name="student_id" required>
      <option value="">-- Select Student --</option>
      <?php while($row = $result->fetch_assoc()): ?>
        <option value="<?php echo $row['id']; ?>"><?php echo htmlspecialchars($row['name']); ?></option>
      <?php endwhile; ?>
    </select><br><br>

    <label>Sport Name</label><br>
    <input type="text" name="sport_name" required><br><br>

    <label>Achievement (optional)</label><br>
    <input type="text" name="achievement"><br><br>

    <button type="submit">Add Sport</button>
  </form>

  <p><a href="menu.php">Back to Home</a></p>

</body>
</html>
