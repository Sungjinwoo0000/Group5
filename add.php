<!DOCTYPE html>
<html>
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="css/style.css"> <!-- Link to external CSS -->
</head>
<body>
<?php include 'includes/navbar.php'; ?>
<h2>Add New Student</h2>

<form method="POST" action="insert.php">
    <label>Full Name:</label>
    <input type="text" name="full_name" required>

    <label>Date of Birth:</label>
    <input type="date" name="dob" required>

    <label>Address:</label>
    <input type="text" name="address" required>

    <label>ID Number:</label>
    <input type="text" name="id_number" required>

    <label>Course:</label>
    <input type="text" name="course" required>

    <label>GWA:</label>
    <input type="number" step="0.01" name="gwa" required>

    <label>Attendance Record:</label>
    <input type="text" name="attendance" required>

    <label>Disciplinary History:</label>
    <input type="text" name="disciplinary" value="N/A">

    <label>Health Info:</label>
    <input type="text" name="health">

    <label>Tuition Payment:</label>
    <input type="number" step="0.01" name="tuition" required>

    <input type="submit" value="Add Student">
</form>
</body>
</html>