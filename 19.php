<?php
// Define variables and set to empty values
$nameErr = $usernameErr = $ageErr = $passwordErr = $confirmPasswordErr = "";
$name = $username = $age = $password = $confirmPassword = "";

// Function to sanitize and validate input data
function sanitizeInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

// Validate form on submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate name
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = sanitizeInput($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Name cannot have numbers and special characters";
        }
    }
    
    // Validate username
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = sanitizeInput($_POST["username"]);
        if (strlen($username) < 8 || !preg_match("/^[a-zA-Z]/", $username)) {
            $usernameErr = "Username should be of minimum 8 characters and must begin with an alphabet";
        }
    }
    
    // Validate age
    if (empty($_POST["age"])) {
        $ageErr = "Age is required";
    } else {
        $age = sanitizeInput($_POST["age"]);
        if (!is_numeric($age) || $age < 16) {
            $ageErr = "Age cannot be less than 16 years";
        }
    }
    
    // Validate password and confirm password
    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = sanitizeInput($_POST["password"]);
    }
    
    if (empty($_POST["confirm_password"])) {
        $confirmPasswordErr = "Confirm Password is required";
    } else {
        $confirmPassword = sanitizeInput($_POST["confirm_password"]);
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
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" value="<?php echo $name; ?>">
        <span><?php echo $nameErr; ?></span>
        <br><br>

        <label for="username">Username:</label>
        <input type="text" name="username" value="<?php echo $username; ?>">
        <span><?php echo $usernameErr; ?></span>
        <br><br>

        <label for="age">Age:</label>
        <input type="text" name="age" value="<?php echo $age; ?>">
        <span><?php echo $ageErr; ?></span>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" name="password" value="<?php echo $password; ?>">
        <span><?php echo $passwordErr; ?></span>
        <br><br>

        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" value="<?php echo $confirmPassword; ?>">
        <span><?php echo $confirmPasswordErr; ?></span>
        <br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>