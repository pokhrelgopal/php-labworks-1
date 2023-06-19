<?php
$studentInfo = [
    "name" => "John Doe",
    "age" => 20,
    "university" => "ABC University",
    "major" => "Computer Science"
];

// Using for loop
echo "Using for loop:<br>";
$keys = array_keys($studentInfo);
$size = count($keys);

for ($i = 0; $i < $size; $i++) {
    $key = $keys[$i];
    $value = $studentInfo[$key];
    echo "$key: $value<br>";
}

echo "<br>";

// Using foreach loop
echo "Using foreach loop:<br>";
foreach ($studentInfo as $key => $value) {
    echo "$key: $value<br>";
}