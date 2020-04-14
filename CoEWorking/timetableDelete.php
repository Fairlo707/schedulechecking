<?php
require("mysql/connect.php");

$ttID = $_GET['id'];
$sql = "DELETE FROM timetable WHERE timetable_id = $ttID";
$result = mysqli_query($dbcon, $sql) or die("Query Unsuccessful");

//*****ไม่ได้แก้ port*****/ 
// header("Location: http://localhost/CoEWorking/timetable.php");
header("Location: http://localhost:81/CoEWorking/timetable.php");
mysqli_close($dbcon);
