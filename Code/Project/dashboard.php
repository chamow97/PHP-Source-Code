<?php
include 'db.php';
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
$user_id = $_SESSION['user_id'];
$result = $conn->query("SELECT * FROM appointments WHERE user_id = $user_id");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>
    <h2>Your Appointments</h2>
    <table border='1'>
        <tr>
            <th>Service</th>
            <th>Appointment Date</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['service']; ?></td>
                <td><?php echo $row['appointment_date']; ?></td>
                <td><?php echo $row['status']; ?></td>
                <td>
                    <a href='update.php?id=<?php echo $row['id']; ?>'>Edit</a>
                    <a href='delete.php?id=<?php echo $row['id']; ?>' onclick="return confirm('Are you sure?');">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
    <a href="book.html">Book New Appointment</a>
    <a href="logout.php">Logout</a>
</body>
</html>