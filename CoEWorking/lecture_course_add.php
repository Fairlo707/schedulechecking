<?php
include('header.php');
?>
<script>
    document.getElementById('class').className = "active";
</script>

<div id="main-content" align='center'>
    <form class="post-form" action="lecture_course_Save_P.php" method="post">
        <div class="form-group">
            <br>
            <label>เพิ่มข้อมูล </label>
            <br>
            <label>รายวิชา </label>
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
            <br>
            <input class="submit" type="submit" value="Save">
        </div>
    </form>
</div>

<div>
    <h2 align='center'>Course-Lecture</h2>
    <?php
    $sql = "SELECT * FROM lec_course INNER JOIN lecture ON lec_course.lec_id = lecture.lec_id
    INNER JOIN course ON lec_course.course_id = course.course_index";
    $res = mysqli_query($dbcon, $sql) or die("Query Unsuccessful");


    if (mysqli_num_rows($res) > 0) {
    ?>
        <table cellpadding="7px">
            <thead>
                <th>Course</th>
                <th>Lecture</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                while ($r = mysqli_fetch_assoc($res)) {
                ?>
                    <tr>
                        <td> <?php echo $r['course_name'] ?></td>
                        <td> <?php echo 'อาจารย์ ' . $r['lecture_name'] ?></td>
                        <td>
                            <a href="lecture_course_Edit.php?id=<?php echo $r['lc_index'] ?>">Edit</a>
                            <a href="lecture_course_Delete-inline_P.php?id=<?php echo $r['lc_index'] ?>">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    <?php } else {
        echo "No record found";
    }
    mysqli_close($dbcon);
    ?>
</div>