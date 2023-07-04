<?php
echo "<h3>Gopal Pokhrel <br> Roll No :20</h3> <br>";
?>


<?php
// Define variables and set to empty values
$nameErr = $usernameErr = $ageErr = $passwordErr = $confirmPasswordErr = "";

// Validate form on submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "required";
    } else {
        if (!preg_match("/^[a-zA-Z ]*$/", $_POST["name"])) {
            $nameErr = "Only text allowed";
        }
    }

    // Validate username
    if (empty($_POST["username"])) {
        $usernameErr = "required";
    } else {
        if (strlen($_POST["username"]) < 8 || !preg_match("/^[a-zA-Z]/", $_POST["username"])) {
            $usernameErr = "Username should be of minimum 8 characters and must begin with an alphabet";
        }
    }

    // Validate age
    if (empty($_POST["age"])) {
        $ageErr = "required";
    } else {
        $age = $_POST["age"];
        if (!is_numeric($age) || $age < 16) {
            $ageErr = "Age cannot be less than 16 years";
        }
    }



    // Validate password and confirm password
    if (empty($_POST["password"])) {
        $passwordErr = "required";
    } else {
        $password = $_POST["password"];
    }

    if (empty($_POST["confirm_password"])) {
        $confirmPasswordErr = "required";
    } else {
        $confirmPassword = $_POST["confirm_password"];
        if ($password != $confirmPassword) {
            $confirmPasswordErr = "Password and Confirm Password must match";
        }
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Form Validation</title>
</head>

<body>
    <h2>Form Validation</h2>
    <form method="post" action="">
        <input type="text" name="name" placeholder="Name">
        <span><?php echo $nameErr; ?></span>
        <br><br>

        <input type="text" name="username" placeholder="Username">
        <span><?php echo $usernameErr; ?></span>
        <br><br>

        <input type="text" name="age" placeholder="Age">
        <span><?php echo $ageErr; ?></span>
        <br><br>

        <input type="password" name="password" placeholder="Password">
        <span><?php echo $passwordErr; ?></span>
        <br><br>

        <input type="password" name="confirm_password" placeholder="Confirm Password">
        <span><?php echo $confirmPasswordErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>