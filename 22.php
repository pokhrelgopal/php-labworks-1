<!DOCTYPE html>
<html>

<body>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $targetDirectory = "uploads/";
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        $uploadSuccess = move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile);

        if ($uploadSuccess) {
            echo "File uploaded successfully.";
        } else {
            echo "File upload failed.";
        }
    }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" enctype="multipart/form-data">
        Select file to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        <input type="submit" value="Upload" name="submit">
    </form>

</body>

</html>