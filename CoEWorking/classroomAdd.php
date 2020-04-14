<?php
include('header.php');
?>
<script>
    document.getElementById('classroom').className = "active";
</script>

<div id="main-content" align='center'>
    <h2>Add Classroom Name</h2>
    <form class="post-form" action="classroomSave_P.php" method="post">
        <div class="form-group">
            <label>Classroom</label>
            <input type="text" name="room_name">
        </div>
        <br>
        <input class="submit" type="submit" value="Save">
    </form>


</div>