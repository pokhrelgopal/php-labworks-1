<?php
include "connection.php";
?>

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
    <!-- Display book id and name -->
    <h2>
        <?php echo $id; ?>.
        <?php echo $book; ?>
    </h2>

</body>

</html>