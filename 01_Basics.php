<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h1>This is my first website</h1>
        <?php
            echo "Hello world! This is PHP";
            echo "<br>";
            // comment
            /*
            Multi line comment
            */
        ?>
        <?php

        // Variables
        echo "<h2>Variables</h2>";
        $variable1 = 34;
        $variable2 = 45;
        echo $variable1;
        echo $variable2;
        
        echo $variable1 + $variable2;
        Echo $variable1 + $variable2;
        echo "<br>";
        
        // Operators
        echo "<h2>Operators</h2>";
        
        // Arithmetic Operators
        echo "<h3>Arithmetic Operators</h3>";
        echo "The value of variable 1 + variable 2 is ";
        echo $variable1 + $variable2;
        echo "<br>";
        echo "The value of variable 1 + variable 2 is ";
        echo $variable1 - $variable2;
        echo "<br>";
        echo "The value of variable 1 + variable 2 is ";
        echo $variable1 * $variable2;
        echo "<br>";
        echo "The value of variable 1 + variable 2 is ";
        echo $variable1 / $variable2;
        echo "<br>";
        
        // Assignment Operators
        echo "<h3>Assignment Operators</h3>";
        $newVar = $variable1;
        $newVar += 1;
        $newVar -= 1;
        $newVar *= 1;
        $newVar /= 1;
        echo "The value of new variable newVar = variable1 is ";
        echo $newVar;
        echo "<br>";
        
        // Comparison Operators
        echo "<h3>Comparison Operators</h3>";
        echo "The value of 1 == 4 is ";
        echo var_dump(1==4);
        echo "<br>";
        echo "The value of 1 != 4 is ";
        echo var_dump(1!=4);
        echo "<br>";
        echo "The value of 1 >= 4 is ";
        echo var_dump(1>=4);
        echo "<br>";
        echo "The value of 1 <= 4 is ";
        echo var_dump(1<=4);
        echo "<br>";
        
        
        // Increment/Decrement Operators
        echo "<h3>Comparison Operators</h3>";
        echo $variable1;
        echo "<br>";
        echo $variable1++;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo $variable1--;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo ++$variable1;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        echo --$variable1;
        echo "<br>";
        echo $variable1;
        echo "<br>";
        
        
        
        // Logical Operators
        echo "<h3>Comparison Operators</h3>";
        
        // and (&&)
        $myVar = (true and true); 
        echo var_dump($myVar);
        $myVar = (true and false); 
        echo var_dump($myVar);
        $myVar = (false and true); 
        echo var_dump($myVar);
        $myVar = (false and false); 
        echo var_dump($myVar);
        echo "<br>";
        
        // or (||)
        $myVar = (true or true); 
        echo var_dump($myVar);
        $myVar = (true or false); 
        echo var_dump($myVar);
        $myVar = (false or true); 
        echo var_dump($myVar);
        $myVar = (false or false); 
        echo var_dump($myVar);
        echo "<br>";
        
        // xor
        $myVar = (true xor true); 
        echo var_dump($myVar);
        $myVar = (true xor false); 
        echo var_dump($myVar);
        $myVar = (false xor true); 
        echo var_dump($myVar);
        $myVar = (false xor false); 
        echo var_dump($myVar);
        echo "<br>";
        
        // !
        $myVar = (!true && !true); 
        echo var_dump($myVar);
        echo "<br>";
        
        ?>



        <?php


        // Data types
        echo "<h2>Data types</h2>";

        //  1. String
        $var = "This is a String ";
        echo $var;
        echo "<br>";
        echo var_dump($var);
        echo "<br>";

        //  2. Integer
        $var = 67;
        echo $var;
        echo "<br>";
        echo var_dump($var);
        echo "<br>";

        //  3. Float
        $var = 67.999;
        echo $var;
        echo "<br>";
        echo var_dump($var);
        echo "<br>";

        //  4. Boolean
        $var = true;
        echo $var;
        echo "<br>";
        echo var_dump($var);
        echo "<br>";

        //  5. Array
        // $var = [1,2,3,4,5];
        echo $var;
        echo "<br>";
        echo var_dump($var);
        echo "<br>";

        //  6. Object   
        $var = 67;
        echo $var;
        echo "<br>";
        echo var_dump($var);
        echo "<br>";

        // 7. Constant
        define ('PI', 3.14);
        echo PI;
        echo "<br>";


        ?>

    </div>

</body>
</html>