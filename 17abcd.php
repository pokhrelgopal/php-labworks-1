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
function sumSecondLargestAndSmallest($numbers)
{
    sort($numbers);
    $size = count($numbers);

    return $numbers[1] + $numbers[$size - 2];
}

// c. Function with default arguments
function greet($name, $message = "Hello")
{
    echo "$message, $name!<br>";
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

$numbers = [5, 2, 8, 1, 9];
echo "Sum of second largest and smallest elements: " . sumSecondLargestAndSmallest($numbers) . "<br>";

greet("John");
greet("Sarah", "Hi");

$value = 5;
incrementByValue($value);
echo "Pass by value: $value<br>";

$value = 5;
incrementByReference($value);
echo "Pass by reference: $value<br>";
