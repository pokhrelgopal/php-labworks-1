<?php
// array_push()
$fruits = ["apple", "banana"];
array_push($fruits, "cherry");
print_r($fruits);
echo "<br>";

// array_shift()
$firstFruit = array_shift($fruits);
echo "First Fruit: $firstFruit<br>";

// array_search()
$index = array_search("banana", $fruits);
echo "Index of 'banana': $index<br>";

// array_unshift()
array_unshift($fruits, "orange");
print_r($fruits);
echo "<br>";

// sort()
sort($fruits);
print_r($fruits);
echo "<br>";

// asort()
$prices = ["apple" => 0.99, "banana" => 0.50, "cherry" => 1.99];
asort($prices);
print_r($prices);
echo "<br>";

// ksort()
ksort($prices);
print_r($prices);
echo "<br>";

// rsort()
rsort($fruits);
print_r($fruits);
echo "<br>";

// arsort()
arsort($prices);
print_r($prices);
echo "<br>";

// krsort()
krsort($prices);
print_r($prices);
echo "<br>";

// each(), current(), reset(), end(), next(), pos(), prev()
$person = ["name" => "John", "age" => 25, "city" => "New York"];
$pair = each($person);
print_r($pair);
echo "<br>";

$currentElement = current($person);
echo "Current Element: $currentElement<br>";

reset($person);
$firstElement = current($person);
echo "First Element: $firstElement<br>";

end($person);
$lastElement = current($person);
echo "Last Element: $lastElement<br>";

next($person);
$nextElement = current($person);
echo "Next Element: $nextElement<br>";

prev($person);
$prevElement = current($person);
echo "Previous Element: $prevElement<br>";

$position = pos($person);
echo "Current Position: $position<br>";

// shuffle()
shuffle($fruits);
print_r($fruits);
echo "<br>";

// array_reverse()
$reversedFruits = array_reverse($fruits);
print_r($reversedFruits);
echo "<br>";