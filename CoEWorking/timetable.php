<?php
include('header.php');
?>
<script>
    document.getElementById('timetable').className = "active";
</script>

<head>
    <meta charset="utf-8">
    <meta name="description" content="Vanilla javascript plugin for building nice responsive timetables">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles/timetablejs.css">
    <link rel="stylesheet" href="styles/demo.css">
</head>

<body align='center'>

    <div id="main-content">
        <br>
        <button class="button"><a href="timetableAdd.php">Insert Timetable</a></button>
    </div>
    <div>
        <h3>เลือกห้องเรียน </h3>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" class="post-form" method="POST">
            <div class="form-group">
                <?php
                $q = "SELECT * FROM room ";
                $result = mysqli_query($dbcon, $q);
                ?>
                <select name="room_id">
                    <option value="" selected disabled>--Select--</option>
                    <?php
                    while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                        echo "<option value='$row[0]'>$row[1]</option>";
                    } ?>
                </select>
                <br>
                <h3>ภาคการศึกษา</h3>
                <select name="semester">
                    <option value="" selected disabled>--Select--</option>
                    <option value="1">ภาคต้น</option>
                    <option value="2">ภาคปลาย</option>
                    <option value="3">ภาคฤดูร้อน</option>
                </select>
            </div>
            <br>
            <input class="submit" type="submit" value="Submit" name="showbtn">

        </form>

        <!--start delete -->
        <h3>กดคาบเรียนเพื่อดู id ที่ใช้ delete</h3>
        <form action="<?php $_SERVER['PHP_SELF']; ?>" class="post-form" method="POST">
            <?php
            $q11 = "SELECT * FROM timetable ";
            $result11 = mysqli_query($dbcon, $q11);
            ?>
            <select name="timetable_id">
                <option value="" selected disabled>--delete--</option>
                <?php
                while ($row11 = mysqli_fetch_array($result11, MYSQLI_NUM)) {
                    echo "<option value='$row11[0]'>$row11[0]</option>";
                } ?>
            </select>
            <input class="submit" type="submit" value="Delete" name="delbtn">
        </form>
        <!-- delete -->
        <?php
        if (isset($_POST['delbtn'])) {
            $timetable_id = $_POST['timetable_id'];
            $sql12 = "DELETE FROM timetable  WHERE timetable_id = $timetable_id";
            $res12 = mysqli_query($dbcon, $sql12) or die("Query Unsuccessful");
            mysqli_close($dbcon);
        }
        ?>


        <!-- end delete -->
        <div>
            <?php

            if (isset($_POST['showbtn'])) {
                $room_id = $_POST['room_id'];
                $semester = $_POST['semester'];
                $sql = "SELECT * FROM timetable INNER JOIN lecture ON timetable.lec_id = lecture.lec_id
    INNER JOIN course ON timetable.course_id = course.course_index WHERE room_id = '$room_id' AND timetable.semester = $semester ";
                $res = mysqli_query($dbcon, $sql) or die("Query Unsuccessful***");

                // ข้อความแสดงห้องเรียน
                $ss = "SELECT * FROM room WHERE room_id = $room_id ";
                $rs = mysqli_query($dbcon, $ss) or die("Query Unsuccessful1");
                $rr = mysqli_fetch_assoc($rs);

                $ss2 = "SELECT * FROM timetable WHERE semester = $semester ";
                $rs2 = mysqli_query($dbcon, $ss2) or die("Query Unsuccessful2");
                $rr2 = mysqli_fetch_assoc($rs2)

            ?>
                <!-- Start Timetable -->
                <h3 style="text-align: center">ตารางการใช้ห้อง <?php echo $rr['room_name'] . ' ภาคการศึกษา ' . $rr2['semester'] ?> ปีการศึกษา 2563</h3>
                <div class="timetable"></div>

                <script src="scripts/timetablejs.js"></script>

                <script>
                    var timetable = new Timetable();
                    timetable.setScope(6, 21)
                    timetable.addDay(['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun']);
                </script>
                <!-- End Timetable -->
                <?php
                // Start Table Data
                if (mysqli_num_rows($res) > 0) {
                    while ($row1 = mysqli_fetch_assoc($res)) {

                        $course_text = $row1['course_id'] . '  ' . $row1['course_name'];
                        $teacher_text = "อ." . $row1['lecture_name'];
                        // echo $timetable_id = $row1['timetable_id'];
                ?>
                        <script>
                            var s_time = new Date(2015, 7, 17, 9, 00) //for start time
                            var e_time = new Date(2015, 7, 17, 10, 00) //for end time
                            s_time.setHours(<?php echo $row1['start_hour'] ?>)
                            s_time.setMinutes(<?php echo $row1['start_min'] ?>)
                            e_time.setHours(<?php echo $row1['end_hour'] ?>)
                            e_time.setMinutes(<?php echo $row1['end_min'] ?>)
                            timetable.addEvent('<?php echo $course_text . ' ( ' . $teacher_text . ' ) ' ?>', '<?php echo $row1['day'] ?>', s_time, e_time, {
                                onClick: function(event) {
                                    window.alert(event.name + '\n' + event.location + ' <?php echo $row1['start_hour'] . ':' . $row1['start_min'] . ' - ' . $row1['end_hour'] . ':' . $row1['end_min'] ?>' +
                                        '\nID :  <?php echo $row1['timetable_id'] ?>');
                                }
                            });
                        </script>
                    <?php
                    }
                    // end Table Data
                    ?>

                    <script>
                        // render Table
                        var renderer = new Timetable.Renderer(timetable);
                        renderer.draw('.timetable');
                    </script>
                <?php
                } else {
                    echo "No record found";
                }
                ?>
        </div>
    <?php mysqli_close($dbcon);
            }
    ?>


</body>