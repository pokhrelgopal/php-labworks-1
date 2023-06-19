<!DOCTYPE html>
<html>

<head>
    <title>Arithmetic Calculator</title>
</head>

<body>
    <form method="POST" action="">
        <label for="num1">Number 1:</label>
        <input type="text" name="num1" id="num1">
        <br>
        <label for="num2">Number 2:</label>
        <input type="text" name="num2" id="num2">
        <br>
        <label for="operator">Operator:</label>
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
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operator = $_POST["operator"];
            
            $result = "";
            
            switch ($operator) {
                case "+":
                    $result = $num1 + $num2;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    break;
                case "*":
                    $result = $num1 * $num2;
                    break;
                case "/":
                    $result = $num1 / $num2;
                    break;
                case "%":
                    $result = $num1 % $num2;
                    break;
                default:
                    $result = "Invalid operator";
                    break;
            }
            
            echo "<label>Result: $result</label>";
        }
    ?>
</body>

</html>