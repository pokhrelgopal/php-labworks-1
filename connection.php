<!-- connect to database -->
<?php
$servername = "localhost";
$username = "root";
$password = "user";
$dbname = "lab3";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed");
}
?>