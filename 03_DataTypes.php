<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h2>Data Types</h2>

        <?php


        // Data types

        //  1. String
        $var = "This is a String ";
        echo $var;
        echo "<br>";
        echo "Datatype is ";
        echo var_dump($var);
        echo "<br>";
        echo "<br>";

        //  2. Integer
        $var1 = 67;
        echo $var1;
        echo "<br>";
        echo "Datatype is ";
        echo var_dump($var1);
        echo "<br>";
        echo "<br>";

        //  3. Float
        $var2 = 67.999;
        echo $var2;
        echo "<br>";
        echo "Datatype is ";
        echo var_dump($var2);
        echo "<br>";
        echo "<br>";

        //  4. Boolean
        $var3 = true;
        echo $var3;
        echo "<br>";
        echo "Datatype is ";
        echo var_dump($var3);
        echo "<br>";
        echo "<br>";

        //  5. Array
        $var4 = array(1,"Hello",3,4,5);
        echo "Array is [".$var4[0].", ".$var4[1].", ".$var4[2].", ".$var4[3].", ".$var4[4]."]";
        echo "<br>";
        echo "Datatype is ";
        echo var_dump($var4);
        echo "<br>";
        echo "<br>";

        //  6. Object   
        $var5 = 67;
        echo $var5;
        echo "<br>";
        echo "Datatype is ";
        echo var_dump($var5);
        echo "<br>";
        echo "<br>";
        
        // 7. Constant
        define ('PI', 3.14);
        echo PI;
        echo "<br>";
        echo "Datatype is ";
        echo var_dump(PI);
        echo "<br>";


        ?>

    </div>

</body>
</html>