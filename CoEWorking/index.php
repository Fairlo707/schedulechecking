<?php
include('header.php');
?>

<div id='main-content'>

</div>

<script>
    document.getElementById('home').className = "active";
</script>

    <style>
        body {
            width: 100%;
            height: 100%;
            background: url(images/COE.jpg) no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }


        h3 {
            width: 230px;
            border: 2px solid white;
            border-radius: 8px;
            color: orange;
            margin: 10px 600px 20px 80px;
            background-color: white;
        }

        #pic {
            width: 150px;
            margin-left: 120px;
        }

        slider {
            display: block;
            width: 500px;
            height: 500px;
            border-radius: 45px;
            overflow: hidden;
            position: absolute;
            background-color: #1f1f1f;
            margin: -150px 25px 25px 700px;

        }

        slider>* {
            position: absolute;
            display: block;
            width: 500px;
            height: 500px;
            background: #1f1f1f;
            animation: slide 12s infinite;
            overflow: hidden;
        }

        slide:nth-child(1) {
            left: 0%;
            animation-delay: -1s;
            background-image: url(images/3.png);
            background-size: cover;
            background-position: center;
        }

        slide:nth-child(2) {
            left: 0%;
            animation-delay: 2s;
            background-image: url(images/2.png);
            background-size: cover;
            background-position: center;
        }

        slide:nth-child(3) {
            animation-delay: 5s;
            background-image: url(images/4.png);
            background-size: cover;
            background-position: center;
        }

        slide:nth-child(4) {
            left: 0%;
            animation-delay: 8s;
            background-image: url(images/5.png);
            background-size: cover;
            background-position: center;
        }

        @keyframes slide {
            0% {
                left: 100%;
                width: 100%;
            }

            5% {
                left: 0%;
            }

            25% {
                left: 0%;
            }

            30% {
                left: -100%;
                width: 100%;
            }

            30.0001% {
                left: -100%;
                width: 0%;
            }

            100% {
                left: 100%;
                width: 0%;
            }
        }

    </style>

<body>

    <br>
    <br>
    <br>

    <h3>เช็คตารางการใช้ห้องได้ที่นี่</h3>
    <a href="timetable.php"><img id="pic" src="images/timetable.png"></a>
    <slider>
        <slide></slide>
        <slide></slide>
        <slide></slide>
        <slide></slide>
    </slider>



</body>