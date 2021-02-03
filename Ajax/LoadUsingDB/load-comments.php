<?php
    include "dbcon.php";

    $commentNewCount = $_POST["commentNewCount"];

    $sql = "SELECT * FROM comments LIMIT $commentNewCount";
    $result = mysqli_query($con, $sql);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<br><p>";
            echo $row['author'];
            echo "<br>";
            echo $row['message'];
            echo "</p><br>";
        }
    } else {
        echo "There are no comments!";
    }
?>