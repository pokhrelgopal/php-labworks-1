<!DOCTYPE html>
<html>

<head>
    <title>Multiplication Table</title>
</head>

<body>
    <form method="POST" action="">
        <input type="text" name="num1" id="num1" placeholder="num 1">
        <br>
        <input type="text" name="num2" id="num2" placeholder="num 2">
        <br>
        <input type="submit" value="Generate Table">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        $biggerNumber = max($num1, $num2);

        echo "<h2>Multiplication Table of $biggerNumber:</h2>";
        echo "<table>";

        for ($i = 1; $i <= 10; $i++) {
            echo "<tr><td>$biggerNumber x $i</td><td>=</td><td>" . ($biggerNumber * $i) . "</td></tr>";
        }

        echo "</table>";
    }
    ?>
</body>

</html>