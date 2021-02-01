<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Out</title>
</head>
<body>
    <h1>Signup</h1>
    <form action="signup.php" method="POST">
        <input type="text" name="first" placeholder="Firstname"><br>
        <input type="text" name="last" placeholder="Lastname"><br>
        <input type="text" name="email" placeholder="Email"><br>
        <input type="text" name="uid" placeholder="Username"><br>
        <input type="text" name="pwd" placeholder="Password"><br>
        <button type="submit" name="submit">Sign Up</button><br>
    </form>
    

    <h1>Login</h1>
    <form action="signup.php" method="POST">
        <input type="text" name="uid" placeholder="Username"><br>
        <input type="text" name="pwd" placeholder="Password"><br>
        <button type="submit" name="submit">Login</button><br>
    </form>
        
</body>
</html>