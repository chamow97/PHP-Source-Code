<?php
include 'db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    die("Login required!");
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_id = $_SESSION['user_id'];
    $service = $_POST['service'];
    $date = $_POST['appointment_date'];
    
    $stmt = $conn->prepare("INSERT INTO appointments (user_id, service, appointment_date) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $user_id, $service, $date);
    if ($stmt->execute()) {
        header("Location: dashboard.php");
    } else {
        echo "Error: " . $stmt->error;
    }
}
?>