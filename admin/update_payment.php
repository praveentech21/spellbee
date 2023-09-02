<?php
session_start();
if(!isset($_SESSION['supid'])) header("location: login.php");

// Include your database connection code here
include 'connect.php';
// Get the user ID from the AJAX request
if (isset($_POST["pid"])) {
    $pid = $_POST["pid"];
    
    $stmt = $conn->prepare("UPDATE `users` SET payment_status = 1 WHERE pid = ?");
    $stmt->bind_param("i", $pid);
    
    if ($stmt->execute()) {
        // Update successful
        mysqli_query($conn, "INSERT INTO `responses`(`sid`, `response`) VALUES ('$pid','1')");
        echo "Payment confirmation updated successfully.";
    } else {
        // Update failed
        echo "Error updating payment confirmation.";
    }
}
if (isset($_POST["replay"])) {
    $pid = $_POST["replay"];
    
    $stmt = $conn->prepare("DELETE FROM responses WHERE `sid` = ? ");
    $stmt->bind_param("s", $pid);
    
    if ($stmt->execute()) {
        // Update successful
        $setpoints = $conn -> prepare("UPDATE `users` SET `points`= NULL WHERE `pid` = ?");
        $setpoints -> bind_param("s", $pid);
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
