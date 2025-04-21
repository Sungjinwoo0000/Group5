<?php
include 'db.php';
$id = $_GET['id'];
$res = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $res->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include 'includes/navbar.php'; ?>

<h2>Edit Student</h2>

<form method="POST" action="update.php">
    <input type="hidden" name="id" value="<?= $row['id'] ?>">

    <label>Full Name:</label>
    <input type="text" name="full_name" value="<?= $row['full_name'] ?>" required>

    <label>Date of Birth:</label>
    <input type="date" name="dob" value="<?= $row['dob'] ?>" required>

    <label>Address:</label>
    <input type="text" name="address" value="<?= $row['address'] ?>" required>

    <label>ID Number:</label>
    <input type="text" name="id_number" value="<?= $row['id_number'] ?>" required>

    <label>Course:</label>
    <input type="text" name="course" value="<?= $row['course'] ?>" required>

    <label>GWA:</label>
    <input type="number" step="0.01" name="gwa" value="<?= $row['gwa'] ?>" required>

    <label>Attendance Record:</label>
    <input type="text" name="attendance" value="<?= $row['attendance_record'] ?>" required>

    <label>Disciplinary History:</label>
    <input type="text" name="disciplinary" value="<?= $row['disciplinary_history'] ?>">

    <label>Health Info:</label>
    <input type="text" name="health" value="<?= $row['health_info'] ?>">

    <label>Tuition Payment:</label>
    <input type="number" step="0.01" name="tuition" value="<?= $row['tuition_payment'] ?>" required>

    <input type="submit" value="Update Student">
</form>
</body>
</html>