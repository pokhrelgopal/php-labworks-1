<?php
echo "<h3>Gopal Pokhrel <br> Roll No :20</h3> <br>";
?>

<?php
// a. Date and time formatting options
$curDT = date("Y-m-d H:i:s");
echo "Current Date and Time: $curDT<br>";

echo "Current Date: " . date("Y-m-d") . "<br>";
echo "Current Time: " . date("H:i:s") . "<br>";

// b. mktime() and strtotime()
$timestamp = mktime(0, 0, 0, 6, 18, 2027);
$fd = date("Y-m-d", $timestamp);
echo "Formatted Date: $fd<br>";

$futureDate = strtotime("+1 week");
$formattedFutureDate = date("Y-m-d", $futureDate);
echo "Future Date: $formattedFutureDate<br>";
