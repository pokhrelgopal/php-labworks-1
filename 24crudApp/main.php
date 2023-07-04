<?php
include "../connection.php";
?>

<html>

<body>
    <form action="" method="post">
        <!-- todo app with title and descriptions -->
        <label for="title">Title:</label> <br>
        <input type="text" name="title" id="title" required> <br>
        <label for="description">Description:</label> <br>
        <textarea name="description" id="description" cols="30" rows="10" required></textarea> <br>
        <br>
        <input type="submit" value="Add Todo" name="addTodo">
    </form>
    <?php
    if (isset($_POST['addTodo'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $sql = "INSERT INTO `todo` (`title`, `description`) VALUES ('$title', '$description')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Todo added successfully";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }

    ?>
    <hr>
    <form action="main.php" method="post">
        <button type="submit" name="showTodo">Show Todo</button>
        <?php
        if (isset($_POST['showTodo'])) {
            $sql = "SELECT * FROM `todo`";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                echo "<table cellpadding='20'>";
                echo "<tr>
                <th>Title</th>
                <th>Description</th>
                <th>Actions</th>
                </tr>";
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["title"] . "</td>";
                    echo "<td>" . $row["description"] . "</td>";
                    echo "<td>
                        <form action='' method='post' style='display:inline'>
                            <input type='hidden' name='id' value='" . $row["id"] . "'>
                            <button type='submit' name='delete'>Delete</button>
                        </form>
                        <a href='edit.php?id=" . $row["id"] . "'>
                            <button type='button'>Edit</button>
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
    </form>

</html>

<?php
// delete
if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM `todo` WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "Todo deleted successfully";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>