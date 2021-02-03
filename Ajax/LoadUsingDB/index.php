<?php
    include "dbcon.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax using Database</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            var commentCount = 2;
            $("#btn").click(function() {
                commentCount += 2;
                $("#comments").load("load-comments.php", {
                    commentNewCount: commentCount
                });
            });
        });
    </script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="comments">
        <?php
            $sql = "SELECT * FROM comments LIMIT 2";
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
    </div>
    <button id="btn">Show more comments</button>
</body>
</html>