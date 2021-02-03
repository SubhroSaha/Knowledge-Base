<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>

    <form action="">
        <input type="text" name="num1" placeholder="Number 1"><br>
        <input type="text" name="num2" placeholder="Number 2"><br>
        <select name="operator" id="">
            <option value="None">None</option>
            <option value="Add">Add</option>
            <option value="Subtract">Subtract</option>
            <option value="Multiply">Multiply</option>
            <option value="Divide">Divide</option> 
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p>The answer is : </p>

    <?php
        if (isset($_GET["submit"])) {
            $num1 = $_GET["num1"];
            $num2 = $_GET["num2"];
            $operator = $_GET["operator"];
            switch($operator){
                case "None":
                    echo "You need to select a method";
                    break;
                case "Add":
                    echo $num1 + $num2;
                    break;
                case "Subtract":
                    echo $num1 - $num2;
                    break;
                case "Multiply":
                    echo $num1 * $num2;
                    break;
                case "Divide":
                    echo $num1 / $num2;
                    break;
            }
        }
    ?>
    
</body>
</html>