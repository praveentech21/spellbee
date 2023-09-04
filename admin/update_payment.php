<?php
session_start();
if(!isset($_SESSION['admin'])) header("location: login.php");
$admin = $_SESSION['admin'];

// Include your database connection code here
include 'connect.php';
// Get the user ID from the AJAX request
if (isset($_POST["payment"])) {
    $pid = $_POST["payment"];
    
    $stmt = $conn->prepare("UPDATE `users` SET `payment_status` = 1,`admin` = ? WHERE pid = ?");
    $stmt->bind_param("si",$admin, $pid);
    
    if ($stmt->execute()) {
        echo "Payment confirmation updated successfully.";
    } else {
        // Update failed
        echo "Error updating payment confirmation.";
    }
}
if (isset($_POST["replay"])) {
    $pid = $_POST["replay"];
    $previous_status = mysqli_fetch_assoc(mysqli_query($conn, "SELECT `payment_status` FROM `users` WHERE `pid` = $pid"))['payment_status'];
    $previous_status++;
    $stmt = $conn->prepare("DELETE FROM responses WHERE `sid` = ? ");
    $stmt->bind_param("s", $pid);
    
    if ($stmt->execute()) {
        // Update successful
        $setpoints = $conn -> prepare("UPDATE `users` SET `payment_status` =?,`admin` = ? , `status`=1, `points`= NULL WHERE `pid` = ?");
        $setpoints -> bind_param("iss",$previous_status,$admin, $pid);
        $setpoints -> execute();
        echo "Replay confirmation updated successfully.";
    } else {
        // Update failed
        echo "Error updating Replay confirmation.";
    }
}
if (isset($_POST["gameconfirm"])) {
    $pid = $_POST["gameconfirm"];
    $stmt = $conn->prepare("UPDATE `users` SET `status`=1 ,`admin` = ? WHERE `pid` = ?");
    $stmt->bind_param("ss", $admin, $pid);
    
    if ($stmt->execute()) {
        // Update successful
        echo "Game confirmation updated successfully.";
    } else {
        // Update failed
        echo "Error updating Game confirmation.";
    }
}
else {
    // Invalid request
    echo "Invalid request.";
}
?>
