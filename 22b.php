<?php
echo "<h3>Gopal Pokhrel <br> Roll No :20</h3> <br>";
?>


<html>

<body>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" value="Upload">
    </form>
</body>

</html>

<?php
if (isset($_FILES['file'])) {
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_name = $_FILES['file']['name'];
    move_uploaded_file($file_tmp, "uploads/$file_name");
    echo "Success";
}
?>