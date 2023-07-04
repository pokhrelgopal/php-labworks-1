<?php
echo "<h3>Gopal Pokhrel <br> Roll No :20</h3> <br>";
?>
<?php
include "connection.php";
?>
<?php

// Fetch records from two tables using subqueries
$sql = "SELECT t1.column1, t1.column2, t2.column3
FROM table1 AS t1
INNER JOIN table2 AS t2 ON t1.id = t2.table1_id
WHERE t1.column4 IN (
SELECT column4
FROM table1
WHERE column5 = 'Value A'
)";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "Column1: " . $row["column1"] . " - Column2: " . $row["column2"] . " - Column3: " . $row["column3"] . "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
