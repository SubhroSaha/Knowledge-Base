<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>From Validation</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script>
        $(document).ready(function() {
            $("form").submit(function(event) {
                event.preventDefault();
                var name = $("#mail-name").val();
                var email = $("#mail-email").val();
                var gender = $("#mail-gender").val();
                var message = $("#mail-message").val();
                var submit = $("#mail-submit").val();
                $(".form-message").load("mail.php", {
                    name: name,
                    email: email,
                    gender: gender,
                    message: message,
                    submit: submit
                });
            });
        });
    </script>
</head>
<body>

    <form action="mail.php" method="POST">
        <input id="mail-name" type="text" name="name" placeholder="Full name"><br>
        <input id="mail-email" type="text" name="email" placeholder="E-mail"><br>
        <select name="gender" id="mail-gender">
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select><br>
        <textarea name="message" id="mail-message" cols="30" rows="10" placeholder="Message"></textarea><br>
        <button id="mail-submit" type="submit" name="submit">Send e-mail</button>
        <p class="form-message"></p>
    </form>
    
</body>
</html>