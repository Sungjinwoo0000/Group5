<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include 'includes/navbar.php'; ?>
    <h2>Student List</h2>
    <a href="add.php">➕ Add Student</a><br><br>
    <table border="1" cellpadding="10">
        <tr>
            <th>Name</th><th>ID</th><th>Course</th><th>GWA</th>
            <th>Attendance</th><th>Actions</th>
        </tr>
        <?php
        $res = $conn->query("SELECT * FROM students");
        while ($row = $res->fetch_assoc()):
        ?>
        <tr>
        <td data-label="Name"><?= $row['full_name'] ?></td>
        <td data-label="ID"><?= $row['id_number'] ?></td>
        <td data-label="Course"><?= $row['course'] ?></td>
        <td data-label="GWA"><?= $row['gwa'] ?></td>
        <td data-label="Attendance"><?= $row['attendance_record'] ?></td>
        <td data-label="Actions">
                <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

