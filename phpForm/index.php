<?php

$insert = false;
if(isset($_POST['name'])){

    // define database server login/connection veriables
    $servername = "localhost";
    $username = "root";
    $password = "";

    // connect to database
    $con = mysqli_connect($servername, $username, $password);


    // check for successful connection to database
    if(!$con){
        die("Connection to database has failed due to ". mysqli_connect_error());
    }
    // echo "Connection to database is Successful!";
    // echo "<br>";
    
    // collect all the form inputs and assign them to respective variables
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    
    // define sql query with assigned variables
    $sql = "INSERT INTO `form`.`submissions` (`name`, `age`, `gender`, `email`, `phone`, `date`) VALUES ('$name', '$age', '$gender', '$email', '$phone', current_timestamp());";
    
    // display the query
    // echo $sql;
    // echo "<br>";
    
    // Execute the sql query and insert form data to database
    if($con->query($sql) == true){
        // echo "Successfully inserted!";
        // echo "<br>";
        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
        // echo "<br>";
        $insert = false;
    }
    // Close database connection
    $con->close();    

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subzero</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;1,400;1,500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- <img src="https://wallpaper.wiki/wp-content/uploads/2017/04/wallpaper.wiki-iPad-wallpaper-hd-free-PIC-WPC00844-1024x1024.jpg" alt="" class="bg"> -->
    <div class="container">
        <h1>Welcome to Subzero</h1>
        <h2>Please enter your details below</h2>
        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="number" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="age" placeholder="Enter your gender">
            <input type="email" name="email" id="age" placeholder="Enter your email">
            <input type="phone" name="phone" id="age" placeholder="Enter your phone">
            <button class="btn">Submit</button>
            <?php
            if($insert == true){
                echo "<p class='message'>Thank you for submitting the form!</p>";
            }
            ?>            
        </form>
    </div>

    <script src="index.js"></script>
    <?php
            if($insert == true){
                echo "<script>
                        window.onload = function() {
                        history.replaceState('', '', '/php/index.php');
                        }
                      </script>";
            }
    ?>

</body>
</html>