<?php
    

    if (isset($_POST['submit'])) {
        // code
        include_once 'db.php';
        $first = mysqli_real_escape_string($conn, $_POST["first"]);
        $last = mysqli_real_escape_string($conn, $_POST["last"]);
        $email = mysqli_real_escape_string($conn, $_POST["email"]);
        $uid = mysqli_real_escape_string($conn, $_POST["uid"]);
        $pwd = mysqli_real_escape_string($conn, $_POST["pwd"]);

        // Check if inputs are empty
        if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
            header("Location: index.php?signup=empty");
            exit();
        } else {
            // Check if input characters are valid
            if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $first)) {
                header("Location: index.php?signup=char");
                exit();
            } else {
                // Check if email is valid
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    header("Location: index.php?signup=invalidemail&first=$first&last=$last&uid=$uid");
                    exit();
                } else {
                    $sql = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first','$last','$email','$uid','$pwd')";
                    mysqli_query($conn, $sql);
                    header("Location: index.php?signup=success");
                    exit();
                }
            } 
        }
    }
    else {
        header("Location: index.php?signup=error");
    }

    

    
    
    
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