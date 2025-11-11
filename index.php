<?php include 'db.php'; ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Student List</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <h2>Students</h2>
  <p><a href="create.php">Add New Student</a></p>

  <?php
  $res = $conn->query("SELECT * FROM students ORDER BY id DESC");
  if ($res && $res->num_rows > 0) {
      echo "<table>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Course</th>
                <th>Phone</th>
              </tr>";
      while ($row = $res->fetch_assoc()) {
          echo "<tr>
                  <td>{$row['id']}</td>
                  <td>" . htmlspecialchars($row['name']) . "</td>
                  <td>" . htmlspecialchars($row['email']) . "</td>
                  <td>" . htmlspecialchars($row['course']) . "</td>
                  <td>" . htmlspecialchars($row['phone']) . "</td>
                </tr>";
      }
      echo "</table>";
  } else {
      echo "<p>No students found.</p>";
  }
  ?>
  <p><a href="menu.php">Back to Home</a></p>
</body>
</html>
