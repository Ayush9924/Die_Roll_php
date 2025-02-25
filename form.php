<!DOCTYPE html>
<html>
<head>
    <title>Simple PHP Form</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <h2>Fill the Form</h2>
    <form method="post" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    echo "<h3>Form Submitted Successfully!</h3>";
    echo "<p>Name: $name</p>";
    echo "<p>Email: $email</p>";
}
?>

