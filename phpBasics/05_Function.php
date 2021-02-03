<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
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
    
        <h1>Function</h1>
        
        <?php
            
            // Functions
            function print5(){
                echo "<br>Five";
            }
            echo print5();
            
            function print_number($number){
                echo "<br>The variable of the function is: ";
                echo $number;
            }
            print_number(24);
            print_number(50.55);
            print_number(266);
            print_number(2409380938409);

            $string = "Subhro Saha";
            echo "<br>";
            echo $string;
            echo "<br>";
            echo strlen($string);
            echo "<br>";
            echo str_word_count($string);
            echo "<br>";
            echo strrev($string);
            echo "<br>";
            echo strpos($string, "h");
            echo "<br>";
            echo str_replace("S", "G", $string);
            echo "<br>";
        
        ?>

    </div>
    
    
</body>
</html>