<!DOCTYPE html>
<html>
<head>
    <title>PHP Input Sanitization</title>
    <link rel="php" href="new.php">
</head>
<body>
    <form method="post" action="new.php">
        Name: <input type="text" name="name"><br>
        <br>
        Email: <input type="text" name="email"><br>
        <br>
        Website: <input type="text" name="url"><br>
        <br>
        Age: <input type="text" name="age"><br>
        <br>
        <input type="submit" value="Submit">

    </form>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize Inputs
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $url = filter_var(trim($_POST['url']), FILTER_SANITIZE_URL);
    $age = filter_var(trim($_POST['age']), FILTER_SANITIZE_NUMBER_INT);

    echo "<h3>Sanitized Input:</h3>";
    echo "Name: " . htmlspecialchars($name) . "<br>";
    echo "Email: " . htmlspecialchars($email) . "<br>";
    echo "Website: " . htmlspecialchars($url) . "<br>";
    echo "Age: " . htmlspecialchars($age) . "<br>";

    // Save data to a file
    $data = "Name: $name, Email: $email, Website: $url, Age: $age\n";
    file_put_contents("data.txt", $data, FILE_APPEND);
}
?>

