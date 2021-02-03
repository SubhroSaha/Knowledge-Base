<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get and Post</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        
        // GET Method
        $(document).ready(function() {
            $("button").click(function(){
                $.get("test.txt", function(data, status) {
                    $("#test").html(data);
                    alert(status);
                })
            })
        });

        // POST Method
        $(document).ready(function() {
            $("input").keyup(function() {
                var name = $("input").val();
                $.post("suggestions.php", {
                    suggestion: name
                }, function(data, status) {
                    $("#test").html(data);
                    // alert(status);
                });
            });
        });

    </script>
</head>
<body>
    <input type="text" name="name">
    <button>Click me to get data!</button>
    <p id="test"></p>
</body>
</html>