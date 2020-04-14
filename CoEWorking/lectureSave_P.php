<?php
require("mysql/connect.php");
$lec_name = $_POST['lecture_name'];

$sql = "INSERT INTO lecture(lecture_name) VALUES ('$lec_name')";
$result = mysqli_query($dbcon, $sql) or die("Query Unsuccessful");

//*****ไม่ได้แก้ port*****/ 
// header("Location: http://localhost/CoEWorking/lecture.php");
header("Location: http://localhost:81/CoEWorking/lecture.php");
mysqli_close($dbcon);
