<?php
require("mysql/connect.php");

$lecID = $_GET['id'];
$sql = "DELETE FROM lecture WHERE lec_id = $lecID";
$result = mysqli_query($dbcon, $sql) or die("Query Unsuccessful");

//*****ไม่ได้แก้ port*****/ 
// header("Location: http://localhost/CoEWorking/lecture.php");
header("Location: http://localhost:81/CoEWorking/lecture.php");
mysqli_close($dbcon);
