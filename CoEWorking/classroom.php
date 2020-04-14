<?php
include('header.php');
?>
<script>
    document.getElementById('classroom').className = "active";
</script>


<div align='center'>
    <br>
    <button class="button"><a href="classroomAdd.php">Create Classroom</a></button>

</div>

<div>
    <h2 align='center'>CoE Room</h2>
    <?php
    $sql = "SELECT * FROM room";
    $result = mysqli_query($dbcon, $sql) or die("Query Unsuccessful");

    if (mysqli_num_rows($result) > 0) {
    ?>
        <table cellpadding="7px">
            <thead>
                <th>Room</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td> <?php echo  $row['room_name'] ?></td>
                        <td>
                            <a href="classroomEdit.php?id=<?php echo $row['room_id'] ?>">Edit</a>
                            <a href="classroomDelete-inline_P.php?id=<?php echo $row['room_id'] ?>">Delete</a>
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