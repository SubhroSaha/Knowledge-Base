<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h2>Operators</h2>
        
        <?php

        // Variables
        $variable1 = 34;
        $variable2 = 45;
        echo $variable1;
        echo "<br>";
        echo $variable2;
        echo "<br>";            
        echo $variable1 + $variable2;
        echo "<br>";
        Echo $variable1 + $variable2;
        echo "<br>";
        
        // Operators
        // echo "<h2>Operators</h2>";
        
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
        echo "The value of new variable newVar = variable1 is ".$newVar;
        // echo $newVar;
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
        echo "<h3>Increment/Decrement Operators</h3>";
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
        echo "<h3>Logical Operators Operators</h3>";
        
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
        

    </div>

</body>
</html>