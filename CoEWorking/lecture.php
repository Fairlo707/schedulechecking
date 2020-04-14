<?php
include('header.php');
?>
<script>
    document.getElementById('lecture').className = "active";
</script>


<div align='center'>
    <br>
    <button class="button"><a href="lectureAdd.php">Insert Lecture</a></button>

</div>

<div>
    <h2 align='center'>รายชื่ออาจารย์</h2>
    <?php
    $sql = "SELECT * FROM lecture";
    $result = mysqli_query($dbcon, $sql) or die("Query Unsuccessful");

    if (mysqli_num_rows($result) > 0) {
    ?>
        <table cellpadding="7px">
            <thead>
                <th>Name</th>
                <th></th>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <td> <?php echo 'อาจารย์ ' . $row['lecture_name'] ?></td>
                        <td>
                            <a href="lectureEdit.php?id=<?php echo $row['lec_id'] ?>">Edit</a>
                            <a href="lectureDelete-inline_P.php?id=<?php echo $row['lec_id'] ?>">Delete</a>
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
<br>
<br>