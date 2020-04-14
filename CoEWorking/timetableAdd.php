<?php
include('header.php');
?>
<script>
    document.getElementById('timetable').className = "active";
</script>

<div class="main-content" align='center'>
    <h2>Add Timetable</h2>
    <form class="post-form" action="timetableSave_P.php" method="post">
        <div class="form-group">

            <label>ห้องเรียน</label>
            <?php
            $q1 = "SELECT * FROM  room ";
            $result1 = mysqli_query($dbcon, $q1);
            ?>
            <select name="room_id">
                <option value="" selected disabled>--Select--</option>
                <?php
                while ($row1 = mysqli_fetch_array($result1, MYSQLI_NUM)) {
                    echo "<option value='$row1[0]'>$row1[1]</option>";
                } ?>
            </select>
            <br>
            <label>ภาคการศึกษา</label>
            <select name="semester">
                <option value="" selected disabled>--Select--</option>
                <option value="1">ภาคต้น</option>
                <option value="2">ภาคปลาย</option>
                <option value="3">ภาคฤดูร้อน</option>
            </select>
            <br>

            <label>วิชา</label>
            <?php
            $q = "SELECT * FROM course ";
            $result = mysqli_query($dbcon, $q);
            ?>
            <select name="cs_idName">
                <option value="" selected disabled>--Select--</option>
                <?php
                while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
                    echo "<option value='$row[0]'>$row[2]  $row[3]</option>";
                } ?>
            </select>
            <br>

            <label>อาจารย์ผู้สอน </label>
            <?php
            $q2 = "SELECT * FROM lecture ";
            $result2 = mysqli_query($dbcon, $q2);
            ?>
            <select name="lectureID">
                <option value="" selected disabled>--Select--</option>
                <?php
                while ($row2 = mysqli_fetch_array($result2, MYSQLI_NUM)) {
                    echo "<option value='$row2[0]'>$row2[1] </option>";
                } ?>
            </select>
            <br>

            <label>วัน </label>
            <select name="day">
                <option value="" selected disabled>--Select--</option>
                <option value="Mon">จันทร์</option>
                <option value="Tue">อังคาร</option>
                <option value="Wed">พุธ</option>
                <option value="Thu">พฤหัส</option>
                <option value="Fri">ศกร์</option>
                <option value="Sat">เสาร์</option>
                <option value="Sun">อาทิตย์</option>
            </select>
            <br>

            <label>เวลาเริ่ม</label>
            <select name="start_hour" id="start_hour">
                <option value="" selected disabled>--hour--</option>

                <?php
                $start = "6";
                $end = "21";
                $tNow = $start;
                while ($tNow <= $end) {
                    echo '<option value="' . $tNow . '">' . $tNow . '</option>';
                    $tNow += 1;
                }
                ?>
            </select>
            <label>นาฬิกา</label>

            &nbsp;
            <select name="start_min" id="start_min">
                <option value="" selected disabled>--min--</option>

                <?php
                $start = "00";
                $end = "59";
                $tNow = $start;
                while ($tNow <= $end) {
                    echo '<option value="' . $tNow . '">' . $tNow . '</option>';
                    $tNow += 1;
                }
                ?>
            </select>
            <label>นาที</label>
            <br>
            <label>เวลาสิ้นสุด</label>
            <select name="end_hour" id="end_hour">
                <option value="" selected disabled>--hour--</option>

                <?php
                $start = "6";
                $end = "21";
                $tNow = $start;
                while ($tNow <= $end) {
                    echo '<option value="' . $tNow . '">' . $tNow . '</option>';
                    $tNow += 1;
                }
                ?>
            </select>
            <label>นาฬิกา</label>

            &nbsp;
            <select name="end_min" id="end_min">
                <option value="" selected disabled>--min--</option>

                <?php
                $start = "00";
                $end = "59";
                $tNow = $start;
                while ($tNow <= $end) {
                    echo '<option value="' . $tNow . '">' . $tNow . '</option>';
                    $tNow += 1;
                }
                ?>
            </select>
            <label>นาที</label>
        </div>

        <input class="submit" type="submit" value="Save">
    </form>


</div>