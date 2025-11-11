<?php include 'db.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Edit Student</title>
<style>
table { border-collapse: collapse; width: 80%; margin: 20px 0; }
th, td { border: 1px solid #000; padding: 8px; text-align: left; }
th { background-color: #f2f2f2; }
a.button { text-decoration: none; background: #4CAF50; color: white; padding: 5px 10px; border-radius: 4px; }
</style>
</head>
<head>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
<h2>Edit Students</h2>
<table>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Course</th>
<th>Phone</th>
<th>Action</th>
</tr>

<?php
$res = $conn->query("SELECT * FROM students ORDER BY id DESC");
if($res && $res->num_rows > 0){
    while($row = $res->fetch_assoc()){
        echo "<tr>
                <td>{$row['id']}</td>
                <td>".htmlspecialchars($row['name'])."</td>
                <td>".htmlspecialchars($row['email'])."</td>
                <td>".htmlspecialchars($row['course'])."</td>
                <td>".htmlspecialchars($row['phone'])."</td>
                <td><a class='button' href='edit_form.php?id={$row['id']}'>Edit</a></td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No students found.</td></tr>";
}
?>
</table>
<p><a href="menu.php">Back to Home</a></p>
</body>
</html>
