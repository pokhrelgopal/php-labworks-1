<?php
include '../connection.php';
// receive id by get
$id = $_GET['id'];
$sql = "SELECT * FROM `todo` WHERE `id` = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $sql = "UPDATE `todo` SET `title` = '$title', `description` = '$description' WHERE `id` = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('Location: main.php');
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<html>

<body>
    <form action="" method="post">
        <input type="text" name="title" value="<?php echo $row['title']; ?>"> <br> <br>
        <textarea name="description" cols="30" rows="10"><?php echo $row['description']; ?></textarea> <br><br>
        <button type="submit" name="update">Update</button>
    </form>
    <?php
    if (isset($_POST['update'])) {
        $title = $_POST['title'];
        $description = $_POST['description'];
        $sql = "UPDATE `todo` SET `title` = '$title', `description` = '$description' WHERE `id` = '$id'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('Location: main.php');
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>

</html>