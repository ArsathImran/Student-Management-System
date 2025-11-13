<?php
include 'db.php';

// join sports with student names
$sql = "SELECT sports.id, students.name AS student_name, sports.sport_name, sports.achievement, sports.created_at
        FROM sports
        INNER JOIN students ON sports.student_id = students.id
        ORDER BY sports.id DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Sports</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<h2>All Sports Records</h2>
<p><a href="add_sport.php">Add New Sport</a> | <a href="menu.php">Back to Home</a></p>

<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>ID</th>
        <th>Student Name</th>
        <th>Sport</th>
        <th>Achievement</th>
        <th>Date Added</th>
        <th>Action</th>   <!-- Added -->
    </tr>

    <?php while($row = $result->fetch_assoc()): ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['student_name']; ?></td>
        <td><?php echo $row['sport_name']; ?></td>
        <td><?php echo $row['achievement']; ?></td>
        <td><?php echo $row['created_at']; ?></td>
        <td>
            <a href="delete_sport.php?id=<?php echo $row['id']; ?>"
               onclick="return confirm('Are you sure you want to delete this record?');">
               Delete
            </a>
        </td>
    </tr>
    <?php endwhile; ?>

</table>

</body>
</html>
