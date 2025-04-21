<?php
include 'db.php';

$full_name = $_POST['full_name'];
$dob = $_POST['dob'];
$address = $_POST['address'];
$id_number = $_POST['id_number'];
$course = $_POST['course'];
$gwa = $_POST['gwa'];
$attendance = $_POST['attendance'];
$disciplinary = $_POST['disciplinary'];
$health = $_POST['health'];
$tuition = $_POST['tuition'];

$conn->query("INSERT INTO students (full_name, dob, address, id_number, course, gwa, attendance_record, disciplinary_history, health_info, tuition_payment) VALUES ('$full_name', '$dob', '$address', '$id_number', '$course', $gwa, '$attendance', '$disciplinary', '$health', $tuition)");

header("Location: index.php");
?>