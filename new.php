<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = []; // Initialize errors array

    // Validate Name
    if (empty($_POST["name"])) {
        $errors[] = "Name is required";
    } else {
        $name = htmlspecialchars(strip_tags(trim($_POST["name"])));
        if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
            $errors[] = "Only letters and white space allowed";
        }
    }

    // Validate Email
    if (empty($_POST["email"])) {
        $errors[] = "Email is required";
    } else {
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Invalid email format";
        }
    }

    // Validate Website
    if (empty($_POST["website"])) {
        $errors[] = "Website is required";
    } else {
        $website = filter_var(trim($_POST["website"]), FILTER_SANITIZE_URL);
        if (!filter_var($website, FILTER_VALIDATE_URL)) {
            $errors[] = "Invalid website format";
        }
    }
    // Age validation
    if (empty($_POST["age"])) {
        $errors[] = "Age is required.";
    } else {
        $age = filter_var(trim($_POST["age"]), FILTER_SANITIZE_NUMBER_INT);
        if (!filter_var($age, FILTER_VALIDATE_INT) || $age < 1 || $age > 120) {
            $errors[] = "Age must be a valid number between 1 and 120.";
        }
    }

    // Display Output
    if (empty($errors)) {
        echo "Name: $name <br>";
        echo "Email: $email <br>";
        echo "Website: $website";
    } else {
        foreach ($errors as $e) {
            echo "<p style='color:red;'>$e</p>"; 
        }
    }
}
?>
