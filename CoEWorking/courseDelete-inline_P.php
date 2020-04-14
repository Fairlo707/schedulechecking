<?php
require("mysql/connect.php");


$cs_index = $_GET['id'];
$sql = "DELETE FROM course WHERE course_index = $cs_index";
$result = mysqli_query($dbcon, $sql) or die("Query Unsuccessful");

//*****ไม่ได้แก้ port*****/ 
// header("Location: http://localhost/CoEWorking/course.php");
header("Location: http://localhost:81/CoEWorking/course.php");
mysqli_close($dbcon);
