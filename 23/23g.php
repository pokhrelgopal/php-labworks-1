<?php
echo "<h3>Gopal Pokhrel <br> Roll No :20</h3> <br>";
?><?php


    include "connection.php";

    // Fetch records from the books and authors tables using SQL joins
    $sql = "SELECT b.book_title, b.book_price, a.author_name
        FROM books AS b
        INNER JOIN authors AS a ON b.author_id = a.author_id";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "Book Title: " . $row["book_title"] . " - Book Price: $" . $row["book_price"] . " - Author: " . $row["author_name"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    $conn->close();
