<?php
include('header.php');
?>
<script>
    document.getElementById('lecture').className = "active";
</script>

<div id="main-content"  align='center'>
    <h2>Add Teacher Name</h2>
    <form class="post-form" action="lectureSave_P.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="lecture_name">
        </div>
        <br>
        <input class="submit" type="submit" value="Save">
    </form>


</div>