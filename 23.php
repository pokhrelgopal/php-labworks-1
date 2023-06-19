<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>

<head>
    <title>Book Entry</title>
</head>

<body>
    <h2>Add Book</h2>
    <form method="POST" action="">
        <label for="book">Book:</label>
        <input type="text" name="book" required>
        <input type="submit" value="Add">
    </form>
    <br>
    <div>
        <form action="" method="post">
            <button type="submit" name="viewBooks">View Books</button>
        </form>
        <?php
        if (isset($_POST["viewBooks"])) {
            $sql = "SELECT * FROM books";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo "<table cellpadding='20'>";
                // we have id name and actions
                echo "<tr><th>ID</th><th>Book</th><th>Actions</th></tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["book"] . "</td>";
                    echo "<td>
                    <form action='' method='post' style='display:inline'>
                    <input type='hidden' name='id' value='" . $row["id"] . "'>
                    <button type='submit' name='delete'>Delete</button>
                    </form>
                    <a href='edit.php?id=" . $row["id"] . "'>
                    <button>Edit</button>
                    </a>
                    </td>";
                    echo "</tr>";
                }
                echo "</table>";
            } else {
                echo "No books found.";
            }
        } else {
            echo "No books found.";
        }
        ?>
    </div>
</body>

</html>
<?php

if (isset($_POST["book"])) {
    $book = $_POST["book"];
    $sql = "INSERT INTO books (book) VALUES ('$book')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Book added successfully.";
    } else {
        echo "Error";
    }
}
if (isset($_POST["delete"])) {
    $id = $_POST["id"];
    $sql = "DELETE FROM books WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Book deleted successfully.";
    } else {
        echo "Error";
    }
}
?>