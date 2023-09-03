<?php
session_start();
if(!isset($_SESSION['supid'])) header("location: login.php");

// Include your database connection code here
include 'connect.php';
// Get the user ID from the AJAX request
if (isset($_POST["payment"])) {
    $pid = $_POST["payment"];
    
    $stmt = $conn->prepare("UPDATE `users` SET `payment_status` = 1,`status`=1 WHERE pid = ?");
    $stmt->bind_param("i", $pid);
    
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
        $setpoints = $conn -> prepare("UPDATE `users` SET `payment_status` =? , `status`=1, `points`= NULL WHERE `pid` = ?");
        $setpoints -> bind_param("ss",$previous_status, $pid);
        $setpoints -> execute();
        echo "Payment confirmation updated successfully.";
    } else {
        // Update failed
        echo "Error updating payment confirmation.";
    }
}
else {
    // Invalid request
    echo "Invalid request.";
}
?>
