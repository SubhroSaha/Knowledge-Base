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
        <h1>Lets Learn PHP</h1>
    
        <?php

    // If and Else statements
    echo "<br>";
    echo "<h2>If and Else statements</h2>";
    echo "<br>";
    $age = 6;
    echo "<p>Your party status is here: </p>";
    if($age>=18){
        echo "You can go to the party";
    }
    else if($age==7){
        echo "You are 7 years old";
    }
    else if($age==6){
        echo "You are 6 years old";
    }
    else {
        echo "You cannot go to the party";
    }
    echo "<br>";


    // Array
    echo "<br>";
    echo "<h2>Array</h2>";
    echo "<br>";
    $languages = array("Python","C++","PHP","NodeJs");
    echo $languages[0];
    echo "<br>";
    echo "Count of array is: ";
    echo count($languages);
    echo "<br>";

    // Loops
    echo "<br>";
    echo "<h2>Loops</h2>";
    
    // While loop
    $a = 0;
    while ($a <= 10) {
        echo "<br>The value of a from while loop is: ";
        echo $a;
        $a++;
    }
    $a = 0;
    while ($a < count($languages)) {
        echo "<br>The value of language from while loop is: ";
        echo $languages[$a];
        $a++;
    }
    
    // Do While loop
    $a = 0;
    do {
        echo "<br>The value of language from do while loop is: ";
        echo $languages[$a];
        $a++;
    } while ($a < count($languages));
    
    // For loop
    for ($a=0; $a < count($languages); $a++) { 
        echo "<br>The value of language from for loop is: ";
        echo $languages[$a];
    }
    
    // For Each loop
    foreach ($languages as $value) {
        echo "<br>The value of language from for each loop is: ";
        echo $value;
    }
    
    
    

    ?>


    </div>
    
</body>
</html>