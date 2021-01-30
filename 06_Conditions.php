<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: borderbox;
        }
        .container{
            max-width: 80%;
            background-color: lightgreen;
            margin: auto;
            text-align: left;
            padding: 20px;
        }
    </style>
</head>
<body>

    <div class="container">
    
        <h1>Conditions</h1>
    
        <?php

            // If and Else statements
            echo "<br>";
            echo "<h2>If and Else statements</h2>";
            echo "<br>";

            $age = 6;
            
            echo "<p>Your party status is here</p>";
            
            if($age>=18){
                echo "You can go to the party";
            }
            else if($age==7){
                echo "You are 7 years old and you cannot go";
            }
            elseif($age==6){
                echo "You are 6 years old and you cannot go";
            }
            else {
                echo "You cannot go to the party";
            }
            echo "<br>";
            
            ?>

        <?php

            echo "<br>";
            echo "<h2>Switch statements</h2>";
            echo "<br>";

            $favcolor = "red";

            switch ($favcolor) {
                case "red":
                    echo "Your favorite color is red!";
                    break;
                case "blue":
                    echo "Your favorite color is blue!";
                    break;
                case "green":
                    echo "Your favorite color is green!";
                    break;
                default:
                    echo "Your favorite color is neither red, blue, nor green!";
            }

        ?>


    </div>
    
</body>
</html>