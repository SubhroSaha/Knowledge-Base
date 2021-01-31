<?php
    include_once 'db.php';

    $first = mysqli_real_escape_string($conn, $_POST["first"]);
    $last = mysqli_real_escape_string($conn, $_POST["last"]);
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $uid = mysqli_real_escape_string($conn, $_POST["uid"]);
    $pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);

    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first','$last','$email','$uid','$pwd')";
    mysqli_query($conn, $sql);
    
    
    // $sql = "SELECT * FROM users;";
    // $result = mysqli_query($conn, $sql);
    // $resultCheck = mysqli_num_rows($result);
    // if ($resultCheck > 0) {
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo $row['user_uid'] . "<br>";
    //     }
    // }
    

    // Created a template
    // $sql = "SELECT * FROM users WHERE user_uid=?;";
    // Create a prepared statement
    // $stmt = mysqlli_stmtn_init($conn);
    //  
    //     while ($row = mysqli_fetch_assoc($result)) {
    //         echo $row['user_uid'] . "<br>";
    //     }
            
    
    
    header("Location: index.php?signup=success");
?>