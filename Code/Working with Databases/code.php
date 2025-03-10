<?php
    // $pdo = new PDO("mysql:host=localhost;dbname=Guvi", "root", "");
    // echo "Connected successfully";

    // $sql = "INSERT INTO users (name, email) VALUES ('John', 'john@example.com')";
    // $pdo->query($sql);

    // $sql = "INSERT INTO users (name, email) VALUES ('Virat', 'virat@example.com')";
    // $pdo->query($sql);


    // CREATE / INSERT

    // $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
    // $name = "JohnPrepared";  
    // $email = "johnprepared@example.com";  
    // $stmt->bind_param("ss", $name, $email);
    // $stmt->execute();

    // READ

    // $conn = new mysqli("localhost", "root", "", "Guvi");
    // if ($conn->connect_error) {
    //     echo "Connection Error!";
    //     die("Connection failed: " . $conn->connect_error);
    // }

    // $result = $conn->query("SELECT * FROM Users");
    // while ($row = $result->fetch_assoc()) {
    //     echo $row["name"] . " - " . $row["email"] . "<br>";
    // }

    // UPDATE
    // $conn = new mysqli("localhost", "root", "", "Guvi");

    // $stmt = $conn->prepare("UPDATE users SET email=? WHERE name=?");
    // $stmt->bind_param("ss", $newEmail, $name);
    // $newEmail = "kohli@example.com";
    // $name = "Virat";
    // $stmt->execute();

    $conn = new mysqli("localhost", "root", "", "Guvi");
    $stmt = $conn -> prepare("DELETE FROM users WHERE name=?");
    $stmt -> bind_param("s", $nameToBeDeleted);
    $nameToBeDeleted = "John";
    $stmt -> execute();

?>
