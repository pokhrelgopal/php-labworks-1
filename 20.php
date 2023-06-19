<?php
// a. Date and time formatting options
$currentDateTime = date("Y-m-d H:i:s");
echo "Current Date and Time: $currentDateTime<br>";

$currentDate = date("d/m/Y");
echo "Current Date: $currentDate<br>";

$currentTime = date("h:i A");
echo "Current Time: $currentTime<br>";

// b. mktime() and strtotime()
$timestamp = mktime(0, 0, 0, 6, 18, 2023);
$formattedDate = date("Y-m-d", $timestamp);
echo "Formatted Date: $formattedDate<br>";

$futureDate = strtotime("+1 week");
$formattedFutureDate = date("Y-m-d", $futureDate);
echo "Future Date: $formattedFutureDate<br>";
