<?php
echo "<h3>Gopal Pokhrel <br> Roll No :20</h3> <br>";
?>


<!DOCTYPE html>
<html>

<head>
    <title>Arithmetic Calculator</title>
</head>

<body>
    <form method="POST" action="">
        <input type="text" name="num1" id="num1">
        <br>
        <input type="text" name="num2" id="num2">
        <br>
        <select name="operator" id="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
            <option value="%">%</option>
        </select>
        <br>
        <input type="submit" value="Calculate">
    </form>

    <?php
    error_reporting(0);
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];


    switch ($operator) {
        case "+":
            echo $num1 + $num2;
            break;
        case "-":
            echo $num1 - $num2;
            break;
        case "*":
            echo $num1 * $num2;
            break;
        case "/":
            echo $num1 / $num2;
            break;
        case "%":
            echo $num1 % $num2;
            break;
        default:
            echo "Invalid Operator";
            break;
    }


    ?>
</body>

</html>