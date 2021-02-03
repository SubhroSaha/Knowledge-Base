<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Out</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Signup</h1>
        <form action="signup.php" method="POST">
            <?php
                if (isset($_GET["first"])) {
                    $first = $_GET["first"];
                    echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'"><br>';
                } else {
                    echo '<input type="text" name="first" placeholder="Firstname"><br>';
                }
            ?>
            <?php
                if (isset($_GET["last"])) {
                    $last = $_GET["last"];
                    echo '<input type="text" name="last" placeholder="Lastname" value="'.$last.'"><br>';
                } else {
                    echo '<input type="text" name="last" placeholder="Lastname"><br>';
                }
            ?>
            <input type="text" name="email" placeholder="Email"><br>
            <?php
                if (isset($_GET["uid"])) {
                    $uid = $_GET["uid"];
                    echo '<input type="text" name="uid" placeholder="Username" value="'.$uid.'"><br>';
                } else {
                    echo '<input type="text" name="uid" placeholder="Username"><br>';
                }
            ?>
            <input type="password" name="pwd" placeholder="Password"><br>
            <button type="submit" name="submit" class="btn">Sign Up</button><br>
        </form>

        <?php
            /*
            $fullUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER["REQUEST_URI"];
            // echo $_SERVER['HTTP_HOST']."<br>".$_SERVER['REQUEST_URI'];

            if (strpos($fullUrl, "signup=empty") == true) {
                echo "<p class='message-error'>You did not fill in all fields!</p>";
                // exit();
            }
            elseif (strpos($fullUrl, "signup=char") == true) {
                echo "<p class='message-error'>You used invalid characters!</p>";
                // exit();
            }
            elseif (strpos($fullUrl, "signup=invalidemail") == true) {
                echo "<p class='message-error'>You used an invalid email!</p>";
                // exit();
            }
            elseif (strpos($fullUrl, "signup=success") == true) {
                echo "<p class='message-success'>You have been signed up!</p>";
                // exit();
            }
            */

            if (isset($_GET["signup"])) {
            //     // header("Location: index.php");
            //     exit();
            // }
            // else {
                $signupCheck = $_GET["signup"];
                switch ($signupCheck) {
                    case 'empty':
                    echo "<p class='message-error'>You did not fill in all fields!</p>";
                    break;
                    case 'char':
                        echo "<p class='message-error'>You used invalid characters!</p>";
                    break;
                    case 'invalidemail':
                        echo "<p class='message-error'>You used an invalid email!</p>";
                    break;
                    case 'success':
                        echo "<p class='message-success'>You have been signed up!</p>";
                    break;
                    default:
                        
                    // break;
                }
            }
        ?>


        <!-- <h1>Login</h1>
        <form action="signup.php" method="POST">
            <input type="text" name="uid" placeholder="Username"><br>
            <input type="text" name="pwd" placeholder="Password"><br>
            <button type="submit" name="submit" class="btn">Login</button><br>
        </form> -->
    </div>
        
</body>
</html>