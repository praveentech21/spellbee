<?php
// Include your database connection code here
include 'connect.php';
// Get the user ID from the AJAX request
if (isset($_POST["pid"])) {
    $pid = $_POST["pid"];
    
    $stmt = $conn->prepare("UPDATE `users` SET payment_status = 1 WHERE pid = ?");
    $stmt->bind_param("i", $pid);
    
    if ($stmt->execute()) {
        // Update successful
        echo "Payment confirmation updated successfully.";
    } else {
        // Update failed
        echo "Error updating payment confirmation.";
    }
} else {
    // Invalid request
    echo "Invalid request.";
}
?>
