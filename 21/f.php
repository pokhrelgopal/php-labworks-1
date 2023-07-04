<?php
$output = fopen('output.pdf', 'w');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form values
    $name = $_POST['name'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $education = $_POST['education'];

    $allInfo = "Name: $name\nAge: $age\nAddress: $address\nEmail: $email\nPhone: $phone\nEducation: $education";

    fwrite($output, $allInfo);
    fclose($output);
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Bio-data Form</title>
</head>

<body>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="age">Age:</label>
        <input type="number" name="age" required><br>

        <label for="address">Address:</label>
        <input type="text" name="address" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="tel" name="phone" required><br>

        <label for="education">Education:</label>
        <textarea name="education" required></textarea><br>

        <input type="submit" value="Generate PDF">
    </form>
</body>

</html>