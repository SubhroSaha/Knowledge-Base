<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    
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
    
    
    ?>
    
    
</body>
</html>