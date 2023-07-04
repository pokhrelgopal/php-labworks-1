<?php
echo "<h3>Gopal Pokhrel <br> Roll No :20</h3> <br>";
?>

<?php
// a. Function to check age restriction
function checkAge($age)
{
    if ($age < 18) {
        return "You are restricted";
    } else {
        return "Welcome";
    }
}

// b. Function to find the sum of second largest and smallest elements in an array
function check($n)
{
    sort($n);
    $size = count($n);

    return $n[1] + $n[$size - 2];
}

// c. Function with default arguments
function greet($name, $msg = "Hello")
{
    echo "$msg, $name!<br>";
}

// d. Pass by value and pass by reference
function incrementByValue($number)
{
    $number += 1;
}

function incrementByReference(&$number)
{
    $number += 1;
}

// Testing the functions
echo checkAge(20) . "<br>";

$n = [5, 2, 8, 1, 16];
echo "Sum of second largest and smallest elements: " . check($n) . "<br>";

greet("Ram");
greet("Shyam", "Hi");

$value = 5;
incrementByValue($value);
echo "Pass by value: $value<br>";

$value = 5;
incrementByReference($value);
echo "Pass by reference: $value<br>";