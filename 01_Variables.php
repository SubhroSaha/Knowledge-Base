<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

        <h1>Variables</h1>

        <?php
            echo "<br>";
            echo "Hello world! This is PHP";
            echo "<br>";
            echo "<br>";
            print "Hello world! This is PHP";
            echo "<br>";
            echo "<br>";
            // comment
            /*
            Multi line comment
            */

            // Variables
            $variable1 = 34;
            $variable2 = 45;
            echo $variable1;
            echo "<br>";
            echo "<br>";
            echo $variable2;
            echo "<br>";            
            echo "<br>";            
            echo $variable1 + $variable2;
            echo "<br>";
            echo "<br>";
            Echo $variable1 + $variable2;
            echo "<br>";
            echo "<br>";
            
        ?>
        
    </div>

</body>
</html>