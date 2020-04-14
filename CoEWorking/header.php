<?php
require("mysql/connect.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Schedule Checking</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        /* Style the body */
        body {
            font-family: Arial, Helvetica, sans-serif;
            margin: 0;
            background-color: #FFFFFF;
        }

        /* Header/Logo Title */
        .header {
            padding: 0px;
            text-align: center;
            color: white;
            font-size: 30px;
            
        }

        /* Page Content */
        .content {
            padding: 20px;
        }

        .navbar {
            width: 100%;
            background-color: #333;
            overflow: auto;
  
            
        }

        .navbar a {
            float: left;
            padding: 8px;
            padding-left: 30px;
            padding-right: 30px;
            color: white;
            text-decoration: none;
            font-size: 18px;
        }

        .navbar a:hover {
            background-color: #333;
        }

        .active {
            background-color: #576865;
        }

        @media screen and (max-width: 500px) {
            .navbar a {
                float: none;
                display: block;
            }
        }

        table {
            width: 80%;
            margin: 0 auto;
        }

        th,
        td {
            border: 2px solid #ddd;
            border-color: #191970;
        }
        
        .button {
            color: white;
            padding: 6px 8px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 2px 2px;
            transition-duration: 0.4s;
            cursor: pointer;
            border-radius: 4px;
            background-color: white; 
            color: black; 
            border: 2px solid #FF4500;
        }
        
        .button:hover {
            background-color: #FFDAB9;
            color: white;
        }
        
        #div1{
            background-color: #333;
    
        }
        
        #padd-left{
            padding-left: 150px
        }
        
        

        
        
    </style>
</head>

<body>

    
    <div class="header" id='div1'>
        <img width="100%" src="folder/blog3.png">
    </div>

    
    <div class="navbar">
        <a href="index.php" id="home">หน้าแรก</a>
        <a href="timetable.php" id="timetable">ตารางการใช้ห้อง</a>
        <a href="lecture.php" id="lecture">รายชื่ออาจารย์ผู้สอน</a>
        <a href="course.php" id="course">วิชาที่เปิดสอน</a>
        <a href="classTeach.php" id="class">รายชื่อผู้สอนในรายวิชา</a>
        <a href="classroom.php" id="classroom">ห้องเรียน</a>
        <a href="contact.php" id="contact">ติดต่อ</a>
    </div>

</body>

</html>