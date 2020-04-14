<?php
include('header.php');
?>
<script>
    document.getElementById('course').className = "active";
</script>

<div id="main-content" align='center'>
    <h2>Add Course</h2>
    <form class="post-form" action="courseSave_P.php" method="post">
        <div class="form-group">
            <label>รหัสวิชา</label>
            <input type="text" name="cs_id">
        </div>
        <div class="form-group">
            <label>ชื่อวิชา</label>
            <input type="text" name="cs_name">
        </div>
        <div class="form-group">
            <label>หลักสูตร</label>
            <select name="degree">
                <option value="" selected disabled>--Select--</option>
                <option value="bachelor">วิศวกรรมศาสตร์บัณฑิต สาขาวิศวกรรมคอมพิวเตอร์</option>
                <option value="inter">วิศวกรรมศาสตร์บัณฑิต สาขาสื่อดิจิทัล นานาชาติ</option>
                <option value="master">ป.โท และ ป.เอก สาขาวิศวกรรมคอมพิวเตอร์</option>
            </select>
        </div>
        <div class="form-group">
            <label>วิชาบังคับ(ชั้นปี) / วิชาเลือก</label>
            <select name="year_type">
                <option value="" selected disabled>--Select--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="0">วิชาเลือก</option>
                <option value="5">ป.โท ป.เอก</option>
            </select>
        </div>
        <div class="form-group">
            <label>ภาคการศึกษา</label>
            <select name="semester">
                <option value="" selected disabled>--Select--</option>
                <option value="1">ภาคต้น</option>
                <option value="2">ภาคปลาย</option>
                <option value="3">ภาคฤดูร้อน</option>
                <option value="0">วิชาเลือก</option>
            </select>
        </div>

        <div class="form-group">
            <label>หน่วยกิต</label>
            <select name="cs_weight">
                <option value="" selected disabled>--Select--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>

        <div class="form-group">
            <label>Lecture / Lab</label>
            <select name="lec_lab">
                <option value="" selected disabled>--Select--</option>
                <option value="lec">Lecture</option>
                <option value="lab">Lab</option>
            </select>
        </div>

        <div class="form-group">
            <label>เงื่อนไขรายวิชา</label>
            <input type="text" name="cs_cond" value="-">
        </div>

        <div class="form-group">
            <label>หมายเหตุ</label>
            <input type="text" name="cs_option" value="-">
        </div>

        <input class="submit" type="submit" value="Save">
    </form>

</div>
