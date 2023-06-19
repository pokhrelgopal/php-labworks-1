<?php
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "SELECT * FROM books WHERE id=$id";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $book = $row["book"];
    } else {
        echo "No book found.";
    }
}
?>
<html>

<body>
    <h2>Edit Book</h2>
    <form method="POST" action="">
        <label for="book">Book:</label>
        <input type="text" name="book" value="<?php echo $book; ?>" required>
        <input type="hidden" name="id" value="<?php echo $id; ?>">
        <input type="submit" value="Edit">
    </form>
    <br>
    <a href="23.php">Back</a>
</body>

</html>
<?php
if (isset($_POST["book"])) {
    $id = $_POST["id"];
    $book = $_POST["book"];
    $sql = "UPDATE books SET book='$book' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        header("Location: 23.php");
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

?>