<?php
include 'db.php';

$id = $_POST['id'];
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

$conn->query("UPDATE students SET 
    full_name='$full_name', 
    dob='$dob', 
    address='$address', 
    id_number='$id_number', 
    course='$course', 
    gwa=$gwa, 
    attendance_record='$attendance', 
    disciplinary_history='$disciplinary', 
    health_info='$health', 
    tuition_payment=$tuition 
WHERE id=$id");

header("Location: index.php");
?>