<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['name'];
//     echo "Hello, " . htmlspecialchars($name);
// } 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["email"])) {
        echo "Email is required.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        echo "Valid email!";
    }
}

?>
